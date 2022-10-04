<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="mb-4">
                        @foreach($posts as $post)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4">{{ $post->title }}</td>
                                <td class="px-6 py-4">
                                    <a href="" class="text-indigo-600">Editar</a>
                                </td>
                                <td class="px-6 py-4">Eliminar</td>
                            </tr>

                        @endforeach
                        <!-- Les recomiendo hacer uso de la directiva @forelse y no del @foreach. Prácticamente cumplen la misma función, la diferencia radica en que el @forelse me válida si el array viene vacio y me da una opción. Por ejemplo, que el usuario no tenga ninguna publicación (post) que ver, si usaramos el @foreach nos daria error.comentario de Platzi -->
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

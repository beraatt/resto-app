<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.create') }}"
                    class="px-4 py-2 bg-indigo-300 hover:bg-indigo-500 text-white rounded-lg ">Kategori Oluştur</a>
            </div>
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Sıra No
                            </th>
                            <th scope="col" class="py-3 px-6">
                                İsim
                            </th>
                            {{--   <th scope="col" class="py-3 px-6">
                                Fotoğraf
                            </th> --}}
                            <th scope="col" class="py-3 px-6">
                                Açıklama
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Düzenle
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            @if ($category->count() > 0)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $category->name }}
                                    </td>
                                    {{-- <td class="py-4 px-6">
                                        <img src="{{ url($category->image) }}" class="w-16 h-16 rounded">
                                    </td> --}}
                                    <td class="py-4 px-6">
                                        {{ $category->description }}
                                    </td>
                                    <td class="py-4 px-6 w-4 h-4" >
                                        <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                            method="POST"> @method('DELETE')
                                            @csrf <button type="submit" class="ml-4"><i
                                                    class="fa fa-times"></i>
                                            </button>
                                            <a
                                                href=" {{ route('admin.categories.edit', $category->id) }}"class="ml-1"><i
                                                    class="fa fa-pen"></i></a>
                                        </form>
                                    </td>
                                </tr>
                            @else
                                <span>Henüz kategori oluşturulmamış.</span>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>

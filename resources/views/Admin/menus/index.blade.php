<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<form action="POST" enctype="multipart/form-data"> @method('PUT') @csrf
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.menus.create') }}"
                    class="px-4 py-2 bg-indigo-300 hover:bg-indigo-500 text-white rounded-lg ">Menü Oluştur</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
                                <th scope="col" class="py-3 px-6">
                                    Açıklama
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Fotoğraf
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Fiyat
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Düzenle
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                @foreach ($menus as $menu )

                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$loop->iteration}}
                                </th>
                                <td class="py-4 px-6">
                                    {{$menu->name}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$menu->description}}
                                </td>
                                <td class="py-4 px-6">
                                    <img src="{{URL::asset('$menu->image')}}" alt="" srcset="">
                                </td>
                                <td class="py-4 px-6">
                                    {{$menu->price}}
                                </td>
                                <td class="py-4 px-6">
                                    Edit
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
</x-admin-layout>

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
                            <th scope="col" class="py-3 px-6">
                                Fotoğraf
                            </th>
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
                                    <td class="py-4 px-6">
                                      <img src="{{ url( $category->image) }}" class="w-16 h-16 rounded">
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $category->description }}
                                    </td>
                                    <td class="py-4 px-6">

                                        <div x-data="{ isOpen: true }" class="relative inline-block ">
                                            <!-- Dropdown toggle button -->
                                            <button @click="isOpen = !isOpen"
                                                class="relative z-10 flex items-center p-2 text-sm text-gray-600 bg-white border border-transparent rounded-md focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:text-white dark:bg-gray-800 focus:outline-none">
                                                <span class="mx-1"></span>
                                                <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </button>

                                            <!-- Dropdown menu -->
                                            <div x-show="isOpen" @click.away="isOpen = false"
                                                x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-start="opacity-0 scale-90"
                                                x-transition:enter-end="opacity-100 scale-100"
                                                x-transition:leave="transition ease-in duration-100"
                                                x-transition:leave-start="opacity-100 scale-100"
                                                x-transition:leave-end="opacity-0 scale-90"
                                                class="absolute right-0 z-20 w-14 py-2 mt-2 items-center overflow-hidden bg-white rounded-md shadow-xl dark:bg-gray-800">
                                                <a href="#"
                                                    class="block px-4 py-3 text-sm items-center text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                                    <i class="fa fa-trash justify-center"></i>
                                                </a>
                                                <a href="#"
                                                    class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <a href="#"
                                                    class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </div>

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

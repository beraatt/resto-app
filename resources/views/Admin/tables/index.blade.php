<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.tables.create') }}"
                    class="px-4 py-2 bg-indigo-300 hover:bg-indigo-500 text-white rounded-lg ">Masa Oluştur</a>
            </div>
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Sıra No
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Masa Adı
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Masa Numarası
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Durum
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Lokasyon
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Edit
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6">
                                    {{ $table->id }}
                                </td>
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $table->name }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $table->guest_number }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $table->status }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $table->location }}
                                </td>
                                <td class="py-4 px-6"">
                                    <i class="fa fa-times"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-end mb-7">
                <a href="{{ route('products.create') }}" type="button"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Tambah produk
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs uppercase bg-gray-800 text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama produk
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Varian
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr class="border-b">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $item->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $item->variant }}
                                        </td>
                                        <td class="px-6 py-4">
                                            Rp. {{ number_format($item->price) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ Str::limit($item->details, 50) }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <a href="{{ route('products.edit', $item->slug) }}"
                                                class="text-indigo-600 hover:text-indigo-800 font-medium">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Detail</h3>
                            <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="overflow-hidden shadow sm:rounded-md">
                                <div class="bg-white px-4 py-5 sm:p-6">

                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                            <label class="block text-sm font-medium text-gray-700">Cover photo</label>
                                            <input id="thumbnail" name="thumbnail" type="file">
                                            <x-validation-errors for="thumbnail" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="name" class="block text-sm font-medium text-gray-700">Nama
                                                produk</label>
                                            <input type="text" name="name" id="name" autocomplete="name"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                value="{{ old('name') }}">
                                            <x-validation-errors for="name" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="slug"
                                                class="block text-sm font-medium text-gray-700">Slug</label>
                                            <input type="text" name="slug" id="slug" autocomplete="slug"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                value="{{ old('slug') }}">
                                            <x-validation-errors for="slug" />
                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="variant"
                                                class="block text-sm font-medium text-gray-700">Varian</label>
                                            <input type="text" name="variant" id="variant" autocomplete="variant"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                value="{{ old('variant') }}">
                                            <x-validation-errors for="variant" />
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="price"
                                                class="block text-sm font-medium text-gray-700">Harga</label>
                                            <input type="text" name="price" id="price" autocomplete="price"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                value="{{ old('price') }}">
                                            <x-validation-errors for="price" />
                                        </div>

                                        <div class="col-span-6">
                                            <label for="details"
                                                class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                            <textarea type="text" name="details" id="details" autocomplete="details"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                            <x-validation-errors for="details" />
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

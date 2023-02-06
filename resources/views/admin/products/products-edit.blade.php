<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Info produk</h3>
                            <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.
                            </p>
                            <div class="mt-5">
                                <form action="{{ route('products.destroy', $product->slug) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="inline-flex items-center gap-2 text-red-600 hover:text-red-700 font-medium text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                        <span>
                                            Hapus produk
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <form action="{{ route('products.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="overflow-hidden shadow sm:rounded-md">
                                <div class="bg-white px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                            <label class="block text-sm font-medium text-gray-700">Cover photo</label>
                                            <input type="file" name="oldThumbnail" id="oldThumbnail"
                                                class="mt-1 sr-only" value="{{ $product->thumbnail }}">
                                            <input type="file" name="thumbnail" id="thumbnail" class="mt-1">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="name" class="block text-sm font-medium text-gray-700">Nama
                                                produk</label>
                                            <input type="text" name="name" id="name" autocomplete="name"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                value="{{ $product->name }}">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="slug"
                                                class="block text-sm font-medium text-gray-700">Slug</label>
                                            <input type="text" name="slug" id="slug" autocomplete="slug"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                value="{{ $product->slug }}">
                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="variant"
                                                class="block text-sm font-medium text-gray-700">Varian</label>
                                            <input type="text" name="variant" id="variant" autocomplete="variant"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                value="{{ $product->variant }}">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="price"
                                                class="block text-sm font-medium text-gray-700">Harga</label>
                                            <input type="text" name="price" id="price" autocomplete="price"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                value="{{ $product->price }}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="details"
                                                class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                            <textarea type="text" name="details" rows="5" id="details" autocomplete="details"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $product->details }}</textarea>
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

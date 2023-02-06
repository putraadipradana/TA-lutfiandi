<div>
    <div id="products" class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
            @forelse ($products as $item)
                <button wire:click="productDetailModal({{ $item->id }})" class="group text-left">
                    <div class="w-full aspect-w-4 aspect-h-3 rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" alt=""
                            class="h-full w-full object-cover object-center group-hover:opacity-75" />
                    </div>
                    <h3 class="mt-4 text-base font-medium text-gray-900">{{ $item->name }}
                    </h3>
                    <p class="text-sm mt-1 italic text-gray-500">
                        {{ $item->variant }}
                    </p>
                </button>
            @empty
                <div></div>
            @endforelse
        </div>
    </div>

    <x-dialog-modal wire:model="productDetail" maxWidth="4xl">
        <x-slot name="content">
            <div class="flex">
                <div class="w-96 h-96 bg-gray-300 rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $thumbnail) }}" alt="" class="object-cover h-full w-full">
                </div>
                <div class="flex-1 flex flex-col ml-6">
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold">{{ $name }}</h3>
                        <span class="text-sm text-gray-500">{{ $variant }}</span>
                        <div class="mt-5 space-y-3">
                            <span class="mt-3 text-xl">IDR {{ number_format($price) }}</span>
                            <p class="text-gray-600">{{ $details }}</p>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-sm text-gray-900">Pesan melalui</h2>
                        <div class="flex items-center w-full mt-2">
                            <a href="https://www.messenger.com/t/100014302713152" target="_blank"
                                class="w-full bg-blue-600 hover:bg-blue-700 transition-all duration-300 py-3 rounded-l-md flex items-center justify-center gap-2 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current"
                                    viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                                </svg>
                                <span class="text-sm">
                                    Facebook
                                </span>
                            </a>
                            <a href="https://wa.me/+6285338121411" target="_blank"
                                class="w-full bg-green-600 hover:bg-green-700 transition-all duration-300 py-3 rounded-r-md flex items-center justify-center gap-2 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current"
                                    viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                                <span class="text-sm">
                                    Whatsapp
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>

@extends('layouts.main')

@section('content')
    {{-- Hero section --}}
    <div class="mt-24 mx-auto px-4 max-w-7xl sm:mt-32">
        <div class="text-center">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                Lutfiandi's Kitchen
            </h1>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Welcome to lutfiandi's kitchen. Find and order your favorite food with discount 5% in every end of
                month.
                Free shipping with minimum purchase IDR 50.000.
            </p>
            {{-- <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                <div class="rounded-md shadow">
                    <a href="{{ route('index') }}"
                        class="divide-x w-full flex items-center justify-center px-6 py-4 border border-transparent text-base font-medium rounded-md text-white bg-gray-900 divide-gray-600 hover:bg-gray-700 md:text-lg">
                        <span class="pr-3">Get the bundle</span>
                        <span class="pl-3">$199</span>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>

    {{-- Products grid --}}
    {{-- <div id="products" class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        @if ($products->count() > 0)
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                @foreach ($products as $item)
                    <a href="/product/{{ $item->slug }}" class="group text-left">
                        <div class="w-full aspect-w-4 aspect-h-3 rounded-lg overflow-hidden">
                            <img src="{{ $item->thumbnail }}" alt=""
                                class="h-full w-full object-cover object-center group-hover:opacity-75" />
                        </div>
                        <div class="flex items-center justify-between mt-4 text-base font-medium text-gray-900">
                            <h3>{{ $item->name }}</h3>
                            <p>
                                <span class="text-sm mr-0.5">IDR</span>
                                <span>{{ number_format($item->price) }}</span>
                            </p>
                        </div>
                        <p class="text-sm mt-1 italic text-gray-500">
                            {{ $item->variant }}
                        </p>
                    </a>
                @endforeach
            </div>
        @else
            <div class="flex items-center justify-center py-20">
                <span class="text-xl font-medium text-gray-400">No products</span>
            </div>
        @endif
    </div> --}}

    @livewire('products-grid')
@endsection

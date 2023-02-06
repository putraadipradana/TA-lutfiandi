@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="p-1">
        <div class="p-5">
            {{ $content }}
        </div>
    </div>
</x-modal>

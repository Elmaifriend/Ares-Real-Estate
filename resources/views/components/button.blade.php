@props([
    'href' => null,
    'type' => 'button'
])

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex items-center text-label-large text-white bg-highlight hover:bg-highlight/80 rounded-full px-6 py-4 transition-colors']) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'flex items-center text-label-large text-white bg-highlight hover:bg-highlight/80 rounded-full px-6 py-4 transition-colors cursor-pointer']) }}>
        {{ $slot }}
    </button>
@endif

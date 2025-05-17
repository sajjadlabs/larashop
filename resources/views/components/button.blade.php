@props(['icon', 'callToAction'])

@php
$class = 'cursor-pointer';

if ($icon ?? false) {
    $class .= ' flex cursor-pointer items-center gap-x-2';
}

if ($callToAction ?? false) {
    $class .= ' bg-blue-500 hover:bg-blue-600 transition-colors duration-300 px-3 py-2 text-white rounded-md shadow xs focus:outline-blue-600';
}

@endphp

<button {{ $attributes(['class' => $class]) }}>
    @if($icon ?? false)
        <div>
            <img src="{{ $icon }}" alt="button icon">
        </div>
    @endif

    <span>{{ $slot }}</span>
</button>

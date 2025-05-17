@props(['src', 'callToAction', 'value', 'size' => 'base', 'rounded' => false])

@php
    $class = 'cursor-pointer';

    $class .= match ($size) {
        'small' => ' p-2 text-sm',
        'base' => ' px-3 py-2',
    };

    if ($rounded) {
        $class .= ' rounded-4xl';
    } else {
        $class .= ' rounded-md';
    }

    if ($src ?? false) {
        $class .= ' flex cursor-pointer items-center';
    }

    if ($value ?? false) {
        $class .= ' gap-x-2';
    }

    if ($callToAction ?? false) {
        $class .= ' bg-blue-500 hover:bg-blue-600 transition-colors duration-300 text-white shadow xs focus:outline-blue-600';
    }

@endphp

<button {{ $attributes(['class' => $class]) }}>
    @if($src ?? false)
        <div>
            <img src="{{ $src }}" alt="button icon">
        </div>
    @endif

    @if($value ?? false)
        <span>{{ $value }}</span>
    @endif
</button>

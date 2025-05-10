@props(['value', 'icon'])

<button class="flex cursor-pointer gap-x-2">
    @if($icon ?? false)
        <div>
            <img src="{{ $icon }}" alt="button icon">
        </div>
    @endif

    <span>{{ $value }}</span>
</button>

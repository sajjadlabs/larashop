@props(['value'])
<button {{ $attributes(['class' => "flex gap-1 px-3 py-2 items-center bg-white hover:bg-white/80 transition-colors duration-300 cursor-pointer rounded-[24px] text-sm"]) }}>
    {{ $value ?? '' }}
    <img src="https://placehold.co/16" alt="">
</button>

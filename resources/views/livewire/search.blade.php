<div class="absolute left-1/2 transform -translate-x-1/2 flex w-4xs md:w-xl gap-2 justify-between items-center rounded-4xl bg-gray-100 p-1 ps-4 md:p-1">
    <x-drop-down size="small" class="hidden md:flex" :value="__('search.choose-category')"/>

    <input type="text" placeholder="{{  __('search.placeholder') }}" class="flex-1 focus:outline-none text-sm md:text-base">

    <x-button call-to-action size="small" rounded src="https://placehold.co/16"></x-button>
</div>

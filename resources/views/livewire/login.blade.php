<div x-data="{ isOpen: @entangle('isOpen') }">

    <div
        x-show="isOpen"
        @click.self="isOpen = false"
        wire:cloak
        x-transition.opacity.duration.300ms
        class="fixed inset-0 z-40 bg-black/50"
    ></div>

    <div class="fixed inset-0 z-50 flex items-center justify-center pointer-events-none">
        <div
            class="bg-white space-y-4 max-w-md w-full text-start rounded-xl shadow-lg p-6 text-center pointer-events-auto"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-y-[200%] opacity-0"
            x-transition:enter-end="translate-y-0 opacity-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="translate-y-0 "
            x-transition:leave-end="translate-y-[200%]"
            x-show="isOpen"
            wire:cloak
        >
            <img
                src="https://placehold.co/64"
                alt="company logo"
                class="mx-auto"
            />
            <div>
                <h2 class="text-xl font-bold mb-1">{{ __('login.header') }}</h2>
                <p>{{ __('login.prompt-phone-number') }}</p>
            </div>

            <form wire:submit="login"
                  class="space-y-4"
            >

                <input
                    type="number"
                    placeholder="{{ __('login.placeholder') }}"
                    class="w-full rounded-md border border-gray-300 bg-gray-100 px-3 py-2 focus:outline-gray-300"
                    dir="ltr"
                />

                <x-button class="w-full" call-to-action :value="__('login.submit')"/>
            </form>
        </div>
    </div>
</div>




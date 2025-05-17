<div>
    <header class="h-15 shadow-xs bg-white">
        <div class="mx-auto relative flex justify-between max-w-screen-xl w-full h-full px-4 items-center">
            <x-logo/>

            <livewire:search/>

            <div class="flex gap-4">

                <x-button src="https://placehold.co/24" class="hidden md:flex"/>
                <x-button src="https://placehold.co/24" class="hidden md:flex"/>

                <x-button
                    src="https://placehold.co/24"
                    call-to-action
                    wire:click="dispatch('open-modal')"
                    :value="__('login.button')"
                />
            </div>
        </div>
    </header>

    <livewire:login/>
</div>

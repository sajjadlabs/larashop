<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Login extends Component
{
    public $isOpen = false;

    #[On('open-modal')]
    public function openModal(): void
    {
        $this->isOpen = true;
    }

    public function mount(): void
    {
        if (Route::currentRouteName() === 'login') {
            $this->isOpen = true;
        }
    }


    public function render(): View
    {
        return view('livewire.login');
    }
}

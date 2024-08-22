<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Message extends Component
{
    public $message;

    public function render()
    {
        return <<<'LIVE'

        <div id="counter">
            <input type="text" wire:model.debounce.lazy="message">

            {{ $message }}
        </div>


        LIVE;
    }
}

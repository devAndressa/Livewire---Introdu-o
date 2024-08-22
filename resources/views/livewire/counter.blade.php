<div id="counter">

    <input type="text" wire:model="counter">

    {{ $counter }}

    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>


</div>

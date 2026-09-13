<?php

use Livewire\Component;

new class extends Component
{
    //
    public $count = 0;
    public function increament(): void
    {
        $this->count++;
    }

};
?>

<div>
    {{ $count }}
    <button wire:click="increament">+</button>
    {{-- When there is no desire, all things are at peace. - Laozi --}}
</div>

<?php

use Livewire\Component;

new class extends Component
{
    //
    public array $cart = [];
    public $selectName;
    public function save()
    {
//
        if ($this->selectName == null)
        {
            return;
        }
        else{
        $this->cart[] = $this->selectName;
        }
    }
    public function remove($index){
        unset($this->cart[$index]);
    }
};
?>

<div>

    <input type="text" wire:model.live="selectName" placeholder="กรอกข้อมูล..." />
    <button type="button" wire:click="save">บันทึก</button>
    @if($this->cart)
        <div>
        @foreach($this->cart as $item)
          {{ $loop->iteration }}  {{ $item }}
                <button wire:click="remove({{$loop->index}})">
                ลบ
                </button>
            <br />
        @endforeach
        </div>
    @endif
    {{-- Do what you can, with what you have, where you are. - Theodore Roosevelt --}}
</div>

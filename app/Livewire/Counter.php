<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter')]
class Counter extends Component
{
    public function render()
    {
        return view('livewire.counter');
    }
}

<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]
class Todo extends Component
{
    public function render()
    {
        return view('livewire.todo');
    }
}

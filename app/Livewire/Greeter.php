<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Greeter extends Component
{
    public $name = 'John';

    public function changeName(string $newName): void
    {
        $this->name = $newName;
    }


    public function render() : View
    {
        return view('livewire.greeter');
    }
}

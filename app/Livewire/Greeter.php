<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{
    #[Validate('required|min:2')]  // ... must be a single string, not an array, or multiple attributes; gives error but also executes changeGreeting(), so if you want to avoid that, use the validate() method in the method, extra

    public $name = '';
    public $greeting = '';
    public $greetingMessage = '';

    public function changeGreeting(): void
    {
        $this->reset('greetingMessage');

        //$this->validate(['name' => ['required', 'min:2']]);
        //$this->validate();  // ... if a function rules() is defined, this is enough

        $this->greetingMessage = "{$this->greeting},  {$this->name}!";
    }


//    public function rules() : array
//    {
//        return [
//            'name' => ['required', 'min:2'],
//        ];
//    }


    public function render() : View
    {
        return view('livewire.greeter');
    }
}

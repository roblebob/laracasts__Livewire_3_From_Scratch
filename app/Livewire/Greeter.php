<?php

namespace App\Livewire;

use App\Models\Greeting;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{
    #[Validate('required|min:2')]

    public $name = '';
    public $greeting = '';
    public $greetings = [];
    public $greetingMessage = '';

    public function changeGreeting(): void
    {
        $this->reset('greetingMessage');

        $this->validate();

        $this->greetingMessage = "$this->greeting,  $this->name!";
    }


//    public function rules() : array
//    {
//        return [
//            'name' => ['required', 'min:2'],
//        ];
//    }

    public function mount(): void
    {
        $this->greetings = Greeting::all();
    }

//    public function updated($property_key, $property_value): void
//    {
//        if ($property_key === 'name') {
//            $this->name = strtolower($property_value);
//        }
//    }
    public function updatedName($value): void
    {
        $this->name = strtolower($value);
    }






    public function render() : View
    {
        return view('livewire.greeter');
    }
}

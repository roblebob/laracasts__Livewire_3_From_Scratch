<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required')]
    public $searchText = '';
    public $results = [];


    public function updatedSearchText($value): void
    {
        $this->reset('results');
        $this->validate();

        $searchTerm = "%{$value}%";

        $this->results = Article::where('title', 'like', $searchTerm)
            ->get();
    }

    public function clear(): void
    {
        $this->reset('searchText', 'results');
    }


    public function render() : View
    {
        return view('livewire.search');
    }
}

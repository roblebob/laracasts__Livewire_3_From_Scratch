<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{

    //#[Url(as: 'q', history: true, except: '')]
    public $searchText = '';

    public $placeholder;


    #[On('search:clear-results')]
    public function clear(): void
    {
        $this->reset('searchText');
    }

    // the same as the above #[Url] attribute, but using the method, and thereby allowing for more complex logic
    protected function queryString(): array
    {
        return [
            'searchText' => [
                'as' => 'q',
                'history' => true,
                'except' => '',
            ],
        ];
    }

    public function render() : View
    {
        return view('livewire.search', [
                'results' => Article::where('title', 'LIKE', "%{$this->searchText}%")->get()
            ]
        );
    }
}

<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Component;

#[Lazy]
class PublishedCount extends Component
{
    public $placeholderText = '';

    #[Computed(cache: true, key: 'published-count')]
    public function count()
    {
        sleep(1);

        return Article::where('published', 1)->count();
    }

    // added, because it will not work otherwise
    #[On('published-count:reset-count')]
    public function resetCount()
    {
        $this->count = Article::where('published', 1)->count();
    }


    public function placeholder()
    {
        return view('livewire.placeholder', ['message' => $this->placeholderText]);
    }


    public function render()
    {
        return view('livewire.published-count');
    }
}

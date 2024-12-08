<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Session;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use withPagination;

    #[Session(key: 'show-only-published')]
    public $showOnlyPublished = false;

    #[Computed/*(persist: true)*/]
    public function articles() {
        $query = Article::query();

        if ($this->showOnlyPublished) {
            $query->where('published', 1);
        }

        return $query->paginate(15, pageName: 'articles-paginator');
    }


    public function delete(Article $article): void
    {
        if ($this->articles->count() < 15 ) {
            throw new \Exception('You cannot delete the last article');
        }
        $article->delete();

        unset($this->articles);
        cache()->forget('published-count');
        $this->dispatch('published-count:reset-count'); // added, because it will not work otherwise
    }

    public function togglePublished($showOnlyPublished): void
    {
        $this->showOnlyPublished = $showOnlyPublished;
        $this->resetPage(pageName: 'articles-paginator');
    }



}

<?php

namespace App\Livewire\Forms;

use App\Models\Article;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleForm extends Form
{
    public ?Article $article;

    #[Locked]
    public int $id;

    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $content;
    public $published = false;
    public $allowNotifications = false;
    public $notifications = [];
    public $photo_paths = [];

    #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];


    public function setArticle(Article $article)
    {
        $this->id = $article->id;
        $this->article = $article;
        $this->title = $article->title;
        $this->content = $article->content;
        $this->published = $article->published;
        $this->notifications = $article->notifications ?? [];
        $this->allowNotifications = count($this->notifications) > 0;
        $this->photo_paths = $article->photo_paths ?? [];
    }

    public function store()
    {
        $this->validate();

        if (!$this->allowNotifications) {
            $this->notifications = [];
        }

        foreach ($this->photos as $photo) {
            $this->photo_paths[] = $photo->storePublicly('article_photos', ['disk' => 'public']);;
        }


        Article::create($this->only(['title', 'content', 'published', 'notifications', 'photo_paths']));

        cache()->forget('published-count');
    }

    public function update()
    {
        $this->validate();

        if (!$this->allowNotifications) {
            $this->notifications = [];
        }

        foreach ($this->photos as $photo) {
            $this->photo_paths[] = $photo->storePublicly('article_photos', ['disk' => 'public']);;
        }

        $this->article->update($this->only(['title', 'content',  'published', 'notifications', 'photo_paths']));
        cache()->forget('published-count');
    }
}

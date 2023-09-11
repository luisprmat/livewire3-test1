<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public string $title = '';

    public string $body = '';

    public function render()
    {
        return view('livewire.create-post');
    }

    public function save(): void
    {
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
    }
}

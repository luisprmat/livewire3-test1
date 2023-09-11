<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule(['required', 'min:5'])]
    public string $title = '';

    #[Rule(['required', 'min:5'])]
    public string $body = '';

    public function render()
    {
        return view('livewire.create-post');
    }

    public function save(): void
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
    }
}

<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'min:5'], as: 'title')]
    public string $title = '';

    #[Rule(['required', 'min:5'], as: 'body')]
    public string $body = '';

    public function save(): void
    {
        Post::create($this->all());

        $this->reset('title', 'body');
    }
}

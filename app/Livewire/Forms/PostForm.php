<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function store(): void
    {
        $user = \App\Models\User::find(1);

        $user->posts()->create(
                $this->validate()
        );

        $this->reset();
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}

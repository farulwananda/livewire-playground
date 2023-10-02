<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    public PostForm $form;
    public function save(): void
    {
        $this->form->store();
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}

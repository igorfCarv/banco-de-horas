<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use Illuminate\View\View;
use Livewire\Component;
use App\Models\User;

class Create extends Component
{
    public UserForm $form;

    public function render(): View
    {
        return view('livewire.user.create')->layout('layouts.app');
    }

    public function store(): void
    {
        $this->validate();

        User::query()->create([
            'username' => $this->username,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $this->redirect(route('users.index'));

    }
}

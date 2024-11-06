<?php

namespace App\Livewire\Team;

use Livewire\Component;

class TeamComponent extends Component
{
    public function render()
    {
        return view('livewire.team.team-component')->layout('layouts.app');
    }
}

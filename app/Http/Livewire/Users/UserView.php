<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserView extends Component
{
    public User $user;
    public $viewAddress = false;

    public function showHideAddress()
    {
        $this->viewAddress = !$this->viewAddress;
    }

    public function render()
    {
        return view('livewire.users.user-view');
    }
}

<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserList extends Component
{
    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.users.user-list', compact('users'));
    }

    public function deleteUser(User $user)
    {
        $user->delete();
    }

}

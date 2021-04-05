<?php

namespace App\Http\Livewire\Users;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

class UserCreate extends Component
{
    public $user = [];

    protected $rules = [
        "user.name"              =>  "required",
        "user.email"             =>  "required|email",
        "user.password"          =>  "required|min:8",
        "user.password_confirm"  =>  "same:user.password|min:8"
    ];

    public function render()
    {
        return view('livewire.users.user-create');
    }

    public function createUser()
    {
        $this->validate();

        if($this->user['password'] == $this->user['password_confirm']){
            unset($this->user['password_confirm']);
            $this->user['password'] = Hash::make($this->user['password']);

            User::create($this->user);

            return redirect()->route('users.index');
        }

    }
}

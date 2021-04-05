<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserEdit extends Component
{
    public User $user;

    protected $rules = [
        "user.name"                     =>  "required",
        "user.email"                    =>  "required|email",
        "user.password_new"             =>  "min:8",
        "user.password_new_confirm"     =>  "same:user.password_new|min:8"
    ];

    public function updateUser()
    {
        $this->validate();

        if(!empty($this->user['password_new'])){

            if($this->user['password_new'] == $this->user['password_new_confirm']){

                $this->user['password'] = Hash::make($this->user['password_new']);

            }

        }

        // Retira indices de controle
        unset($this->user['password_new_confirm']);
        unset($this->user['password_new']);

        $this->user->save();

        return redirect()->route('users.index');

    }

    public function render()
    {
        return view('livewire.users.user-edit');
    }
}

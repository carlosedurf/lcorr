<?php

namespace App\Http\Livewire;

use App\Models\Address;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $usersAll;
    public $addressAll;
    public $myAddress;

    public function mount()
    {
        $this->usersAll     = User::all()->count();
        $this->addressAll   = Address::all()->count();
        $this->myAddress    = auth()->user()->addresses->count();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}

<?php

namespace App\Http\Livewire\Addresses;

use App\Models\Address;
use Livewire\Component;

class AddressView extends Component
{
    public Address $address;

    public function render()
    {
        return view('livewire.addresses.address-view');
    }
}

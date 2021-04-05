<?php

namespace App\Http\Livewire\Addresses;

use App\Models\Address;
use Livewire\Component;

class AddressList extends Component
{
    public function deleteAddress(Address $address)
    {
        $address->delete();
    }

    public function render()
    {
        $addresses = auth()->user()->addresses;
        return view('livewire.addresses.address-list', compact('addresses'));
    }
}

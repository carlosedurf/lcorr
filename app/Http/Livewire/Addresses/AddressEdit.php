<?php

namespace App\Http\Livewire\Addresses;

use App\Models\Address;
use App\Traits\ViaCep;
use Livewire\Component;

class AddressEdit extends Component
{
    use ViaCep;

    public Address $address;

    protected $rules = [
        "address.cep"           => "required|min:9",
        "address.address"       => "required",
        "address.district"      => "required",
        "address.address"       => "required",
        "address.city"          => "required",
        "address.number"        =>  "",
        "address.complements"   =>  "",
        "address.uf"            => "required|min:2|max:2",
    ];

    public function getCep()
    {
        $data = $this->getInfoByCEP($this->address['cep']);

        if(isset($data->erro) && $data->erro == true)
            return;

        $this->address['address']       = $data->logradouro;
        $this->address['complements']   = $data->complemento;
        $this->address['district']      = $data->bairro;
        $this->address['city']          = $data->localidade;
        $this->address['uf']            = $data->uf;
    }

    public function updateAddress()
    {
        $this->validate();

        $this->address->save();

        return redirect()->route('addresses.index');
    }

    public function render()
    {
        return view('livewire.addresses.address-edit');
    }
}

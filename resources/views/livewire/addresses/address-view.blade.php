<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>
<div class="grid min-h-screen place-items-center">
    <!-- About Section -->
    <div class="bg-white p-3 shadow-sm rounded-sm">

        <div class="grid md:grid-cols-2 text-sm">
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-bold">CEP:</div>
                <div class="px-4 py-2">{{ $address['cep'] }}</div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-bold">Logradouro:</div>
                <div class="px-4 py-2">{{ $address['address'] }}</div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-bold">Bairro:</div>
                <div class="px-4 py-2">{{ $address['district'] }}</div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-bold">Complemento:</div>
                <div class="px-4 py-2">{{ $address['complements'] }}</div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-bold">Nº:</div>
                <div class="px-4 py-2">{{ $address['number'] }}</div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-bold">Estado:</div>
                <div class="px-4 py-2">{{ $address['uf'] }}</div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-bold">Cidade:</div>
                <div class="px-4 py-2">{{ $address['city'] }}</div>
            </div>
            <div class="grid grid-cols-2"></div>
        </div>

    </div>
    <!-- End of about section -->
    </div>

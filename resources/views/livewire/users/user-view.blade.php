<div class="grid min-h-screen place-items-center">
<!-- About Section -->
<div class="bg-white p-3 shadow-sm rounded-sm">
    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">Informação de Usuário<span class="tracking-wide"></span></div>
    <hr>
    <div class="text-gray-700">
        <div class="grid md:grid-cols-2 text-sm">
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-bold">Nome:</div>
                <div class="px-4 py-2">{{ $user['name'] }}</div>
            </div>
            <div class="grid grid-cols-2"></div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-bold">Email:</div>
                <div class="px-4 py-2">
                    <a class="text-blue-800" href="mailto:{{ $user['email'] }}">{{ $user['email'] }}</a>
                </div>
            </div>
            <div class="grid grid-cols-2"></div>
        </div>
    </div>

    @if (count($user->addresses))

        <hr>
        <button
            class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4"
            wire:click="showHideAddress">
            Exibir Endereços
        </button>

            <hr>

            @if ($viewAddress)

                @foreach ($user->addresses as $address)

                    <div class="grid md:grid-cols-2 text-sm p-4">

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

                    <hr>

                @endforeach

            @endif



    @endif



</div>
<!-- End of about section -->
</div>

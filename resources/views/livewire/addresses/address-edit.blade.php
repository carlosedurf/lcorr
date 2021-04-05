<div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center font-sans overflow-hidden leading-loose">
    <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" wire:submit.prevent="updateAddress">
      <p class="text-gray-800 font-medium">Novo Endereço</p>

      <div class="">
        <label class="block text-sm text-gray-00" for="cep">CEP</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cep" name="cep" type="text" required="" data-mask="00000-000" placeholder="Insira seu CEP" aria-label="CEP" wire:change.prevent="getCep" wire:model="address.cep">
      </div>

      <div class="inline-block mt-2 w-1/2 pr-1">
        <label class="block text-sm text-gray-600" for="number">Número</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="number"  name="number" type="text" required="" placeholder="Insira o número" aria-label="Número" wire:model="address.number">
      </div>

      <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
        <label class="block text-sm text-gray-600" for="uf">Estado</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="uf" name="uf" type="text" required="" placeholder="Insira a sigla de seu estado" aria-label="Estado" wire:model="address.uf">
      </div>

      <div class="mt-2">
        <label class="block text-sm text-gray-600" for="address">Logradouro</label>
        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="address" name="address" type="text" required="" placeholder="Insira seu logradouro" aria-label="Logradouro" wire:model="address.address">
      </div>

      <div class="mt-2">
        <label class="block text-sm text-gray-600" for="address">Complemento</label>
        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="complements" name="complements" type="text" required="" placeholder="Insira o complemento" aria-label="Complemento" wire:model="address.complements">
      </div>

      <div class="mt-2">
        <label class=" block text-sm text-gray-600" for="district">Bairro</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="district" name="district" type="text" required="" placeholder="Insira seu bairro" aria-label="Bairro" wire:model="address.district">
      </div>

      <div class="mt-2">
        <label class="text-sm block text-gray-600" for="city">Cidade</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="city" name="city" type="text" required="" placeholder="Insira sua cidade" aria-label="Cidade" wire:model="address.city">
      </div>

      <div class="mt-4">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded block w-full" type="submit">Cadastrar</button>
      </div>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

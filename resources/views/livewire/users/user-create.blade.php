<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
      <h1 class="text-xl font-semibold">Olá 👋, <span class="font-normal">cadastre as informações de novo usuario</span></h1>
      <form class="mt-6" wire:submit.prevent="createUser">

        <div class="mb-5">
            <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Nome</label>
            <input id="name" type="text" name="name" placeholder="nome do usuário" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('user.name') border-red-700 @enderror" required wire:model="user.name" />
            @error('user.name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-5">
            <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
            <input id="email" type="email" name="email" placeholder="insira o email" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('user.email') border-red-700 @enderror" required wire:model="user.email" />
            @error('user.email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-5">
            <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Senha</label>
            <input id="password" type="password" name="password" placeholder="Insira sua senha" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('user.password') border-red-700 @enderror" required wire:model="user.password" />
            @error('user.password') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="mb-5">
            <label for="password_confirm" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Confirme sua senha</label>
            <input id="password_confirm" type="password" name="password_confirm" placeholder="confirmação de senha" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('user.password_confirm') border-red-700 @enderror" required wire:model="user.password_confirm" />
            @error('user.password_confirm') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
          Cadastrar
        </button>
      </form>
    </div>
  </div>

# App CRUD

<p align='justify'>Crud simples controlando usuario e endereços, O usuário pode se registrar individualmente, ou um usuário logado pode cadastrá-lo. O usuário logado no sistema pode cadastrar os endereços dele(pode ser vários).</p>
<p align='justify'>Sistema feito com componetização simulizar ao vue, sendo feito via livewire com blade, eventos, binds e etc</p>

<hr/>

### O que é Livewire
<br/>
<p align='justify'>O Livewire é uma biblioteca que foi adicionada em 2019 pelo famosíssimo framework Laravel.</p>

<p align='justify'>A proposta dela é criar interfaces dinâmicas (similares ao Vue) com os códigos do blade e do próprio Laravel. Sim! Exatamente! Você, programador Back-end, poderá criar um front-end bem desenvolvido com o Livewire!</p>

<p align='justify'>Indo direto ao ponto, o Livewire funciona de um jeito beeem peculiar. Qualquer interação que acontecer com ele, se faz uma requisição AJAX e o HTML é renderizado do lado do servidor e depois retornado ao cliente. Esse fluxo permite que ele seja reativo, porém, um pouco mais lento. Ele tem algo parecido com um DOM virtual, onde ele compara as alterações com o DOM renderizado e então aplica as modificações.</p>

<small>[fonte: O que é Livewire](https://fireworkweb.com.br/livewire/#:~:text=O%20Livewire%20%C3%A9%20uma%20biblioteca,blade%20e%20do%20pr%C3%B3prio%20Laravel)</small>

<hr/>

### Tecnologias utilizadas:

- **PHP 8.0**
- **Laravel 8**
- **MySQL**
- **Livewire**
- **JetStream**
- **Tailwind CSS**

<hr/>

### Instalação para utilização

- Apache2
- PHP 7.3^|8.0^
- MySQL 5.7|8.0 ou MariaDB
- Composer (Recomendo versão 2)
- Node 14 / NPM 7 (LTS)
- Copie .env-example para .env (Configure seu Banco)
- execute (npm install && npm run dev)
- php artisan migrate(para subir as migrações para seu banco)

<hr/>

## Dashboard
![](/public/images_md/dashboard.png)
<p align='center'>Tela de Dashboard com informações de usuário cadastrados, endereços cadastrado e endereços cadastrados do usuário</p>

<hr/>

## Usuários
![](/public/images_md/users.png)
<p align='center'>Lista de usuário com informações de usuários que existe cadastrado endereços e ações</p>

<hr/>

## Endereços
![](/public/images_md/addresses.png)
<p align='center'>Lista de endereços do usuário vinculado ao usuário autênticado ações</p>

## Infomação de usuário
![](/public/images_md/info_user.png)
<p align='center'>Visualização de informação do usuário com lista de endereços caso queira visualizar</p>

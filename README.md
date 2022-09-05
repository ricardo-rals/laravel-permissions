# Aplicação de controle de permissões de usuário em Laravel
- Foi utilizado o Laravel Breeze e o pacote Spatie.

## Primeiros passos:
1. Clone o repositório:
- `git clone https://github.com/ricardo-rals/laravel-permissions.git`
2. Acesse o projeto
- `cd laravel-permissions`
3. Instale as dependências e o framework
- `compoer install`
4. Copie o arquivo .env.example
- `cp .env.exampe .env`
5. Crie uma nova chave da aplicação
- `php artisan key:generate`
6. Configure o arquivo .env e rode as migrations
- `php artisan migrate --seed`
7. Finalize instalando o NPM
- `npm install`

## Como acessar a aplicação:
1. Faça o login com o usuário administrador
 ```
 Usuário: admin@admin.com
 Senha: 123456
 ```
2. Acesse a pagina de Admin localizada no topo conforme a imagem abaixo:
    ![image](https://user-images.githubusercontent.com/64266184/188500238-b5fa6d49-04ae-430d-891b-05f3d41df288.png)
3. Acesse a pagina de Usuários para criar um novo
    ![image](https://user-images.githubusercontent.com/64266184/188500434-616d8191-71c6-4cec-b93d-47e674b73b12.png)
4. Após isso, vá em Editar para dar permissões ou funções ao usuário 
    ![image](https://user-images.githubusercontent.com/64266184/188500617-fbac4764-810a-4c07-81cb-c0128f857125.png)
5. Após isso, deslogue e entre com o novo usuário para verificar que as permissões foram atribuidas com sucesso
    ![image](https://user-images.githubusercontent.com/64266184/188500715-d791edc0-77cb-4001-9270-c94e43f7eaf2.png)

## Bonus:
- Você também consegue criar novas funções e permissões. Lembrando de alterar no código sempre que criar uma permissão ou função nova
![image](https://user-images.githubusercontent.com/64266184/188500784-f619a886-79ab-46e2-a035-1e974b264165.png)
![image](https://user-images.githubusercontent.com/64266184/188500799-e03c93aa-11c8-4316-9164-8363aec36c12.png)

 

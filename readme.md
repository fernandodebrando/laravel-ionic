
## Teste Laravel + Ionic

Este projeto tem uma Api desenvolvida com framework Laravel, para buscar treinamentos de uma academia.
Uma demonstração está disponível em: http://laravel-ionic.fernando.poa.br/api/training 

Também possui um App desenvolvido com Ionic que está integrado com a Api, disponível em `./ionic/trainingApp`.

### Para testar localmente a Api, basta seguir os seguintes passos:

1- clonar este repositório
`git clone https://github.com/fernandodebrando/laravel-ionic.git`

2- Executar o composer
`composer install`

3- Executar as migration
`php artisan migrate`

4- Executar as seeders
`php artisan db:seed`

5- Execute o servidor:
`php artisan serve`


### Para testar o App localmente, basta seguir os seguintes passos:

1- Altera a URL da Api em `./ionic/trainingApp/src/pages/home/home.ts`

2- Execute `ionic serve`


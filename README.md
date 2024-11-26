
## Project setup

link proyecto frontend con vue 2 y vuetify 2:

<p align="center"><a href="https://github.com/kevinm9/VUE-TOKENS-LOGIN-REGISTER-VUEX-ROUTER" target="_blank"><img src="https://miro.medium.com/v2/resize:fit:1200/1*dA0K8ZQ4yQn1Ld4JQBG4ug.png" width="400" alt="Laravel Logo"></a></p>

clonar repositorio y ejecutar:
```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

rutas:

```
  GET|HEAD        / ..................................................................................................................................................
  POST            _ignition/execute-solution ........................................... ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController
  GET|HEAD        _ignition/health-check ....................................................... ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
  POST            _ignition/update-config .................................................... ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController
  GET|HEAD        api/categorias ........................................................................................ categorias.index › CategoriaController@index
  POST            api/categorias ........................................................................................ categorias.store › CategoriaController@store
  GET|HEAD        api/categorias/{categoria} .............................................................................. categorias.show › CategoriaController@show
  PUT|PATCH       api/categorias/{categoria} .......................................................................... categorias.update › CategoriaController@update
  DELETE          api/categorias/{categoria} ........................................................................ categorias.destroy › CategoriaController@destroy
  GET|HEAD        api/facturas .............................................................................................. facturas.index › FacturaController@index
  POST            api/facturas .............................................................................................. facturas.store › FacturaController@store
  GET|HEAD        api/facturas/{factura} ...................................................................................... facturas.show › FacturaController@show
  PUT|PATCH       api/facturas/{factura} .................................................................................. facturas.update › FacturaController@update
  DELETE          api/facturas/{factura} ................................................................................ facturas.destroy › FacturaController@destroy
  GET|HEAD        api/formasdepagos ............................................................................... formasdepagos.index › FormasdePagoController@index
  POST            api/formasdepagos ............................................................................... formasdepagos.store › FormasdePagoController@store
  GET|HEAD        api/formasdepagos/{formasdepago} .................................................................. formasdepagos.show › FormasdePagoController@show
  PUT|PATCH       api/formasdepagos/{formasdepago} .............................................................. formasdepagos.update › FormasdePagoController@update
  DELETE          api/formasdepagos/{formasdepago} ............................................................ formasdepagos.destroy › FormasdePagoController@destroy
  POST            api/login ..................................................................................................................... AuthController@login
  GET|HEAD        api/logout ................................................................................................................... AuthController@logout
  GET|HEAD        api/mi .......................................................................................................................... miController@index
  GET|HEAD        api/productos ........................................................................................... productos.index › ProductoController@index
  POST            api/productos ........................................................................................... productos.store › ProductoController@store
  GET|HEAD        api/productos/{producto} .................................................................................. productos.show › ProductoController@show
  PUT|PATCH       api/productos/{producto} .............................................................................. productos.update › ProductoController@update
  DELETE          api/productos/{producto} ............................................................................ productos.destroy › ProductoController@destroy
  POST            api/registro ............................................................................................................... AuthController@register
  GET|HEAD        api/user ...........................................................................................................................................
  GET|HEAD        sanctum/csrf-cookie .............................................................. sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show
```


## documento de word

https://github.com/kevinm9/PLANTILLA-LARAVEL-API-YT/blob/ejemplo2api/LARAVEL.docx

codigo de ejemplo para codificar. 

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## docker

usando docker:
```
docker compose up -d --build
docker compose exec php bash
composer setup
```

otros comandos:
```
docker compose down
docker compose up -d

docker stop $(docker ps -aq)  # Detener todos los contenedores
docker rm $(docker ps -aq)    # Eliminar todos los contenedores
docker rmi $(docker images -aq)  # Eliminar todas las imágenes (opcional)
docker volume rm $(docker volume ls -q)  # Eliminar volúmenes (opcional)
docker network rm $(docker network ls -q)  # Eliminar redes (opcional)
docker system prune -a --volumes  # Limpiar todo lo no utilizado
docker compose up -d --build  # Levantar contenedores desde cero
```
otras configuracion 
phpmyadmin:
volumes:
    - .docker/phpmyadmin/sessions:/sessions
```
sudo chmod -R 777 .docker/phpmyadmin/sessions
```
esto le dara permiso para crear la sesion y poder ver phpmyadmin
```
Servidor:bd
Usuario:root
Contraseña:root
```



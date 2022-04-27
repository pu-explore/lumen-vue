## Installation Package

```shell
composer require pu-explore/lumen-vue --dev
```

## In `bootstrap/app.php` Add Service

```shell
//$app->register(App\Providers\EventServiceProvider::class);
$app->register(\Lumen\Vue\LumenVueServiceProvider::class);
```

## Install

```shell
php artisan vue:install
```

## Install development dependencies

```shell
npm install
```

### Compiles and hot-reloads for development

```shell
npm run serve
```

### Compiles and minifies for watch

```shell
npm run watch
```

### Compiles and minifies for production

```shell
npm run build
```

## Verify

http://localhost:8080

http://your_domain_address

## License

Laravel Breeze is open-sourced software licensed under the [MIT license](LICENSE.md).

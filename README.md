## Installation Package

```shell
composer require explore-pu/lumen-vue --dev
```

## In `bootstrap/app.php` Add Service

```shell
//$app->register(App\Providers\EventServiceProvider::class);
$app->register(\Lumen\Vue\LumenVueServiceProvider::class);
```

## Install And Compile Resources

```shell
php artisan vue:install

npm install && npm run dev
```

## Verify

http://localhost

## License

Laravel Breeze is open-sourced software licensed under the [MIT license](LICENSE.md).

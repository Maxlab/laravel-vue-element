## The Vue2 with ElemeFE/element for Laravel 5.4

- Starter kit Vue2 in conjunction with ElemeFE/element for Laravel 5.4
 
## Installation

```sh
$ composer require maxlab/laravel-vue-element
```

Then add to config/app.php
```php
Maxlab\VueElement\Provider\VueElementServiceProvider::class
```

Then
```sh
$ php artisan vendor:publish --force --provider="Maxlab\VueElement\Provider\VueElementServiceProvider"
$ npm install && npm run dev
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

# l5-tabler

![Tabler preview](https://tabler.github.io/assets/images/dashboard.png)

Tabler admin template for Laravel 5

## Installation

Run composer for installing package
```bash
composer require "pingecom/l5-tabler":"dev-master"
```
Or add package name to require section
```yaml
...
require: {
    ...
    "pingecom/l5-tabler":"dev-master"
    ...
}
...
```

If Laravel < 5.5, Add providers to list of providers in config/app.php

```php
...
"providers" => [
    ...
    '\Pingecom\Tabler\Providers\TablerServiceProvider',
    ...
]
...
```

Setup middleware for menu by create new middleware named: **DefineMenu**

You can read more at: https://github.com/lavary/laravel-menu
```php
<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Facade as Menu;

class DefineMenus
{
    public function handle($request, Closure $next)
    {
        Menu::make('primary', function ($menu) {
            $menu->add('Home');
            $menu->add('About', 'about');
            $menu->add('Services', 'services');
            $menu->add('Contact', 'contact');
        });

        return $next($request);
    }
}
```

Add middleware to middleware list
```php
protected $middlewareGroups = [
    'web' => [
        ...,
        \App\Http\Middleware\DefineMenus::class,
    ],
    ...
]
```

Publish all assets, views and others to continue.

```php
php artisan vendor:publish --provider="Pingecom\Tabler\Providers\TablerServiceProvider" 
```

## Usage

Creating authentication pages

```php
php artisan make:tabler 
```

In your view, you can extends from layout
```blade
@extends('tabler::layouts.main')
@push('scripts')
@endpush
@push('styles')
@endpush
@section('content')
@stop
```

## Customization

Open tabler.php in config/tabler.php, you can customize some URL, logo, suffix

```php
return [
    'suffix' => '',
    'logo' => '',
    'urls' => [
        'logout' => '',
        'profile' => '',
        'setting' => '',
        'search' => '',
        'homepage' => '',
        'login' => '',
        'post-login' => '',
        'forgot' => '',
        'register' => '',
        'post-register' => '',
        'post-email' => '',
        'post-reset' => ''
    ],
    'footer' => '',
    'support' => [
        'search' => false,
        'footer-menu' => false,
    ]
];
```
Customize views, open resources/views/vendor/tabler to customization
Customize assets, open public/admin/assets

## Documentation

For full documentation, visit [tabler.github.io/tabler/docs](https://tabler.github.io/tabler/docs/index.html).

## LICENSE

This project is licensed under the [MIT License](LICENSE).

## Issues

If you have any issue, please [create new issue](https://github.com/roanvanbao/l5-tabler/issues/new)

## Contributors

## TODOS
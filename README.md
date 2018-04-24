# l5-tabler
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
	"pingecom/l5-tabler":"dev"
	...
}
...
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
        'searchUrl' => '',
        'homepage' => '',
        'login' => '',
        'forgot' => '',
        'register' => '',
        'post-register' => '',
        'login-url' => '',
        'email-url' => '',
        'reset-url' => ''
    ],
    'footer' => '',
    'support' => [
        'search' => false,
        'footerMenu' => false,
    ]
];
```
Customize views, open resources/views/vendor/tabler to customization
Customize assets, open public/admin/assets

## TODOS

## Contributors
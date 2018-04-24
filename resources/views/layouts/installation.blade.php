<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title . ' | ' . config('tabler.suffix') : config('tabler.suffix') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link href="{{ asset('admin/assets/css/dashboard.css') }}" rel="stylesheet"/>
    @stack('styles')
    <script src="{{ asset('admin/assets/js/require.min.js') }}"></script>
    <script>
        requirejs.config({
            baseUrl: './admin'
        });
    </script>
    <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
    @stack('scripts')
</head>
<body>
<div class="page">
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <div class="text-center mb-6">
                        <img src="{!! config('tabler.logo') !!}" class="h-6" alt="Logo">
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
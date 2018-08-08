@extends('tabler::layouts.auth')
@section('content')
    {!! Form::open(['url' => url(config('tabler.url.post-register', 'register')), 'method' => 'POST', 'class' => 'card']) !!}
    <div class="card-body p-6">
        <div class="card-title">@lang('tabler::register.title')</div>
        <div class="form-group">
            {!! Form::label('name', trans('tabler::register.name'), ['class' => 'form-label']) !!}
            {!! Form::text('name', old('name'), ['placeholder' => trans('tabler::register.name-placeholder'), 'class' => 'form-control', 'autofocus' => true]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', trans('tabler::register.email'), ['class' => 'form-label']) !!}
            {!! Form::email('email', old('email'), ['placeholder' => trans('tabler::register.email-placeholder'), 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', trans('tabler::register.password'), ['class' => 'form-label']) !!}
            {!! Form::password('password', ['placeholder' => trans('tabler::register.password-placeholder'), 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation', trans('tabler::register.password-confirmation'), ['class' => 'form-label']) !!}
            {!! Form::password('password_confirmation', ['placeholder' => trans('tabler::register.password-confirmation-placeholder'), 'class' => 'form-control']) !!}
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block">@lang('tabler::register.singup')</button>
        </div>
    </div>
    {!! Form::close() !!}
    <div class="text-center text-muted">
        @lang('tabler::register.have-account') <a href="{!! url(config('tabler.url.login-url', 'login')) !!}">@lang('tabler::register.login')</a>
    </div>
@stop
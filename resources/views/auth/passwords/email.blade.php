@extends('tabler::layouts.auth')
@section('content')
    {!! Form::open(['url' => url(config('tabler.url.post-email', 'password/email')), 'method' => 'POST', 'class' => 'card']) !!}
    <div class="card-body p-6">
        <div class="card-title">@lang('tabler::email.title')</div>
        <div class="form-group">
            {!! Form::label('email', trans('tabler::email.email'), ['class' => 'form-label']) !!}
            {!! Form::email('email', old('email'), ['placeholder' => trans('tabler::email.email-placeholder'), 'class' => 'form-control']) !!}
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block">@lang('tabler::email.send')</button>
        </div>
    </div>
    {!! Form::close() !!}
    <div class="text-center text-muted">
        @lang('tabler::login.no-account') <a href="{!! url(config('tabler.url.register', 'register')) !!}">@lang('tabler::login.register')</a>
    </div>
@stop
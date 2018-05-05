@extends('tabler::layouts.auth')
@section('content')
    {!! Form::open(['url' => url(config('tabler.url.post-reset', 'password/reset')), 'method' => 'POST', 'class' => 'card']) !!}
    <div class="card-body p-6">
        <div class="card-title">@lang('tabler::reset.title')</div>
        <div class="form-group">
            {!! Form::label('email', trans('tabler::reset.email'), ['class' => 'form-label']) !!}
            {!! Form::email('email', old('email'), ['placeholder' => trans('tabler::reset.email-placeholder'), 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', trans('tabler::reset.password'), ['class' => 'form-label']) !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => trans('tabler::reset.password-placeholder')]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation', trans('tabler::reset.password-confirmation'), ['class' => 'form-label']) !!}
            {!! Form::password('password_confirmation', ['placeholder' => trans('tabler::reset.password-confirmation-placeholder'), 'class' => 'form-control']) !!}
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block">@lang('tabler::reset.send')</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
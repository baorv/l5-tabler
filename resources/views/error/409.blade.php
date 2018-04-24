@extends('tabler::layouts.error')
<div class="container text-center">
    <div class="display-1 text-muted mb-5">
        <i class="si si-exclamation"></i> 409
    </div>
    <h1 class="h2 mb-3">
        @lang('tabler::error.409-title')
    </h1>
    <p class="h4 text-muted font-weight-normal mb-7">
        @lang('tabler::error.409-message')
    </p>
    <a class="btn btn-primary" href="{!! config('tabler.urls.homepage') !!}">
        <i class="fe fe-arrow-left mr-2"></i> @lang('tabler::error.goback')
    </a>
</div>
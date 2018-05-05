<div class="dropdown">
    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
        <span class="avatar"></span>
        <span class="ml-2 d-none d-lg-block">
            <span class="text-default">{{ $user->username }}</span>
            <small class="text-muted d-block mt-1">@lang('tabler::user.user')</small>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="{!! url(config('tabler.urls.profile')) !!}">
            <i class="dropdown-icon fe fe-user"></i> @lang('tabler::user.profile')
        </a>
        <a class="dropdown-item" href="{!! url(config('tabler.urls.settings')) !!}">
            <i class="dropdown-icon fe fe-settings"></i> @lang('tabler::user.settings')
        </a>
        <a class="dropdown-item" href="javascript:void(0)" id="logout-button">
            <i class="dropdown-icon fe fe-log-out"></i> @lang('tabler::user.logout')
        </a>
    </div>
</div>
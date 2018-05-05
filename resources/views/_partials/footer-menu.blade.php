@foreach(Menu::get('primary')->roots() as $item)
    <div class="col-6 col-md-3">
        <ul class="list-unstyled mb-0">
            <li><a href="{!! $item->url() !!}">{!! $item->title !!}</a></li>
        </ul>
    </div>
@endforeach
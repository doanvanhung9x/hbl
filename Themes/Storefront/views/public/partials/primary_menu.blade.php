@foreach($primaryMenu->menus() as $primaryMenu)
    @include('public.partials.mega_menu.menu', ['menu' => $primaryMenu, 'type' => $type])
@endforeach

<li><a @if ($menu->isFluid()) data-toggle="collapse" href="#collapseExample156{{ $menu->id }}" role="button" aria-expanded="false" aria-controls="collapseExample" @else href="{{ $menu->url() }}" @endif >{{ $menu->name }} @if ($menu->isFluid())<i class="fas fa-caret-down"></i> @endif</a>
    @if ($menu->isFluid())
        <div class="collapse" id="collapseExample156{{ $menu->id }}">
            <div class="card card-body">
                <ul class="d-block dropdown-sidebar">
                    @foreach($menu->subMenus as $childrenMenu)
                        <li><a href="{{ $childrenMenu->url() }}">{{ $childrenMenu->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</li>

@if($type == 1)
    <li><a href="{{ $menu->url() }}">{{ $menu->name() }}</a>
        @if ($menu->hasSubMenus())
            <div class="dropdown">
                <ul >
                    @foreach($menu->subMenus() as $childrenMenu)
                        <li @if ($childrenMenu->hasItems()) class="sub" @endif><a href="{{ $childrenMenu->url() }}">{{ $childrenMenu->name() }}</a>
                            @if ($childrenMenu->hasItems())
                                <div class="dropdown">
                                    <ul class="submenu">
                                        @foreach($childrenMenu->items() as $childrenChildMenu)
                                            <li><a href="{{ $childrenChildMenu->url() }}">{{ $childrenChildMenu->name() }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </li>
@else
    <li><a @if ($menu->hasSubMenus()) data-toggle="collapse" href="#collapseExample156{{ $menu->id() }}" role="button" aria-expanded="false" aria-controls="collapseExample" @else href="{{ $menu->url() }}" @endif >{{ $menu->name() }} @if ($menu->hasSubMenus())<i class="fas fa-caret-down"></i> @endif</a>
        @if ($menu->subMenus())
            <div class="collapse" id="collapseExample156{{ $menu->id() }}">
                <div class="card card-body">
                    <ul class="d-block dropdown-sidebar">
                        @foreach($menu->subMenus() as $childrenMenu)
                            <li><a @if ($childrenMenu->hasItems()) data-toggle="collapse" href="#collapseExample1588{{ $childrenMenu->id() }}" role="button" aria-expanded="false" aria-controls="collapseExample" @else href="{{ $childrenMenu->url() }}" @endif>
                                    {{ $childrenMenu->name() }}
                                </a>
                                @if ($childrenMenu->hasItems())
                                <div class="collapse" id="collapseExample1588{{ $childrenMenu->id() }}">
                                    <div class="card card-body">
                                        <ul class="d-block dropdown-sidebar">
                                            @foreach($childrenMenu->items() as $childrenChildMenu)
                                                <li><a href="{{ $childrenChildMenu->url() }}">{{ $childrenChildMenu->name() }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </li>
@endif

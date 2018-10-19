<div class="row d-none d-lg-block">
    <nav class="navbar mega-nav">
        <ul>
            @foreach ($menu as $level0)
                @if (count($level0['children']))
                    <li class="droppable">
                        <a href="/{{ $level0['uri'] }}">{{ $level0['name'] }}</a>
                        <div class='mega-menu'>
                            <div class="container cf">
                                <div class="row">
                                    @foreach ($level0['children'] as $level1)
                                        <ul class="col-md-3">
                                            <h3><a href="/{{ $level0['uri'] }}/{{ $level1['uri'] }}">{{ $level1['name'] }}</a></h3>
                                            @if (count($level1['children'])) 
                                                @foreach ($level1['children'] as $level2)
                                                    <li><a href="/{{ $level0['uri'] }}/{{ $level1['uri'] }}/{{ $level2['uri'] }}">{{ $level2['name'] }}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                @else
                    <li><a href='#'>Category Six</a></li>
                @endif
            @endforeach                        
            <li><a href='/special-offers'>Special Offers</a></li>
        </ul>
    </nav>
</div>
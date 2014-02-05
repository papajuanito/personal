@extends('layouts/master')

@section('content')
<main id="view-work" role="main">
    <div class="contain with-icon">
        <img src="{{ asset('img/work-window-dark.png') }}" />
        <h2>[<b>work</b>] Sites & apps</h2>
        <ul class="work-list">
            @if(Agent::isMobile())
                <li class="work-item big" style="background: url({{ asset('img/thumbnails/thumb-playstation.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/nacion-play') }}"></a>
                </li>
                <li class="work-item medium" style="background: url({{ asset('img/thumbnails/thumb-emerge.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/emerge') }}"></a>
                </li>
                <li class="work-item small last" style="background: url({{ asset('img/thumbnails/thumb-herbal.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/herbal-essences') }}"></a>
                </li>
                <li class="work-item big" style="background: url({{ asset('img/thumbnails/thumb-lexus.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/lexus') }}"></a>
                </li>
                <li class="work-item medium" style="background: url({{ asset('img/thumbnails/thumb-destinations.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/destinations-guide') }}"></a>
                </li>
                <li class="work-item small last" style="background: url({{ asset('img/thumbnails/thumb-heart.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/memorial-heart') }}"></a>
                </li>
                <li class="work-item big" style="background: url({{ asset('img/thumbnails/thumb-panama.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/descubre-panama') }}"></a>
                </li>
                <li class="work-item medium" style="background: url({{ asset('img/thumbnails/thumb-pledge.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/pledge-fight-cancer') }}"></a>
                </li>
                <li class="work-item small last" style="background: url({{ asset('img/thumbnails/thumb-jdch.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/jdch-20') }}"></a>
                </li>
                <li class="work-item big last" style="background: url({{ asset('img/thumbnails/thumb-discovery.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/discovery') }}"></a>
                </li>
                <li class="work-item medium" style="background: url({{ asset('img/thumbnails/thumb-esposible.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/esposible') }}"></a>
                </li>
                <li class="work-item small last" style="background: url({{ asset('img/thumbnails/thumb-gustazos.png')}} ); background-size: cover; background-position: center;">
                    <a href="{{ URL::to('work/gustazos') }}"></a>
                </li>
            @else
                <li class="work-item big" style="background: url({{ asset('img/thumbnails/thumb-playstation.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>playstation</b>
                                <p>Nación Play</p>
                                <a href="{{ URL::to('work/nacion-play') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item medium" style="background: url({{ asset('img/thumbnails/thumb-emerge.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>lexus</b>
                                <p>Car Model Configurator</p>
                                <a href="{{ URL::to('work/emerge') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item small last" style="background: url({{ asset('img/thumbnails/thumb-herbal.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>copa airlines</b>
                                <p>Descubre Panama con Copa</p>
                                <a href="{{ URL::to('work/herbal-essences') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item small" style="background: url({{ asset('img/thumbnails/thumb-heart.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>copa airlines</b>
                                <p>Descubre Panama con Copa</p>
                                <a href="{{ URL::to('work/memorial-heart') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item medium" style="background: url({{ asset('img/thumbnails/thumb-destinations.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>lexus</b>
                                <p>Car Model Configurator</p>
                                <a href="{{ URL::to('work/destinations-guide') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item big last" style="background: url({{ asset('img/thumbnails/thumb-lexus.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>playstation</b>
                                <p>Nación Play</p>
                                <a href="{{ URL::to('work/lexus') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item big" style="background: url({{ asset('img/thumbnails/thumb-panama.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>playstation</b>
                                <p>Nación Play</p>
                                <a href="{{ URL::to('work/descubre-panama') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item medium" style="background: url({{ asset('img/thumbnails/thumb-pledge.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>lexus</b>
                                <p>Car Model Configurator</p>
                                <a href="{{ URL::to('work/pledge-fight-cancer') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item small last" style="background: url({{ asset('img/thumbnails/thumb-jdch.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>copa airlines</b>
                                <p>Descubre Panama con Copa</p>
                                <a href="{{ URL::to('work/jdch-20') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item small" style="background: url({{ asset('img/thumbnails/thumb-gustazos.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>copa airlines</b>
                                <p>Descubre Panama con Copa</p>
                                <a href="{{ URL::to('work/gustazos') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item medium" style="background: url({{ asset('img/thumbnails/thumb-esposible.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>lexus</b>
                                <p>Car Model Configurator</p>
                                <a href="{{ URL::to('work/esposible') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="work-item big last" style="background: url({{ asset('img/thumbnails/thumb-discovery.png')}} ); background-size: cover; background-position: center;">
                    <div class="circle">
                        <div class="work-sum">
                            <div class="content big">
                                <b>playstation</b>
                                <p>Nación Play</p>
                                <a href="{{ URL::to('work/discovery') }}">View Project</a>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</main>
@stop

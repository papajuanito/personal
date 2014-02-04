@extends('layouts/master')

@section('content')
<main id="view-home" role="main">
    <header id="home-hero">
        <!--img class="gallery-img" src="{{asset('img/header/header-1.jpg')}}"-->
        <div class="contain">
            <img class="home-logo" src="{{ asset('img/logo.png') }}">
            <div class="content">
                <h1>[<span>javier</span>]Velázquez</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat, quam sed pharetra tincidunt.</p>
            </div>
        </div>
    </header>
    <section id="home-overview" class="section">
        <div class="contain">
            <div class="contain-left development with-icon">
                <div class="content">
                    <img src="{{ asset('img/monitor.png') }}" />
                    <h2>[<span>web</span>] development</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mattis orci sit amet mi imperdiet porta. Nullam vitae egestas nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo ut nibh pellentesque, venenatis aliquet justo vehicula. Nulla rhoncus tortor vitae convallis fermentum. Cr</p>
                </div>
            </div>
            <div class="contain-right skills with-icon">
                <img src="{{ asset('img/skills.png') }}" />
                <h2>[<span>skills</span>] languages & tools</h2>
                <ul class="skills-list">
                    <li>HTML/HTML5</li>
                    <li>CSS/CSS3</li>
                    <li>SASS/LESS</li>
                    <li>JavaScript</li>
                    <li>CoffeeScript</li>
                    <li>jQuery</li>
                    <li>RequireJS</li>
                    <li>Google Analytics</li>
                    <li>Twitter, Google, Facebook APIs</li>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>CodeIgniter</li>
                    <li>MVC</li>
                    <li>Wordpress</li>
                    <li>git</li>
                    <li>MySQL</li>
                    <li>Shell</li>
                    <li>Composer</li>
                    <li>Homebrew</li>
                    <li>Bower</li>
                    <li>Apache</li>
                    <li>C/C++</li>
                    <li>Java</li>
                    <li>OS X</li>
                    <li>Windows</li>
                    <li>Linux</li>
                    <li>Unix</li>
                </ul>
                <ul class="profile-links">
                    <li><a href="{{ asset('files/resume.pdf') }}" alt="resume" target="_blank" class="resume"></a></li>
                    <li><a href="https://github.com/papajuanito" target="_blank" alt="github" class="github"></a></li>
                    <li class="last"><a href="https://www.codeeval.com/public/6b52b8cb9a816f667cf958d75b33405713269d47" alt="codeeval" target="_blank" class="codeeval"></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section id="home-work" class="section">
        <div class="contain work with-icon">
            <img src="{{ asset('img/work-window.png') }}" />
            <h2>[<span>work</span>] Sites & apps</h2>
            @if(Agent::isMobile())
                <ul class="work-list">
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
                                    <a href="#">View Project</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="work-item big" style="background: url({{ asset('img/thumbnails/thumb-lexus.png')}} ); background-size: cover; background-position: center;">
                        <div class="circle">
                            <div class="work-sum">
                                <div class="content big">
                                    <b>playstation</b>
                                    <p>Nación Play</p>
                                    <a href="#">View Project</a>
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
                                    <a href="#">View Project</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="work-item small last" style="background: url({{ asset('img/thumbnails/thumb-heart.png')}} ); background-size: cover; background-position: center;">
                        <div class="circle">
                            <div class="work-sum">
                                <div class="content big">
                                    <b>copa airlines</b>
                                    <p>Descubre Panama con Copa</p>
                                    <a href="#">View Project</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="all-work" href="{{ URL::to('work') }}">view all projects</a>
            @else
                <a class="all-work" href="{{ URL::to('work') }}">view all projects</a>
                <ul class="work-list">
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
                    <li class="work-item medium" style="background: url({{ asset('img/thumbnails/thumb-emerge.png')}} ); background-size: cover;">
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
                </ul>
            @endif
        </div>
    </section>
    <section id="home-contact" class="section">
        <div class="contain">
            <div class="contain-left contact">
                <div class="content">
                    <h2 class="with-icon">[<span>contact</span>] Get in touch</h2>
                </div>
            </div>
            <div class="contain-right">
                <h2>[<span>javier</span>] Velázquez</h2>

            </div>
        </div>
    </section>
</main>
@stop

@extends('layouts/master')

@section('content')
<main id="view-home" role="main">
    <header id="home-hero">
        <div class="contain">
            <img src="{{ asset('img/logo.png') }}">
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
                    <h2>[<span>web</span>] development</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mattis orci sit amet mi imperdiet porta. Nullam vitae egestas nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo ut nibh pellentesque, venenatis aliquet justo vehicula. Nulla rhoncus tortor vitae convallis fermentum. Cr</p>
                </div>
            </div>
            <div class="contain-right skills with-icon">
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
                    <li><a href="http://codeeval.com" alt="codeeval" target="_blank" class="codeeval"></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section id="home-work" class="section">
        <div class="contain">
            <ul class="work-list">
                <li class="work-item big">
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
                <li class="work-item medium">
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
                <li class="work-item small last">
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
                <li class="work-item small">
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
                <li class="work-item medium">
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
                <li class="work-item big last">
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
            </ul>
        </div>
    </section>
    <section id="home-contact" class="section">
        <div class="contain">
            <div class="contain-left contact with-icon">
                <div class="content">
                    <h2>[<span>contact</span>] Get in touch</h2>
                </div>
            </div>
            <div class="contain-right">
                <h2>[<span>javier</span>] Velázquez</h2>

            </div>
        </div>
    </section>
</main>
@stop

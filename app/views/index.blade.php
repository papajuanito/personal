@extends('layouts/master')

@section('content')
<main id="view-home" role="main">
    <header id="home-hero">
        <div class="contain">
            <div class="content">
                <!-- <a href="#" class="logo">Javier Velazquez</a> -->
                <h1>[ <span>javier</span>] Velázquez</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis tincidunt mauris, sed accumsan mauris porta nec. Nulla nibh sapien, facilisis ut sapien eu</p>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mattis orci sit amet mi imperdiet porta. Nullam vitae egestas nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies leo ut nibh pellentesque, venenatis aliquet justo vehicula. Nulla rhoncus tortor vitae convallis fermentum. Cr</p>
            </div>
        </div>
    </section>
    <section id="home-work" class="section">
        <div class="contain">
            <ul class="work-list">
                <li class="work-item big">
                    <div class="circle">
                        <div class="work-sum">
                        </div>
                    </div>
                </li>
                <li class="work-item medium">
                    <div class="circle">
                        <div class="work-sum">
                        </div>
                    </div>
                </li>
                <li class="work-item small last">
                    <div class="circle">
                        <div class="work-sum">
                        </div>
                    </div>
                </li>
                <li class="work-item small">
                    <div class="circle">
                        <div class="work-sum">
                        </div>
                    </div>
                </li>
                <li class="work-item medium">
                    <div class="circle">
                        <div class="work-sum">
                        </div>
                    </div>
                </li>
                <li class="work-item big last">
                    <div class="circle">
                        <div class="work-sum">
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

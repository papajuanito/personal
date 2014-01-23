<?php $route = Route::currentRouteName() ?>

<header id="header">
    <a href="{{ route('index') }}" class="logo-emerge" itemprop="name">eMerge Americas</a>

    <nav id="navigation" role="navigation">
        <ul>
            <li class="has-dropdown">
                <span{{ $route == 'index' || $route == 'summits' || $route == 'global' || $route == 'exhibitions' ? ' class="is-active"' : '' }}>The Experience</span>
                <ul class="nav-dropdown">
                    <li><a href="#">eMerge Summits</a></li>
                    <li><a href="#">eMerge Global</a></li>
                    <li><a href="#">Exhibitions</a></li>
                </ul>
            </li>
            <li>
            <li class="has-dropdown">
                <a href="#"{{ $route == 'speakers' ? ' class="is-active"' : '' }}>Speakers</a>
                <ul class="nav-dropdown">
                    <li><a href="#innovate">Innovate</a></li>
                    <li><a href="#health">Health</a></li>
                    <li><a href="#money">Money</a></li>
                    <li><a href="#cities">Cities</a></li>
                    <li><a href="#entertain">Entertain</a></li>
                    <li><a href="#smart">Smart</a></li>
                </ul>
            </li>
            <li><a href=""{{ $route == 'agenda' ? ' class="is-active"' : '' }}>Agenda</a></li>
        </ul>
    </nav>
</header>

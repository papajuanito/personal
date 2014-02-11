<?php $route = Route::currentRouteName() ?>
<header id="header">
    <div class="contain">
        <a class="header_logo" href="{{ URL::to('/')}}"><img src="{{ asset('img/logo.png') }}"></a>
        <nav id="navigation" role="navigation">
            <ul>
                <li >
                    <a {{ $route == 'index' ? ' class="is-active"' : '' }} href="{{ URL::to('/') }}">about</a>
                </li>
                <li>
                    <a {{ $route == 'work' || $route == 'work-single' ? ' class="is-active"' : '' }} href="{{ URL::to('work') }}">work</a>
                </li>
                <li>
                    <a href="{{ URL::to('/') }}#home-contact" {{ $route == 'contact' ? ' class="is-active"' : '' }}>contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<header id="mobile-header">
    <a href="#" class="right-off-canvas-toggle menu-icon" ><span></span></a>
</header>
<aside class="right-off-canvas-menu">
  <ul class="off-canvas-list">
    <li><label></label></li>
    <li class="home"><a href="{{ URL::to('/') }}">home</a></li>
    <li class="work"><a href="{{ URL::to('work') }}">work</a></li>
    <li class="contact"><a href="{{ URL::to('/') }}#home-contact">contact</a></li>
  </ul>
</aside>

<?php $route = Route::currentRouteName() ?>

<header id="header">
    <div class="contain">
        <nav id="navigation" role="navigation">
            <ul>
                <li >
                    <a {{ $route == 'index' ? ' class="is-active"' : '' }} href="{{ URL::to('/') }}">about</a>
                </li>
                <li>
                    <a {{ $route == 'work' ? ' class="is-active"' : '' }} href="{{ URL::to('work') }}">work</a>
                <li>
                <li>
                    <a href=""{{ $route == 'contact' ? ' class="is-active"' : '' }}>contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

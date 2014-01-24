<?php $route = Route::currentRouteName() ?>

<header id="header">
    <div class="contain">
        <nav id="navigation" role="navigation">
            <ul>
                <li>
                    <a {{ $route == 'index' ? ' class="is-active"' : '' }} href="#">work</a>
                <li>
                <li class="has-dropdown">
                    <a href="#"{{ $route == 'about' ? ' class="is-active"' : '' }}>about</a>
                </li>
                <li>
                    <a href=""{{ $route == 'contact' ? ' class="is-active"' : '' }}>contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

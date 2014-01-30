@extends('layouts/master')

@section('content')
<main id="view-work" role="main">
    <div class="contain">
        <div class="work-area work-left">
            <img class="work-logo" src="{{ asset('img/logo-placeholder.png') }}" />
            <h2>[<b>playstation</b>] Nación Play</h2>
            <ul class="skills-list">
                    <li>HTML/HTML5</li>
                    <li>CSS/CSS3</li>
                </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat, quam sed pharetra tincidunt, purus augue laoreet tellus, id rhoncus velit turpis eget nunc. Nulla molestie eget nibh auctor elementum. Phasellus porta quis orci eu pharetra. Praesent feugiat imperdiet massa, eu ullamcorper.</p>
        </div>
        <div class="work-area work-right">
            <img class="mac-showcase" src="{{ asset('img/mac-placeholder.png'); }}" />
            <img class="browser-showcase" src="{{ asset('img/browser-placeholder.png'); }}" />
        </div>
    </div>
</main>
@stop

@extends('layouts/master')

@section('content')

<main id="view-work-single" role="main">
    <div class="contain">
        <div class="work-area work-left">
            <img class="work-logo" src="{{ asset('img/logos/' . $project->string . '.jpg') }}" />
            <h2>[<b>{{ strtolower($project->client) }}</b>] {{ $project->name }}</h2>
            <ul class="skills-list">
                    <li>HTML/HTML5</li>
                    <li>CSS/CSS3</li>
                </ul>
            <p>{{ $project->description}}</p>
        </div>
        <div class="work-area work-right">
            <img class="mac-showcase" src="{{ asset('img/works/' . $project->string . '-work-1.png'); }}" />
            <img class="browser-showcase" src="{{ asset('img/works/' . $project->string . '-work-2.png'); }}" />
        </div>
    </div>
</main>
@stop

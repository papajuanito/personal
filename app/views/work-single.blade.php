@extends('layouts/master')

@section('content')

<main id="view-work-single" role="main">
    <div class="contain">
        <div class="work-area work-left">
            <img class="work-logo" src="{{ asset('img/logos/' . $project->string . '.jpg') }}" />
            <h2>[<b>{{ strtolower($project->client) }}</b>] {{ $project->name }}</h2>
            <ul class="skills-list">
                    {{ $project->tools }}
                </ul>
            <p>{{ $project->description}}</p>
        </div>
        <div class="work-area work-right">
            <img class="mac-showcase" src="{{ asset('img/works/' . $project->string . '-work-backend-1.png'); }}" />

            <strong>Back-end</strong>
            <p>{{ $project->description_backend }}</p>
            <img class="browser-showcase" src="{{ asset('img/works/' . $project->string . '-work-backend-2.png'); }}" />
        </div>
    </div>
</main>
@stop

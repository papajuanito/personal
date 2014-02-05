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
            <ul class="example-orbit" data-orbit>
                <?php $count = 2; ?>
                @while(file_exists( public_path('img/works/' . $project->string . '-work-backend-'.$count.'.png') ))
                    <li>
                        <img src="{{asset('img/works/' . $project->string . '-work-backend-'.$count.'.png')}}" alt="slide 3" />
                    </li>
                    <?php $count++; ?>
                @endwhile
            </ul>
        </div>
    </div>
</main>
@stop

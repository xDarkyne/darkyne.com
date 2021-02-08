@extends('base')

@section('title', 'Darkyne | Work')

@section('content')
    <div class="main-section">
        <div class="fluid">
            <div class="hero-wrapper">
                <section class="half-page-hero">
                    <div class="hero-text-container">
                        <h1>Here are some of my best projects!</h1>
                        <p>Those are just my favorites, there are more.</p>
                    </div>
                    @foreach($projects as $project)
                        <div class="project-card">
                            <div class="project-header">
                                <h2>{{$project->projectName}}</h2>
                            </div>
                            <div class="project-body">
                                <p>{{$project->projectDesc}}</p>
                            </div>
                            <div class="project-link">
                                <a href="{{$project->projectUrl}}" class="app-button">Show me the code!</a>
                            </div>
                        </div>
                    @endforeach
                </section>

                <section class="half-page-hero">
                    <div class="hero-text-container">
                        <h1>Can't find what you were looking for?</h1>
                        <p>You can still browse my GitHub for all of my projects.</p>
                    </div>
                    <div class="hero-button-container">
                        <div class="hero-button-container">
                            <a href="/github" class="app-button">BROWSE MY GITHUB INSTEAD</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

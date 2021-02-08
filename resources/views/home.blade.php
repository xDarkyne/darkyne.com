@extends('base')

@section('title', 'Darkyne | Home')

@section('content')
    <div class="main-section">
        <div class="fluid">
            <div class="hero-wrapper">
                <section class="half-page-hero">
                    <div class="hero-text-container">
                        <h1>Hello! I'm Dimitri aka. Darkyne.</h1>
                        <p>Creating web experiences and getting to know new technologies is what I live for.
                            As a specialist for system integration at <a class="app-link" href="https://pg.com">Procter & Gamble</a> and
                            developing websites and dotNET apps I never stop improving.
                        </p>
                    </div>
                    <div class="hero-button-container">
                        <a href="#second" class="app-button">Read about my work</a>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="main-section" id="second">
        <div class="fluid">
            <div class="hero-wrapper">
                <section class="half-page-hero">
                    <div class="hero-text-container">
                        <h1>Sorry, but...</h1>
                        <p>...the part you are looking for is not finished yet.
                            but you can checkout the repository for this website!
                        </p>
                    </div>
                    <div class="hero-button-container">
                        <a href="https://github.com/xdarkyne/darkyne.com" target="_blank" class="app-button">Take me to the Repo</a>
                    </div>
                </section>

                <section class="half-page-hero">
                    <div class="hero-text-container">
                        <h1>Or you can...</h1>
                        <p>...click this cool button I use to test this website!</p>
                    </div>
                    <div class="hero-button-container">
                        <a href="#last" class="app-button">Click me</a>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="main-section" id="last">
        <div class="fluid">
            <div class="hero-wrapper">
                <section class="half-page-hero">
                    <div class="hero-text-container">
                        <h1>Looks good right?</h1>
                        <p>Now consider checking out my other projects</p>
                    </div>
                    <div class="hero-button-container">
                        <a href="/github" class="app-button">Take me to GitHub</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

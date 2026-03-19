@extends('layouts.main')
@section('title','Portofolio RaziefRaftransyah')

@push('style')
<link rel="stylesheet" href="{{ asset('css/popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/intro.css') }}">
@endpush

@push('script')
<script src="{{ asset('js/intro.js') }}" defer></script>
@endpush

{{-- INTRO --}}
<div id="intro" class="intro">
    <div class="grid" id="grid"></div>
</div>

{{-- NAVBAR --}}
@section('navbar')
<nav class="navbar reveal">
    <div class="nav-container">
        <span class="logo">Razief</span>
        <ul class="nav-menu">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="/projects">Project</a></li>
            <li><a href="#contact">Contact</a></li>

            @guest
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li>
            @endguest

            @auth
                @if(auth()->user()->role === 'admin')
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                @endif

                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link-btn">
                            Logout
                        </button>
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</nav>
@endsection

{{-- CONTENT --}}
@section('content')
<main>

    <!-- HERO -->
    <section id="about" class="hero-section reveal">
        <div class="profile-wrapper">

            <img src="{{ asset('images/RPL.jpeg') }}"
                 class="profile-img-square">

            <div class="profile-info">
                <h1 class="profile-name">Razief Raftransyah</h1>

                <p class="profile-desc">
                    Saya adalah Web Developer yang berfokus pada pengembangan aplikasi
                    menggunakan Laravel, dengan perhatian pada clean code,
                    performa, dan UI yang modern.
                </p>

                <a href="https://wa.me/6282353151402" class="btn">Contact Me</a>
            </div>

        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="skills-section reveal">
        <h2>Keahlian</h2>
        <div class="skills-list">
            <span>Laravel</span>
            <span>PHP</span>
            <span>MySQL</span>
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>Git</span>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="contact-section reveal">
        <h2>Kontak</h2>
        <p>Email: <a href="mailto:razief@email.com">razief@email.com</a></p>
        <p>GitHub: <a href="#">github.com/username</a></p>
        <p>LinkedIn: <a href="#">linkedin.com/in/razief</a></p>
    </section>

</main>
@endsection
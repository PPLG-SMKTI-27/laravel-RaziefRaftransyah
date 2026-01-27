@extends('layout.main')
@section('title','Portofolio RaziefRaftransyah')

@push('style')
<link rel="stylesheet" href="{{ asset('css/popup.css') }}">
@endpush

@section('navbar')
<nav class="navbar">
    <div class="nav-container">
        <span class="logo">Razief</span>
        <ul class="nav-menu">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="/project">Project</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </div>
</nav>
@endsection

@section('content')
<main class="swipe-enter">

    <!-- HERO / PROFILE -->
    <section id="about" class="hero-section">
    <div class="profile-wrapper">

        <img src="{{ asset('images/Dreamybull 11.jpg') }}"
             alt="Profile Photo"
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
    <section id="skills" class="skills-section">
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
    <section id="contact" class="contact-section">
        <h2>Kontak</h2>
        <p>Email: <a href="mailto:razief@email.com">razief@email.com</a></p>
        <p>GitHub: <a href="https://github.com/username" target="_blank">github.com/username</a></p>
        <p>LinkedIn: <a href="#">linkedin.com/in/razief</a></p>
    </section>

</main>
<script>
function closePopup(btn) {
    btn.parentElement.remove();
}

setTimeout(() => {
    document.querySelectorAll('.popup').forEach(popup => {
        popup.remove();
    });
}, 3500);
</script>

@endsection

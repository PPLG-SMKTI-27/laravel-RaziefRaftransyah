@extends('layout.main')
@section('title', 'Portofolio Razief Raftransyah')

@section('nav')

    <ul>
      <li><a href="#about">Tentang</a></li>
      <li><a href="#skills">Skill</a></li>
      <li><a href="/project">Proyek</a></li>
      <li><a href="#contact">Kontak</a></li>
      <li class="nav-login">
        <a href="/login">Login</a>
      </li>
    </ul>
    @if(session('success'))
  <p style="color:green;">
    {{ session('success') }}
  </p>
@endif

@endsection

@section('content')
  
  <header>
    <img src="/images/Dreamybull 11.jpg" alt="Foto Profil" class="profile-img" />
    <h1>razief</h1>
    <p>ffffff</p>
  </header>

  

  <section id="about" class="about">
    <h2>Tentang Saya</h2>
    <p>
      Saya adalah seorang programmer yang tertarik pada pengembangan web,
      logika pemrograman, dan teknologi. Saya senang membangun website,
      mempelajari sistem baru, dan mengembangkan skill secara konsisten.
    </p>
  </section>

  <section id="skills">
    <h2>Skill</h2>
    <div class="skills">
      <div class="skill-card">HTML & CSS</div>
      <div class="skill-card">JavaScript</div>
      <div class="skill-card">PHP & MySQL</div>
      <div class="skill-card">Git & GitHub</div>
      <div class="skill-card">Problem Solving</div>
    </div>
  </section>

  <section id="projects">
    <h2>Proyek</h2>
    <div class="projects">
      <div class="project-card">
        <h3>Website CRUD</h3>
        <p>Aplikasi CRUD menggunakan PHP dan MySQL.</p>
        <a href="#">Lihat Proyek</a>
      </div>
      <div class="project-card">
        <h3>Website Portofolio</h3>
        <p>Website portofolio pribadi menggunakan HTML & CSS.</p>
        <a href="#">Lihat Proyek</a>
      </div>
      <div class="project-card">
        <h3>Mini App</h3>
        <p>Aplikasi kecil berbasis JavaScript.</p>
        <a href="#">Lihat Proyek</a>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <h2>Kontak</h2>
    <a href="mailto:24_razief@student.smkti.net">Email</a>
    <a href="https://github.com/RaziefRaftransyah">GitHub</a>
    <a href="https://kick.com/rezaauditore">Kick</a>
  </section>

  <footer>
    <p>© 2026 Razief Raftransyah. All Rights Reserved.</p>
  </footer>
@endsection
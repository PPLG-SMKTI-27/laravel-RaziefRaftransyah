@extends('layout.main')

@section('title','Projects')

@push('style')
<link rel="stylesheet" href="{{ asset('css/project.css') }}">
@endpush

@section('navbar')
<nav class="navbar">
    <div class="nav-container">
        <ul class="nav-menu">
            <li><a href="/">< Back</a></li>
            
        </ul>
    </div>
</nav>
@endsection

@section('content')
<section class="projects-section">

    <h1 class="section-title">Projects</h1>
    <p class="section-subtitle">Beberapa project yang pernah saya kerjakan</p>

    <div class="projects-slider" id="projectSlider">
    <div class="projects-track" id="projectTrack">

        <div class="project-card">
    <img src="/images/frost.jpg" alt="Portfolio Website">

    <div class="project-content">
        <h3 class="project-title">Personal Portfolio</h3>

        <p class="project-desc">
            Website portfolio personal dengan Laravel,
            menampilkan project, skill, dan kontak.
        </p>

        <div class="tech-stack">
            <span>Laravel</span>
            <span>PHP</span>
            <span>MySQL</span>
            <span>CSS</span>
        </div>

        <div class="project-links">
            <a href="#">Demo</a>
            <a href="#">GitHub</a>
        </div>
    </div>
</div>

<div class="project-card">
    <img src="/images/frost.jpg" alt="E-Commerce">

    <div class="project-content">
        <h3 class="project-title">Mini E-Commerce</h3>

        <p class="project-desc">
            Aplikasi e-commerce sederhana dengan
            sistem login dan manajemen produk.
        </p>

        <div class="tech-stack">
            <span>Laravel</span>
            <span>Blade</span>
            <span>MySQL</span>
        </div>

        <div class="project-links">
            <a href="#">Demo</a>
            <a href="#">GitHub</a>
        </div>
    </div>
</div>

<div class="project-card">
    <img src="/images/frost.jpg" alt="Admin Dashboard">

    <div class="project-content">
        <h3 class="project-title">Admin Dashboard</h3>

        <p class="project-desc">
            Dashboard admin dengan chart, CRUD data,
            dan sistem role user.
        </p>

        <div class="tech-stack">
            <span>Laravel</span>
            <span>Chart.js</span>
            <span>Tailwind</span>
        </div>

        <div class="project-links">
            <a href="#">Demo</a>
            <a href="#">GitHub</a>
        </div>
    </div>
</div>


        <!-- DUPLIKASI -->
        <div class="project-card">
    <img src="/images/frost.jpg" alt="Portfolio Website">

    <div class="project-content">
        <h3 class="project-title">Personal Portfolio</h3>

        <p class="project-desc">
            Website portfolio personal dengan Laravel,
            menampilkan project, skill, dan kontak.
        </p>

        <div class="tech-stack">
            <span>Laravel</span>
            <span>PHP</span>
            <span>MySQL</span>
            <span>CSS</span>
        </div>

        <div class="project-links">
            <a href="#">Demo</a>
            <a href="#">GitHub</a>
        </div>
    </div>
</div>

<div class="project-card">
    <img src="/images/frost.jpg" alt="E-Commerce">

    <div class="project-content">
        <h3 class="project-title">Mini E-Commerce</h3>

        <p class="project-desc">
            Aplikasi e-commerce sederhana dengan
            sistem login dan manajemen produk.
        </p>

        <div class="tech-stack">
            <span>Laravel</span>
            <span>Blade</span>
            <span>MySQL</span>
        </div>

        <div class="project-links">
            <a href="#">Demo</a>
            <a href="#">GitHub</a>
        </div>
    </div>
</div>

<div class="project-card">
    <img src="/images/frost.jpg" alt="Admin Dashboard">

    <div class="project-content">
        <h3 class="project-title">Admin Dashboard</h3>

        <p class="project-desc">
            Dashboard admin dengan chart, CRUD data,
            dan sistem role user.
        </p>

        <div class="tech-stack">
            <span>Laravel</span>
            <span>Chart.js</span>
            <span>Tailwind</span>
        </div>

        <div class="project-links">
            <a href="#">Demo</a>
            <a href="#">GitHub</a>
        </div>
    </div>
</div>


    </div>
</div>

</div>
<script>
const slider = document.getElementById('projectSlider');
const track  = document.getElementById('projectTrack');

let isDown = false;
let startX = 0;
let translateX = 0;
let velocity = 0;
let rafId;

const friction = 0.93;
const autoSpeed = 0.35;

const trackWidth = track.scrollWidth / 2;

// ================= AUTO SCROLL =================
function autoScroll() {
    translateX -= autoSpeed;
    infiniteLoop();
    applyTransform();
    rafId = requestAnimationFrame(autoScroll);
}
autoScroll();

// ================= DRAG =================
slider.addEventListener('mousedown', e => {
    isDown = true;
    startX = e.pageX;
    velocity = 0;
    cancelAnimationFrame(rafId);
});

slider.addEventListener('mousemove', e => {
    if (!isDown) return;
    const dx = e.pageX - startX;
    startX = e.pageX;
    velocity = dx;
    translateX += dx;
    infiniteLoop();
    applyTransform();
});

slider.addEventListener('mouseup', endDrag);
slider.addEventListener('mouseleave', endDrag);

// ================= TOUCH =================
slider.addEventListener('touchstart', e => {
    startX = e.touches[0].pageX;
    cancelAnimationFrame(rafId);
});

slider.addEventListener('touchmove', e => {
    const dx = e.touches[0].pageX - startX;
    startX = e.touches[0].pageX;
    velocity = dx;
    translateX += dx;
    infiniteLoop();
    applyTransform();
});

slider.addEventListener('touchend', endDrag);

// ================= INERTIA =================
function endDrag() {
    if (!isDown) return;
    isDown = false;
    inertia();
}

function inertia() {
    velocity *= friction;
    translateX += velocity;
    infiniteLoop();
    applyTransform();

    if (Math.abs(velocity) > 0.5) {
        requestAnimationFrame(inertia);
    } else {
        autoScroll();
    }
}

// ================= CORE =================
function infiniteLoop() {
    if (translateX <= -trackWidth) {
        translateX += trackWidth;
    }
    if (translateX >= 0) {
        translateX -= trackWidth;
    }
}

function applyTransform() {
    track.style.transform = `translateX(${translateX}px)`;
}
</script>



</section>
@endsection

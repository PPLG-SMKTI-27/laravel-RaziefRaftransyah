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

            @foreach ($projects as $project)
            <div class="project-card">
                <img src="{{ asset('images/'.$project->image) }}" alt="{{ $project->title }}">

                <div class="project-content">
                    <h3 class="project-title">{{ $project->title }}</h3>

                    <p class="project-desc">
                        {{ $project->description }}
                    </p>

                    <div class="tech-stack">
                        @foreach ($project->skills as $skill)
                            <span>{{ $skill->name }}</span>
                        @endforeach
                    </div>

                    <div class="project-links">
                        @if($project->link)
                            <a href="{{ $project->link }}" target="_blank">Demo</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ($projects as $project)
            <div class="project-card">
                <img src="{{ asset('images/'.$project->image) }}" alt="{{ $project->title }}">

                <div class="project-content">
                    <h3 class="project-title">{{ $project->title }}</h3>

                    <p class="project-desc">
                        {{ $project->description }}
                    </p>

                    <div class="tech-stack">
                        @foreach ($project->skills as $skill)
                            <span>{{ $skill->name }}</span>
                        @endforeach
                    </div>

                    <div class="project-links">
                        @if($project->link)
                            <a href="{{ $project->link }}" target="_blank">Demo</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</section>



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

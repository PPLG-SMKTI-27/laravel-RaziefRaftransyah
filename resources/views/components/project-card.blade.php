@props(['project'])

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
<x-app-layout>
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<div class="ds-dashboard">
<div class="ds-container">
<div class="ds-header">
<h2 class="ds-title">
PROJECT TERMINAL
<span>BRIDGES NETWORK</span>
</h2>

<a href="{{ route('dashboard.projects.create') }}" class="ds-btn-add">
+ NEW PROJECT
</a>

</div>


@if(session('success'))
<div class="ds-alert">
{{ session('success') }}
</div>
@endif


<div class="ds-table-wrapper">

<table class="ds-table">

<thead>
<tr>
<th>#</th>
<th>TITLE</th>
<th>DESCRIPTION</th>
<th>PREVIEW</th>
<th>LINK</th>
<th>ACTION</th>
</tr>
</thead>

<tbody>

@foreach($projects as $project)

<tr>

<td>{{ $loop->iteration }}</td>

<td class="ds-title-cell">{{ $project->title }}</td>

<td>{{ Str::limit($project->description,60) }}</td>

<td>
<img src="{{ asset('images/'.$project->image) }}" class="ds-thumb">
</td>

<td>
<a href="{{ $project->link }}" class="ds-link">
VIEW
</a>
</td>

<td class="ds-actions">

<a href="{{ route('dashboard.projects.edit',$project) }}" class="ds-edit">
EDIT
</a>

<form action="{{ route('dashboard.projects.destroy',$project) }}" method="POST" class="ds-delete-form">

@csrf
@method('DELETE')

<button type="submit" class="ds-delete">
DELETE
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

</div>

</x-app-layout>
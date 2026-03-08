@extends('layouts.main')

@section('title','Edit Project')

@section('content')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<div class="form-container">

<h1 class="form-title">Edit Project</h1>

<form 
action="{{ route('dashboard.projects.update',$project->id) }}" 
method="POST" 
enctype="multipart/form-data"
>

@csrf
@method('PUT')


<!-- TITLE -->

<div class="form-group">

<label>Title</label>

<input
type="text"
name="title"
class="form-input"
value="{{ old('title',$project->title) }}"
required>

</div>


<!-- LINK -->

<div class="form-group">

<label>Project Link</label>

<input
type="text"
name="link"
class="form-input form-link"
value="{{ old('link',$project->link) }}">

</div>


<!-- DESCRIPTION -->

<div class="form-group">

<label>Description</label>

<textarea
name="description"
class="form-input"
rows="4"
>{{ old('description',$project->description) }}</textarea>

</div>


<!-- CURRENT IMAGE -->

<div class="form-group">

<label>Current Image</label>

<div class="image-preview">

<img src="{{ asset('images/'.$project->image) }}">

</div>

</div>


<!-- CHANGE IMAGE -->

<div class="form-group">

<label>Change Image</label>

<input
type="file"
name="image"
class="form-file">

</div>


<!-- BUTTON -->

<button type="submit" class="form-btn">

UPDATE PROJECT

</button>


</form>

</div>

@endsection
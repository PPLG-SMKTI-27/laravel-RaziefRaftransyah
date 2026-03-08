@extends('layouts.main')

@section('title','Tambah Project')

@section('content')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<div class="form-container">

<h1 class="form-title">Tambah Project</h1>

<form action="{{ route('dashboard.projects.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<!-- IMAGE -->

<div class="form-group">

<label>Gambar</label>

<input type="file" name="image" class="form-file" id="imageInput">

<div class="image-preview glitch-box" id="glitchBox">

<img id="previewImage">

<div class="glitch-layer layer1"></div>
<div class="glitch-layer layer2"></div>

</div>

</div>


<!-- TITLE -->

<div class="form-group">

<label>Judul</label>

<input 
type="text"
name="title"
class="form-input"
value="{{ old('title') }}"
required>

</div>


<!-- DESCRIPTION -->

<div class="form-group">

<label>Deskripsi</label>

<textarea 
name="description"
class="form-textarea">{{ old('description') }}</textarea>

</div>


<!-- LINK -->

<div class="form-group form-link">

<label>Link</label>

<input 
type="url"
name="link"
class="form-input"
value="{{ old('link') }}">

</div>


<button type="submit" class="form-btn">
Simpan Project
</button>

</form>

</div>


<script>

const input = document.getElementById("imageInput");
const preview = document.getElementById("previewImage");
const box = document.getElementById("glitchBox");

input.addEventListener("change", function(){

const file = this.files[0];

if(file){

const reader = new FileReader();

reader.onload = function(e){

preview.src = e.target.result;
preview.style.display = "block";

box.classList.add("active");

}

reader.readAsDataURL(file);

}

});

</script>

@endsection
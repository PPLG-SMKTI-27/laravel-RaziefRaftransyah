@extends('layout.prjct')
@section('title', 'Project Razief Raftransyah')

@section('content')
    <header>
    <h1>Daftar Projek</h1>
    <p>Kumpulan projek yang pernah saya buat</p>
  </header>

  <section>
    <div class="projects">

      <div class="project-card">
        <img src="images/frost.jpg" alt="CRUD App">
        <div class="project-content">
          <h3>Website CRUD</h3>
          <p>Aplikasi CRUD menggunakan PHP dan MySQL.</p>
          
        </div>
      </div>

      <div class="project-card">
        <img src="images/panam.png" alt="Landing Page">
        <div class="project-content">
          <h3>Landing Page</h3>
          <p>Website landing page untuk promosi produk.</p>
          
        </div>
      </div>

      <div class="project-card">
        <img src="https://via.placeholder.com/400x250" alt="Todo App">
        <div class="project-content">
          <h3>To-Do List App</h3>
          <p>Aplikasi to-do list sederhana dengan JavaScript.</p>
          
        </div>
      </div>

      <div class="project-card">
        <img src="https://via.placeholder.com/400x250" alt="Portfolio">
        <div class="project-content">
          <h3>Website Portofolio</h3>
          <p>Website portofolio pribadi menggunakan HTML & CSS.</p>
          
        </div>
      </div>

    </div>
  </section>

  <footer>
    <p>© 2026 Website Projek</p>
  </footer>
@endsection
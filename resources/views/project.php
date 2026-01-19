<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <nav>
    <a href="/">Kembali ke Portofolio</a>
  </nav>
  <title>Daftar Projek</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }
    nav{
      background: #020617;
      padding: 10px 20px;
    }

    body {
      background: #0f172a;
      color: #e5e7eb;
    }

    header {
      background: linear-gradient(135deg, #2563eb, #1e40af);
      padding: 60px 20px;
      text-align: center;
    }

    header h1 {
      font-size: 2.5rem;
    }

    header p {
      margin-top: 10px;
      opacity: 0.9;
    }

    section {
      max-width: 1100px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .projects {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
    }

    .project-card {
      background: #020617;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
      transition: transform 0.2s ease;
    }

    .project-card:hover {
      transform: translateY(-6px);
    }

    .project-card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }

    .project-content {
      padding: 20px;
    }

    .project-content h3 {
      margin-bottom: 10px;
    }

    .project-content p {
      font-size: 0.95rem;
      opacity: 0.85;
      margin-bottom: 15px;
    }

    .project-btn {
      display: inline-block;
      padding: 10px 16px;
      background: #2563eb;
      color: #fff;
      border-radius: 8px;
      text-decoration: none;
      font-size: 0.9rem;
    }

    .project-btn:hover {
      background: #1e40af;
    }

    footer {
      background: #020617;
      text-align: center;
      padding: 20px;
      font-size: 0.85rem;
      opacity: 0.7;
    }
  </style>
</head>
<body>

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

</body>
</html>
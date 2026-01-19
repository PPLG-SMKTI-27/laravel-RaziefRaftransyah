<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio Razief</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      background: #0f172a;
      color: #e5e7eb;
      line-height: 1.6;
    }

    header {
      background: linear-gradient(135deg, #2563eb, #1e40af);
      padding: 80px 20px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
    }

    .profile-img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid rgba(255,255,255,0.7);
      background: #020617;
    }

    header h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.2rem;
      opacity: 0.9;
    }

    nav {
      background: #020617;
      padding: 15px;
      position: sticky;
      top: 0;
    }

    nav ul {
      display: flex;
      justify-content: center;
      gap: 25px;
      list-style: none;
    }

    nav a {
      color: #e5e7eb;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      color: #60a5fa;
    }

    section {
      max-width: 1000px;
      margin: 60px auto;
      padding: 0 20px;
    }

    section h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      border-bottom: 3px solid #2563eb;
      display: inline-block;
      padding-bottom: 5px;
    }

    .about p {
      font-size: 1.05rem;
    }

    .skills {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .skill-card {
      background: #020617;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }

    .projects {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }

    .project-card {
      background: #020617;
      padding: 20px;
      border-radius: 10px;
    }

    .project-card h3 {
      margin-bottom: 10px;
    }

    .project-card a {
      color: #60a5fa;
      text-decoration: none;
    }

    .contact {
      text-align: center;
    }

    .contact a {
      display: inline-block;
      margin: 10px;
      padding: 12px 20px;
      background: #2563eb;
      color: white;
      border-radius: 8px;
      text-decoration: none;
    }

    footer {
      background: #020617;
      text-align: center;
      padding: 20px;
      margin-top: 60px;
      font-size: 0.9rem;
      opacity: 0.7;
    }
  </style>
</head>
<body>

  <header>
    <img src="images/Dreamybull 11.jpg" alt="Foto Profil" class="profile-img" />
    <h1>Razief Raftransyah</h1>
    <p>Web Developer | Programmer | Tech Enthusiast</p>
  </header>

  <nav>
    <ul>
      <li><a href="#about">Tentang</a></li>
      <li><a href="#skills">Skill</a></li>
      <li><a href="/project">Proyek</a></li>
      <li><a href="#contact">Kontak</a></li>
    </ul>
  </nav>

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

</body>
</html>

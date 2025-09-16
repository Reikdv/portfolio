<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mijn Portfolio</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-black text-light">


<nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-warning">
  <div class="container">
    <a class="navbar-brand text-warning fw-bold" href="#">Reik de Vries</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-light" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#about">About Me</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#cv">CV</a></li>
      </ul>
    </div>
  </div>
</nav>

<header class="text-center py-5 bg-black">
  <div class="container">
    <h1 class="display-4 fw-bold text-warning">Welkom op mijn Portfolio</h1>
    <p class="lead">Mijn naam is <span class="text">Reik de Vries</span>.</p>
  </div>
</header>


<section id="about" class="container my-5">
  <div class="card bg-dark text-light shadow-lg border-0 rounded-4 p-4">
    <h2 class="fw-bold text-warning">Over mij</h2>
    <p>Ik ben een developer met ervaring in webontwikkeling, design en meer.</p>
  </div>
</section>


<section id="skills" class="container my-5">
  <div class="card bg-dark text-light shadow-lg border-0 rounded-4 p-4">
    <h2 class="fw-bold text-warning">Skills</h2>
    <p>HTML, CSS, JavaScript, PHP, Bootstrap, React, etc.</p>
  </div>
</section>


<section id="projects" class="container my-5">
  <h2 class="fw-bold text-warning mb-4 text-center">Projecten</h2>
  <div class="row g-4">
    <div class="col-md-6 col-lg-3"><a href="project1.php" class="text-decoration-none"><div class="card bg-dark text-light h-100 shadow border border-warning"><div class="card-body"><h3 class="h5 text-warning">Project 1</h3><p class="card-text">1.</p></div></div></a></div>
    <div class="col-md-6 col-lg-3"><a href="project2.php" class="text-decoration-none"><div class="card bg-dark text-light h-100 shadow border border-warning"><div class="card-body"><h3 class="h5 text-warning">Project 2</h3><p class="card-text">2.</p></div></div></a></div>
    <div class="col-md-6 col-lg-3"><a href="project3.php" class="text-decoration-none"><div class="card bg-dark text-light h-100 shadow border border-warning"><div class="card-body"><h3 class="h5 text-warning">Project 3</h3><p class="card-text">3.</p></div></div></a></div>
    <div class="col-md-6 col-lg-3"><a href="project4.php" class="text-decoration-none"><div class="card bg-dark text-light h-100 shadow border border-warning"><div class="card-body"><h3 class="h5 text-warning">Project 4</h3><p class="card-text">4.</p></div></div></a></div>
  </div>
</section>


<section id="cv" class="container my-5">
  <div class="card bg-dark text-light shadow-lg border-0 rounded-4 p-4">
    <h2 class="fw-bold text-warning">CV</h2>
    <p>  <a href="" class="text-warning fw-bold" target="_blank"></a></p>
  </div>
</section>


<section class="container my-5">
  <div class="card bg-dark text-light shadow-lg border-0 rounded-4 p-4">
    <h2 class="fw-bold text-warning">Contact</h2>
    <p>Stuur een e-mail naar <a href="mail:Reikdv@gmail.com" class="text-warning fw-bold">Reikdv@gmail.com</a>.</p>
  </div>
</section>

<footer class="text-center py-4 bg-black border-top border-warning">
  &copy; 2025 <span class="text">Reik de Vries</span>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

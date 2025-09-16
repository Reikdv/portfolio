<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mijn Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-black text-light">

  <header class="text-center py-5 bg-black">
    <div class="container">
      <h1 class="display-4 fw-bold text-warning">Welkom op mijn Portfolio</h1>
      <p class="lead">Mijn naam is <span class="text-warning">Reik de Vries</span>.</p>
    </div>
  </header>

  <section class="container my-5">
    <div class="card bg-dark text-light shadow-lg border-0 rounded-4 p-4">
      <h2 class="fw-bold text-warning">Over mij</h2>
      <p>Ik ben een developer met ervaring in webontwikkeling, design en meer.</p>
    </div>
  </section>

  <section class="container my-5">
    <h2 class="fw-bold text-warning mb-4 text-center">Projecten</h2>
    <div class="row g-4">
      <!-- Herbruikbare project cards -->
      <div class="col-md-6 col-lg-3">
        <div class="card bg-dark text-light h-100 shadow border border-warning">
          <div class="card-body">
            <h3 class="h5 text-warning">Project 1</h3><p class="card-text">1.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card bg-dark text-light h-100 shadow border border-warning">
          <div class="card-body">
            <h3 class="h5 text-warning">Project 2</h3><p class="card-text">2.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card bg-dark text-light h-100 shadow border border-warning">
          <div class="card-body">
            <h3 class="h5 text-warning">Project 3</h3><p class="card-text">3.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card bg-dark text-light h-100 shadow border border-warning">
          <div class="card-body">
            <h3 class="h5 text-warning">Project 4</h3><p class="card-text">4.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container my-5">
    <div class="card bg-dark text-light shadow-lg border-0 rounded-4 p-4">
      <h2 class="fw-bold text-warning">Contact</h2>
      <p>Stuur een e-mail naar <a href="mailto:Reikdv@gmail.com" class="text-warning fw-bold">Reikdv@gmail.com</a> om contact op te nemen.</p>
    </div>
  </section>

  <footer class="text-center py-4 bg-black border-top border-warning">
    &copy; 2025 <span class="text-warning">Reik de Vries</span>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

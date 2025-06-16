<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>play</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css">
    <style>
        .card-custom {
            max-width: 230px;
            margin: auto;
            font-size: 0.9rem;
            transition: transform 0.25s cubic-bezier(.4,2,.6,1), box-shadow 0.25s;
            box-shadow: 0 2px 8px rgba(0,0,0,0.10);
            cursor: pointer;
        }
        .card-custom:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 8px 24px rgba(0,0,0,0.18);
            z-index: 2;
        }
        .card-custom img {
            max-height: 160px;
            object-fit: contain;
            transition: transform 0.3s cubic-bezier(.4,2,.6,1);
        }
        .card-custom:hover img {
            transform: scale(1.08);
        }
        h5.card-title {
            font-size: 0.85rem;
            height: 48px;
            overflow: hidden;
        }
    </style>
</head>
<body>
 <div class="w-100 py-2 px-4" style="background-color: #ffe600;">
  <div class="d-flex align-items-center gap-3">
    <a class="ms-5 mt-3">
      <img src="{{ Vite::image('logo_large.webp') }}" alt="Mercado Libre">
    </a>
  </div>
</div>
 <!-- Mercado Play -->
<div class="container my-5">
  <h2 class="mb-3 text-primary fw-bold text-center">🎬 Mercado Play</h2>
  <p class="text-center text-secondary mb-4">Disfruta de miles de películas y series gratis</p>

  <div class="row g-4 justify-content-center">
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbHTPq06bO0cwFaxTYmP55jQCut2BB1gObhQ&s" class="card-img-top rounded" alt="Película">
        <div class="card-body text-center p-2">
          <button class="text-decoration-none">Películas para ti</button>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmEV3MIqtBn6vOuBaQCFl_p_uP4usNFMFy2RkC1fLJq4oeadiQIG9ha_FeWeFwhhaTaL0&usqp=CAU" class="card-img-top rounded" alt="Película">
        <div class="card-body text-center p-2">
          <button class="btn btn-link p-0 text-decoration-none">Películas populares</button>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTUWQ30C4vK1xB3VCkk0FTKeVnBL2FHPZuW4ut390ao4HK2nfVFsQOy35AUND0qcPdC6I&usqp=CAU" class="card-img-top rounded" alt="Película">
        <div class="card-body text-center p-2">
          <button class="btn btn-link p-0 text-decoration-none">Series</button>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4_3B1bcRumbJqyyPm9nsP22RobcwMP27mtg&s" class="card-img-top rounded" alt="Película">
        <div class="card-body text-center p-2">
          <button class="btn btn-link p-0 text-decoration-none">Infantil</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row g-4 justify-content-center">
  <!-- Película 1 -->
  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
    <div class="card card-custom h-100 shadow-sm border-0">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzI5zzfLQkirlPnONniLSsE-LcRd2BxzI9cdlw7MHd4SjgYzvo3Vxp_SHEM4sCAyM7d_Y&usqp=CAU" class="card-img-top rounded" alt="Scary Movie">
      <div class="card-body p-2">
        <h5 class="card-title text-center">Scary Movie</h5>
        <p class="card-text text-center">Comedia | 2000<br>Parodia de filmes de asesinatos con humor negro.</p>
      </div>
    </div>
  </div>
  <!-- Película 2 -->
  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
    <div class="card card-custom h-100 shadow-sm border-0">
      <img src="https://m.media-amazon.com/images/I/81p+xe8cbnL._AC_SY679_.jpg" class="card-img-top rounded" alt="Inception">
      <div class="card-body p-2">
        <h5 class="card-title text-center">Inception</h5>
        <p class="card-text text-center">Ciencia ficción | 2010<br>Un ladrón roba secretos a través de los sueños.</p>
      </div>
    </div>
  </div>
  <!-- Película 3 -->
  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
    <div class="card card-custom h-100 shadow-sm border-0">
      <img src="https://m.media-amazon.com/images/I/91KkWf50SoL._AC_SY679_.jpg" class="card-img-top rounded" alt="The Dark Knight">
      <div class="card-body p-2">
        <h5 class="card-title text-center">The Dark Knight</h5>
        <p class="card-text text-center">Acción | 2008<br>Batman enfrenta al Joker en Gotham.</p>
      </div>
    </div>
  </div>
  <!-- Película 4 -->
  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
    <div class="card card-custom h-100 shadow-sm border-0">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg9hBp4ScC_4YmLqWh9_VOGoFAa8g5uMYO6u6v4hY3Velh1Ax4-wYGBOfHt0bVS5Wy3_I&usqp=CAU" class="card-img-top rounded" alt="Toy Story">
      <div class="card-body p-2">
        <h5 class="card-title text-center">Toy Story</h5>
        <p class="card-text text-center">Animación | 1995<br>Los juguetes cobran vida cuando nadie los ve.</p>
      </div>
    </div>
  </div>
  <!-- Película 5 -->
  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
    <div class="card card-custom h-100 shadow-sm border-0">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT68AXaQsArSXyQ1QRfhOVTeVuFIHrMEgPM_3Zf4m0l9-WbKFwzRg0IibI9aDUZiSl-ZqU&usqp=CAU" class="card-img-top rounded" alt="Titanic">
      <div class="card-body p-2">
        <h5 class="card-title text-center">Titanic</h5>
        <p class="card-text text-center">Drama | 1997<br>Una historia de amor a bordo del famoso barco.</p>
      </div>
    </div>
  </div>
  <!-- Película 6 -->
  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
    <div class="card card-custom h-100 shadow-sm border-0">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXO70N4EBuHW42bfLDXggcERyGyEUSOTU6JMtUlFVHcIK9gYx5cP64Wi_U91szhLsBWjk&usqp=CAU" class="card-img-top rounded" alt="Avengers: Endgame">
      <div class="card-body p-2">
        <h5 class="card-title text-center">Avengers: Endgame</h5>
        <p class="card-text text-center">Acción | 2019<br>Los Vengadores luchan para salvar el universo.</p>
      </div>
    </div>
  </div>
  <!-- Película 7 -->
  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
    <div class="card card-custom h-100 shadow-sm border-0">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe5c6hX2t3ZSY6hHt7Y4qFRykVfdrX7p3-gVg3I4mzvu_z37bYZ-Jxgbtom99Yyg_vXoQ&usqp=CAU" class="card-img-top rounded" alt="Forrest Gump">
      <div class="card-body p-2">
        <h5 class="card-title text-center">Forrest Gump</h5>
        <p class="card-text text-center">Drama | 1994<br>La vida de un hombre sencillo con un destino extraordinario.</p>
      </div>
    </div>
  </div>
  <!-- Película 8 -->
  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
    <div class="card card-custom h-100 shadow-sm border-0">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHx67so7jvLObQ7--ekpT5EurcTphKcrChAIxUKPUZyqWNlOU_vUuFBE6HRHMTZ5I5ZL4&usqp=CAU" class="card-img-top rounded" alt="The Matrix">
      <div class="card-body p-2">
        <h5 class="card-title text-center">The Matrix</h5>
        <p class="card-text text-center">Ciencia ficción | 1999<br>Un hacker descubre la verdad sobre su realidad.</p>
      </div>
    </div>
  </div>
  <!-- Película 9 -->
  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
    <div class="card card-custom h-100 shadow-sm border-0">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMl-6QZtNuk5uGNNuGl_lwaSC5E7goU0hUtCDZAOTjMhkkGYlG11cRiS8DFv6kSIkfHkE&usqp=CAU" class="card-img-top rounded" alt="Jurassic Park">
      <div class="card-body p-2">
        <h5 class="card-title text-center">Jurassic Park</h5>
        <p class="card-text text-center">Aventura | 1993<br>Dinosaurios vuelven a la vida en una isla remota.</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

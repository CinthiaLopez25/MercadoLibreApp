<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cupones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <style>
        .card-custom {
            max-width: 230px;
            margin: auto;
            font-size: 0.9rem;
        }
        .card-custom img {
            max-height: 160px;
            object-fit: contain;
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

<!-- 🟢 SECCIÓN CUPONES COMPLETA -->
<div class="container my-5">
  <h2 class="mb-4 text-center fw-bold text-primary">🎟️ Cupones disponibles</h2>
  <div class="row g-4 justify-content-center">

    <!-- CUPÓN 1: PARA PAPÁ -->
    <div class="col-md-4 col-sm-6">
      <div class="card border shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUHbXs73VeVPTEiOxZvb6mOsVh_MtqDLcfYQ&s" alt="Papá" width="48" class="me-2">
            <h5 class="mb-0 fw-bold text-dark">10% OFF PARA PAPÁ</h5>
          </div>
          <p>En productos seleccionados</p>
          <p class="text-muted mb-1">Mínimo $1,500 - Tope $400</p>
          <p class="text-muted"><small>📅 Vence 25 de junio</small></p>
          <a href="#" class="btn btn-sm btn-primary w-100">Aplicar</a>
        </div>
      </div>
    </div>

    <!-- CUPÓN 2: LITTMAN -->
    <div class="col-md-4 col-sm-6">
      <div class="card border shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <img src="https://http2.mlstatic.com/D_NQ_NP_799396-MLA83454265178_042025-O.webp" alt="Littman" width="48" class="me-2">
            <h5 class="mb-0 fw-bold text-dark">$250 OFF en Littman</h5>
          </div>
          <p>Compra mínima $2,000</p>
          <p class="text-muted mb-1">Tope de $500</p>
          <p class="text-muted"><small>📅 Vence 27 de junio</small></p>
          <a href="#" class="btn btn-sm btn-primary w-100">Aplicar</a>
        </div>
      </div>
    </div>

    <!-- CUPÓN 3: SHARK -->
    <div class="col-md-4 col-sm-6">
      <div class="card border shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <img src="https://http2.mlstatic.com/D_NQ_NP_838583-MLA81468174746_012025-O.webp" alt="Shark" width="48" class="me-2">
            <h5 class="mb-0 fw-bold text-dark">10% OFF en Shark</h5>
          </div>
          <p>Compra mínima $3,000</p>
          <p class="text-muted mb-1">Tope de $20,000</p>
          <p class="text-muted"><small>📅 Vence 1 de julio</small></p>
          <a href="#" class="btn btn-sm btn-primary w-100">Aplicar</a>
        </div>
      </div>
    </div>

    <!-- CUPÓN 4: 10% OFF sin mínimo -->
    <div class="col-md-4 col-sm-6">
      <div class="card border shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_opuY0E4htdWyCcm3tzV0zZIDsADpdNxHkrbtDTIBQ-b_RP3of9yiN9ryZvx3_7WyOY0&usqp=CAU" alt="5%" width="48" class="me-2">
            <h5 class="mb-0 fw-bold text-dark">10% OFF</h5>
          </div>
          <p>Sin compra mínima</p>
          <p class="text-muted mb-1">Tope de $500</p>
          <p class="text-muted"><small>📅 Vence 5 de julio</small></p>
          <a href="#" class="btn btn-sm btn-primary w-100">Aplicar</a>
        </div>
      </div>
    </div>

    <!-- CUPÓN 5: SUPER -->
    <div class="col-md-4 col-sm-6">
      <div class="card border shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpx1ATD1Ly1EbSfm291EfpUBdvFi9QdSZ-sQ&s" alt="Súper" width="48" class="me-2">
            <h5 class="mb-0 fw-bold text-dark">10% OFF en SUPER</h5>
          </div>
          <p>Compra mínima $3,000</p>
          <p class="text-muted mb-1">Tope de $400</p>
          <p class="text-muted"><small>📅 Vence 3 de julio</small></p>
          <a href="#" class="btn btn-sm btn-primary w-100">Aplicar</a>
        </div>
      </div>
    </div>

    <!-- CUPÓN 6: $100 OFF SUPER -->
    <div class="col-md-4 col-sm-6">
      <div class="card border shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqQdf612_PyTm82v0cqP8Cw3tRRmUaGXmCmdbIIJs3hAjTjNu2dmbWpMyaGZHR2CDW&usqp=CAU" alt="$100 OFF" width="48" class="me-2">
            <h5 class="mb-0 fw-bold text-dark">$100 OFF en SUPER</h5>
          </div>
          <p>Compra mínima $1,000</p>
          <p class="text-muted mb-1">Tope de $100</p>
          <p class="text-muted"><small>📅 Vence 7 de julio</small></p>
          <a href="#" class="btn btn-sm btn-primary w-100">Aplicar</a>
        </div>
      </div>
    </div>

    <!-- CUPÓN 7: MODA - 10% -->
    <div class="col-md-4 col-sm-6">
      <div class="card border shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <img src="https://http2.mlstatic.com/D_NQ_NP714841-MLA75710140560_042024-B.webp" alt="Moda" width="48" class="me-2">
            <h5 class="mb-0 fw-bold text-dark">10% OFF en Moda</h5>
          </div>
          <p>Sin compra mínima</p>
          <p class="text-muted mb-1">Tope de $5,000</p>
          <p class="text-danger fw-bold"><small>⚠️ ¡El cupón está por agotarse!</small></p>
          <a href="#" class="btn btn-sm btn-primary w-100">Aplicar</a>
        </div>
      </div>
    </div>

    <!-- CUPÓN 8: MODA - 15% -->
    <div class="col-md-4 col-sm-6">
      <div class="card border shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <img src="https://marketing4ecommerce.mx/wp-content/uploads/2019/10/Moda-sin-G%C3%A9nero-compressor.jpg" alt="Moda 15%" width="48" class="me-2">
            <h5 class="mb-0 fw-bold text-dark">15% OFF en Moda</h5>
          </div>
          <p>Compra mínima $0</p>
          <p class="text-muted mb-1">Tope de $5,000</p>
          <p class="text-muted"><small>📅 Vence 8 de julio</small></p>
          <a href="#" class="btn btn-sm btn-primary w-100">Aplicar</a>
        </div>
      </div>
    </div>

    <!-- CUPÓN 9: CLINIQUE Y MAC -->
    <div class="col-md-4 col-sm-6">
      <div class="card border shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <img src="https://http2.mlstatic.com/D_NQ_NP_900309-MLU72314219439_102023-O.webp" alt="MAC" width="48" class="me-2">
            <h5 class="mb-0 fw-bold text-dark">10% OFF en Clinique y MAC</h5>
          </div>
          <p>Compra mínima $100</p>
          <p class="text-muted mb-1">Tope de $10,000</p>
          <p class="text-muted"><small>📅 Vence 10 de julio</small></p>
          <a href="#" class="btn btn-sm btn-primary w-100">Aplicar</a>
        </div>
      </div>
    </div>

  </div>
</div>

</div>
</body>
</html>

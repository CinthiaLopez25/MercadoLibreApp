<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Supermercado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css">
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
<div class="container my-5 ml-40 flex items-center gap-4">
  <!-- Imagen 1 -->
  <img src="https://http2.mlstatic.com/D_NQ_853704-MLA85540016890_062025-OO.webp" alt="Imagen 1
  " style="width: 430px; height: 300px; margin-left: 30px;">

    <!-- Imagen 2 -->
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ9oqm55AofpfpV10hhk4o13eKla0ex9PVEw&s"
    alt="Imagen 2" style="width: 430px; height: 300px; margin-left: 10px;">

    </a>
    <br><br><br>

    <p style="text-align: center; font-weight: bold; font-size: 32px; color: #2e8b57; /* verde fresco */
          text-shadow: 2px 2px 4px rgba(46, 139, 87, 0.5);">
        ¡Todo lo que necesitas para tu hogar, al mejor precio!
  </p>

    <h2 class="mb-4 fs-4 fw-bold">SUPEROFERTAS EN FULL SÚPER</h2>

    <div class="row justify-content-center">
       <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_754217-MLU76561560629_052024-O.webp" class="card-img-top" alt="SUAVE">
                <div class="card-body">
                    <h5 class="card-title">Suavizante Ropa Suavitel Momentos Mágicos Abrazo Amor 4.8L</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $210.00</small><br>
                        <strong class="text-danger">Ahora: $170.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_819960-MLU72402767974_102023-O.webp" class="card-img-top" alt="Javon">
                <div class="card-body">
                    <h5 class="card-title">Pinol Jabón Líquido Lavandería Ropa Blanca y de Color 5.1L</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $160.00</small><br>
                        <strong class="text-danger">Ahora: $120.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
       <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_849946-MLA84844873607_052025-O.webp" class="card-img-top" alt="protector">
                <div class="card-body">
                    <h5 class="card-title">Isdin Fotoprotector Fusion Water Magic By Alcaraz 50FPS 50ml</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $789.00</small><br>
                        <strong class="text-danger">Ahora: $515.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_961627-MLM79358040401_092024-O-lucky-gummys-ositos-neon-bolsa-con-1-kg.webp" class="card-img-top" alt="gomitas">
                <div class="card-body">
                    <h5 class="card-title">Lucky Gummys Ositos Neon Bolsa Con 1 Kg</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $160.00</small><br>
                        <strong class="text-danger">Ahora: $108.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container my-5 ml-40 flex items-center gap-4">
    <h2 class="mb-4 fs-4 fw-bold">COMPRA MÁS, PAGA MENOS EN FULL SÚPER</h2>

    <div class="row justify-content-center">
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_937640-MLA43533625117_092020-O.webp" class="card-img-top" alt="whisky">
                <div class="card-body">
                    <h5 class="card-title">Whisky Johnnie Walker Black Label Blended Scotch 750 m</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $1,050.00</small><br>
                        <strong class="text-danger">Ahora: $600.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>

        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_737786-MLU78239362221_082024-O.webp" class="card-img-top" alt="detergente">
                <div class="card-body">
                    <h5 class="card-title">Detergente Líquido Persil Colores Vivos 6.64lt</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $320.00</small><br>
                        <strong class="text-danger">Ahora: $240.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>

        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_858907-MLU71207048722_082023-O.webp" class="card-img-top" alt="papel">
                <div class="card-body">
                    <h5 class="card-title">Papel higiénico Regio Luxury Almond Touch 32 rollos XXL</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $340.00</small><br>
                        <strong class="text-danger">Ahora: $255.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_609095-MLA85129283019_052025-O.webp" alt="crema">
                <div class="card-body">
                    <h5 class="card-title">Crema Hidratante Facia Neutrogena Face Care Intensive Mate 3 en 1 D Pantenol 100g</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $143.00</small><br>
                        <strong class="text-danger">Ahora: $105.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 ml-40 flex items-center gap-4">
    <h2 class="mb-4 fs-4 fw-bold">SEMANA DE DESPENSA EN FULL SÚPER</h2>

    <div class="row justify-content-center">
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_867170-MLA80652331796_112024-O.webp" class="card-img-top" alt="mayonesa">
                <div class="card-body">
                    <h5 class="card-title">Mayonesa Con Jugo De Limones Frasco 1.2 Kg Mccormick</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $165.00</small><br>
                        <strong class="text-danger">Ahora: $111.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>

        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_977119-MLU72835640383_112023-O.webp" class="card-img-top" alt="azucar">
                <div class="card-body">
                    <h5 class="card-title">Azúcar Zulka Morena 1kg</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $40.00</small><br>
                        <strong class="text-danger">Ahora: $24.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>

        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_877699-MLU76835783081_062024-O.webp" class="card-img-top" alt="cafe">
                <div class="card-body">
                    <h5 class="card-title">Café Soluble Nescafé Clásico 200g</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $150.00</small><br>
                        <strong class="text-danger">Ahora: $130.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_795205-MLU74389620597_022024-O.webp" alt="aceite">
                <div class="card-body">
                    <h5 class="card-title">Aceite De Olivo Extra Virgen Gabys Cont. 1 Litro</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $189.00</small><br>
                        <strong class="text-danger">Ahora: $130.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

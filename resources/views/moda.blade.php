<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Moda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwONP5SGLj9DmM5ww2omifwORSkQaFgf9Zyxo6asXG2GkimxG60GgT8jCIsAIOYQqj9qE&usqp=CAU" alt="Imagen 1
  " style="width: 400px; height: 400px; margin-left: 30px;">

    <!-- Imagen 2 -->
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlfq4oEtd6rev9espmy7TCuWR4OpLUZ6twa4sMbACRRQuUb9nJ6hj-gX40bE0WIkisnKM&usqp=CAU"
    alt="Imagen 2" style="width: 400px; height: 400px; margin-left: 70px;">

    </a>
    <br><br><br>

    <p style="text-align: center; font-weight: bold; font-size: 32px; color: #ff69b4; /* rosa claro */
          text-shadow: 2px 2px 4px rgba(255, 182, 193, 0.5);">
      "Lo último en moda, al alcance de un clic"
    </p>

    <h2 class="mb-4 fs-4 fw-bold">Ropa para dama</h2>

    <div class="row justify-content-center">
       <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcROkIBf8BT6x70FAV4Ne4pK5zbRCxNCGa9HrS_oiO4sT8nxdLiRwZffMX1xl7zBZE498FYMMC109BhaWolTPs_SdHpvhfkk_h9NvZyO2HOaRnHPau95H0u91_UQOGkIerP4zYYRQIgTAA&usqp=CAc" class="card-img-top" alt="Vestido">
                <div class="card-body">
                    <h5 class="card-title">Vestido Corto Elegante Corte Envolvente Manga Larga</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $650.00</small><br>
                        <strong class="text-danger">Ahora: $420.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_Q_NP_2X_719955-MLM84490311431_052025-E-sudadera-con-capucha-para-mujer-forro-polar-con-cierre.webp" class="card-img-top" alt="Sudadera">
                <div class="card-body">
                    <h5 class="card-title">Sudadera Con Capucha Para Mujer Forro Polar Con Cierre</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $500.00</small><br>
                        <strong class="text-danger">Ahora: $380.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
       <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_Q_NP_2X_905146-MLM83087226617_032025-E-ensamble-vitka-moda-dama-casual-aide.webp" class="card-img-top" alt="Ensamble">
                <div class="card-body">
                    <h5 class="card-title">Ensamble Vitka Moda Dama Casual Aide</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $350.00</small><br>
                        <strong class="text-danger">Ahora: $230.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_636686-MLM78762347803_082024-O-bota-alta-andrea-para-mujer-con-correo-decorada-cafe.webp" class="card-img-top" alt="Botas">
                <div class="card-body">
                    <h5 class="card-title">Bota Alta Andrea Para Mujer Con Correo Decorada Café</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $1,200.00</small><br>
                        <strong class="text-danger">Ahora: $800.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container my-5 ml-40 flex items-center gap-4">
    <h2 class="mb-4 fs-4 fw-bold">Ropa para caballero</h2>

    <div class="row justify-content-center">
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_Q_NP_2X_821438-MLM85420581319_052025-E-pantalon-jogger-cargo-casual-de-twill-de-algodon-para-hombre.webp" class="card-img-top" alt="Pantalon">
                <div class="card-body">
                    <h5 class="card-title">Pantalón Jogger Cargo Casual De Twill De Algodón Para Hombre</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $600.00</small><br>
                        <strong class="text-danger">Ahora: $380.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>

        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_Q_NP_2X_789726-MLM85157423082_052025-E-playera-polo-para-hombre-manga-corta-porto-blanco.webp" class="card-img-top" alt="Playera">
                <div class="card-body">
                    <h5 class="card-title">Playera Polo Para Hombre Manga Corta Porto Blanco</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $860.00</small><br>
                        <strong class="text-danger">Ahora: $650.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>

        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_Q_NP_2X_971125-MLM84536698361_052025-E-juego-pants-y-sudadera-john-leopard-metal-emblem-casual.webp" class="card-img-top" alt="Juego Pants">
                <div class="card-body">
                    <h5 class="card-title">Juego Pants Y Sudadera John Leopard Metal Emblem Casual</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $1,350.00</small><br>
                        <strong class="text-danger">Ahora: $945.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_Q_NP_2X_964206-MLM74846784882_032024-E-chamarra-cuadra-para-caballero-piel-genuina-de-ovino-cafe.webp" alt="Chamarra">
                <div class="card-body">
                    <h5 class="card-title">Chamarra Cuadra Para Caballero Piel Genuina De Ovino Café</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $2,800.00</small><br>
                        <strong class="text-danger">Ahora: $1,680.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 ml-40 flex items-center gap-4">
    <h2 class="mb-4 fs-4 fw-bold">Moda para la ohana</h2>

    <div class="row justify-content-center">
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_696365-MLM75678939568_042024-O-kit-3-mamelucos-disney-sulley-stitchtigger-a-precio-de-2.webp" class="card-img-top" alt="Mameluco">
                <div class="card-body">
                    <h5 class="card-title">Kit 3 Mamelucos Disney Sulley, Stitch,tigger A Precio De 2</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $989.00</small><br>
                        <strong class="text-danger">Ahora: $715.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>

        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_805897-MLA83900819629_042025-O.webp" class="card-img-top" alt="Mochila">
                <div class="card-body">
                    <h5 class="card-title">Backpack Mochila Morral Maleta Stitch Multicolor St27</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $1,300.00</small><br>
                        <strong class="text-danger">Ahora: $870.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>

        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_934226-MLM81788649447_012025-O-tenis-urbano-stitch-tema-deportivo-lilo-con-llavero-de-regalo.webp" class="card-img-top" alt="Teni">
                <div class="card-body">
                    <h5 class="card-title">Tenis Urbano Stitch Tema Deportivo Lilo Con Llavero De Regalo</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $600.00</small><br>
                        <strong class="text-danger">Ahora: $470.00</strong><br>
                        <span class="text-success">Envío gratis 🟢 FULL</span>
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-8 col-sm-6 col-md-3 mb-8">
            <div class="card card-custom text-center">
                <img src="https://http2.mlstatic.com/D_NQ_NP_860409-MLM84041097853_042025-O-bolsa-crossbody-accesorio-stitch-st40-azul-para-mujer.webp" alt="Bolso">
                <div class="card-body">
                    <h5 class="card-title">Bolsa Crossbody Accesorio Stitch St40 Azul Para Mujer</h5>
                    <p class="card-text">
                        <small class="text-muted">Antes: $1,100.00</small><br>
                        <strong class="text-danger">Ahora: $680.00</strong><br>
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

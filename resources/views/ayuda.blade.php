<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>ayuda</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    .card-custom {
      max-width: 230px;
      margin: auto;
      font-size: 0.9rem;
      transition: transform 0.25s cubic-bezier(.4,2,.6,1), box-shadow 0.25s;
      box-shadow: 0 2px 8px rgba(0,0,0,0.10);
      cursor: pointer;
      border: none;
    }

    .card-custom:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 8px 24px rgba(0,0,0,0.18);
      z-index: 2;
    }

    .card-custom .icon {
      font-size: 3rem;
      color: #0d6efd;
      margin-bottom: 10px;
    }

    h5.card-title {
      font-size: 1rem;
      font-weight: bold;
    }

    .soporte-seccion {
      padding: 3rem 0;
    }

    .soporte-seccion h2 {
      font-weight: bold;
    }

    .info-contacto p {
      margin-bottom: 0.3rem;
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

  <!-- Sección de ayuda y soporte -->
  <section class="container soporte-seccion">
    <h2 class="text-center text-primary mb-4">🛠️ Centro de Ayuda</h2>
    <p class="text-center text-secondary mb-5">¿Tienes dudas o necesitas asistencia? Encuentra aquí respuestas y opciones de contacto.</p>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
      <!-- Tarjetas de ayuda -->
      <div class="col">
        <div class="card card-custom text-center p-3">
          <div class="icon"><i class="fas fa-box-open"></i></div>
          <h5 class="card-title">Estado de mi pedido</h5>
          <p class="card-text">Consulta el seguimiento, envío y entrega de tu compra.</p>
        </div>
      </div>
      <div class="col">
        <div class="card card-custom text-center p-3">
          <div class="icon"><i class="fas fa-credit-card"></i></div>
          <h5 class="card-title">Formas de pago</h5>
          <p class="card-text">Conoce los métodos de pago disponibles y cómo usarlos.</p>
        </div>
      </div>
      <div class="col">
        <div class="card card-custom text-center p-3">
          <div class="icon"><i class="fas fa-undo-alt"></i></div>
          <h5 class="card-title">Devoluciones</h5>
          <p class="card-text">Solicita la devolución de un producto o el reembolso de tu dinero.</p>
        </div>
      </div>
      <div class="col">
        <div class="card card-custom text-center p-3">
          <div class="icon"><i class="fas fa-user-shield"></i></div>
          <h5 class="card-title">Seguridad</h5>
          <p class="card-text">Aprende cómo proteger tu cuenta y tus datos personales.</p>
        </div>
      </div>
      <div class="col">
        <div class="card card-custom text-center p-3">
          <div class="icon"><i class="fas fa-comments"></i></div>
          <h5 class="card-title">Atención al cliente</h5>
          <p class="card-text">Comunícate con nuestro equipo para recibir ayuda personalizada.</p>
        </div>
      </div>
    </div>

    <!-- Información de contacto -->
    <div class="info-contacto text-center mt-5">
      <h4 class="fw-semibold">📩 Contacto directo</h4>
      <p><strong>Correo:</strong> ayuda@tusitio.com</p>
      <p><strong>Teléfono:</strong> +52 55 1234 5678</p>
      <p><strong>Horario de atención:</strong> Lunes a Viernes, 9:00 a 18:00</p>
    </div>

    <!-- Formulario de contacto -->
    <div class="mt-5">
      <h4 class="text-center fw-semibold mb-4">📝 Envíanos tu consulta</h4>
      <form class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre completo:</label>
          <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre" required>
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo electrónico:</label>
          <input type="email" class="form-control" id="correo" placeholder="tuemail@ejemplo.com" required>
        </div>
        <div class="mb-3">
          <label for="pedido" class="form-label">Número de pedido (opcional):</label>
          <input type="text" class="form-control" id="pedido" placeholder="Ej: 123456789">
        </div>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje o problema:</label>
          <textarea class="form-control" id="mensaje" rows="4" placeholder="Describe tu problema o pregunta" required></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary px-4">Enviar mensaje</button>
        </div>
      </form>
    </div>
   <!-- Preguntas Frecuentes -->
<div class="mt-5">
  <h4 class="text-center fw-semibold mb-4">❓ Preguntas Frecuentes</h4>
  <div class="accordion mx-auto" id="faqAccordion" style="max-width: 800px;">

    <!-- Pregunta 1 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
          ¿Cómo puedo hacer seguimiento a mi pedido?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Para seguir tu pedido, ve a la sección <strong>“Mis compras”</strong> en tu cuenta. Haz clic en el producto y encontrarás el estado actual del envío, el número de guía y un enlace para rastrearlo en la paquetería correspondiente.
        </div>
      </div>
    </div>

    <!-- Pregunta 2 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
          ¿Qué hago si mi producto llegó dañado?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Si recibiste un producto roto, defectuoso o diferente al que pediste, dirígete a <strong>“Mis compras”</strong>, selecciona el artículo y elige la opción <em>"Devolver o reclamar"</em>. Tendrás que subir fotos del producto para procesar la devolución rápidamente.
        </div>
      </div>
    </div>

    <!-- Pregunta 3 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
          ¿Cuáles son las formas de pago aceptadas?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Aceptamos tarjetas de crédito y débito (Visa, MasterCard, American Express), pagos en efectivo en OXXO y 7-Eleven, transferencias bancarias, Mercado Pago, y créditos disponibles en tu cuenta. Puedes ver todas las opciones al finalizar tu compra.
        </div>
      </div>
    </div>

    <!-- Pregunta 4 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
          ¿Cómo contacto al servicio al cliente?
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Puedes contactarnos a través del formulario de esta misma página, enviando un correo a <strong>ayuda@tusitio.com</strong> o llamando al <strong>+52 55 1234 5678</strong>. Nuestro horario de atención es de lunes a viernes de 9:00 a 18:00.
        </div>
      </div>
    </div>

    <!-- Pregunta 5 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
          ¿Cómo cancelo una compra que ya pagué?
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Si aún no ha sido enviado tu pedido, puedes cancelarlo desde “Mis compras”. Si ya fue enviado, deberás esperar a recibirlo y luego iniciar un proceso de devolución. En ambos casos, tu dinero será reembolsado de forma segura.
        </div>
      </div>
    </div>

    <!-- Pregunta 6 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
          ¿Qué hago si olvidé mi contraseña?
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          En la pantalla de inicio de sesión, haz clic en <em>"¿Olvidaste tu contraseña?"</em>. Luego ingresa tu correo electrónico y te enviaremos un enlace para restablecerla. Si no ves el correo, revisa tu bandeja de spam o promociones.
        </div>
      </div>
    </div>

  </div>
</div>

</section>

    <!-- Aquí iría el acordeón o cualquier contenido -->

    <!-- Bootstrap JS necesario para que funcionen los componentes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


</body>
</html>



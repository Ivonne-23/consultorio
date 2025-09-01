<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonrisa Perfecta | Consultorio Dental</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        /* Estilos Generales */
        body {
            font-family: 'Arial', sans-serif;
        }
        .hero {
            background: url('https://source.unsplash.com/1600x900/?dental,clinic') center/cover no-repeat;
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
        .hero .btn {
            font-size: 1.2rem;
            padding: 10px 30px;
        }
        .icon-box {
            font-size: 3rem;
            color: #007bff;
        }
        .testimonio {
            background-color: #f8f9fa;
            padding: 50px;
        }
        .contacto {
            background: #007bff;
            color: white;
            padding: 50px;
        }
        footer {
            background: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Sección Principal -->
<header class="hero d-flex flex-column justify-content-center align-items-center">
    <h1>Tu Sonrisa, Nuestra Prioridad</h1>
    <p class="lead">Ofrecemos los mejores tratamientos dentales con tecnología de punta.</p>
    <a href="#contacto" class="btn btn-light btn-lg">¡Agenda tu cita ahora!</a>
</header>

<!-- Sección de Servicios -->
<section class="container text-center my-5">
    <h2 class="mb-4">Nuestros Servicios</h2>
    <div class="row">
        <div class="col-md-4">
            <i class="bi bi-heart-pulse icon-box"></i>
            <h4>Revisión Dental</h4>
            <p>Chequeos completos para cuidar tu salud bucal.</p>
        </div>
        <div class="col-md-4">
            <i class="bi bi-emoji-smile icon-box"></i>
            <h4>Blanqueamiento</h4>
            <p>Sonrisa más blanca y radiante con nuestros tratamientos.</p>
        </div>
        <div class="col-md-4">
            <i class="bi bi-shield-plus icon-box"></i>
            <h4>Ortodoncia</h4>
            <p>Corrección de dientes y mordida con brackets modernos.</p>
        </div>
    </div>
</section>

<!-- Sección de Testimonios -->
<section class="testimonio text-center">
    <h2 class="mb-4">Lo que dicen nuestros pacientes</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="fst-italic">"Un servicio increíble, mi sonrisa nunca había estado mejor."</p>
                <strong>- Juan Pérez</strong>
            </div>
            <div class="col-md-4">
                <p class="fst-italic">"Profesionales muy amables y atentos. 100% recomendados."</p>
                <strong>- María Gómez</strong>
            </div>
            <div class="col-md-4">
                <p class="fst-italic">"Rápido, seguro y con la mejor tecnología. ¡Gracias!"</p>
                <strong>- Ricardo Fernández</strong>
            </div>
        </div>
    </div>
</section>
<section id="contacto" class="contacto text-center">
    <h2 class="mb-4">Agenda tu Cita</h2>
    <p>Déjanos tus datos y nos pondremos en contacto contigo.</p>
    <div class="container">
        <form class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nombre Completo" required>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Correo Electrónico" required>
            </div>
            <div class="col-12">
                <input type="tel" class="form-control" placeholder="Teléfono" required>
            </div>
            <div class="col-12">
                <textarea class="form-control" rows="4" placeholder="Mensaje"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-light btn-lg">Enviar</button>
            </div>
        </form>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Sonrisa Perfecta | Todos los derechos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

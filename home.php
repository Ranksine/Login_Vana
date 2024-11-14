<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio de Diseño Gráfico</title>
    <style>
        /* Estilos básicos para el cuerpo */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Estilos para el header */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        /* Estilos de la sección de presentación */
        .intro {
            text-align: center;
            padding: 50px 20px;
            background-color: #e9ecef;
        }

        .intro h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .intro p {
            font-size: 1.1em;
            max-width: 600px;
            margin: auto;
        }

        /* Estilos de la galería */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .gallery img {
            max-width: 100%;
            height: auto;
            margin: 10px;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        /* Estilos de la sección de contacto */
        .contact {
            padding: 40px 20px;
            background-color: #333;
            color: #fff;
            text-align: center;
        }

        .contact h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .contact p {
            font-size: 1.1em;
        }

        /* Estilos del pie de página */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #222;
            color: #aaa;
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
        <h1>Portafolio de Diseño Gráfico</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#galeria">Galería</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección de introducción -->
    <section id="inicio" class="intro">
        <h2>Bienvenidos a Mi Portafolio</h2>
        <p>Explora mi colección de proyectos de diseño gráfico. Desde ilustraciones digitales hasta branding visual, aquí podrás ver una muestra de mis habilidades y mi estilo de diseño.</p>
    </section>

    <!-- Galería de trabajos -->
    <section id="galeria" class="gallery">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfiCqjV-b10E5onw3rKRmXXnwZd5UsqliXig&s" alt="Proyecto 1">
        <img src="../css/img/wp.jpg" alt="Proyecto 2" width="10%">
        <img src="ejemplo3.jpg" alt="Proyecto 3">
        <img src="ejemplo4.jpg" alt="Proyecto 4">
        <img src="ejemplo5.jpg" alt="Proyecto 5">
        <img src="ejemplo6.jpg" alt="Proyecto 6">
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="contact">
        <h2>Contáctame</h2>
        <p>Si estás interesado en trabajar juntos o tienes alguna pregunta, no dudes en ponerte en contacto.</p>
        <p>Email: tuemail@ejemplo.com</p>
        <p>Teléfono: +123 456 7890</p>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 Portafolio de Diseño Gráfico. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

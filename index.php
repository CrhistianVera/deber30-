<?php
// index.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Christian Vera Rodríguez - Sitio Personal</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <span>CVR</span>
        </div>
        <nav class="nav">
            <a href="index.php">Inicio</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </div>
</header>

<main>
    <!-- Sección Hero -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-text">
                <h1>VERA RODRÍGUEZ CHRISTIAN ORLANDO</h1>
                <p class="subtitulo">
                    Jefe de FERROCENTE S.A. · Estudiante de Ingeniería en TICs · UTPL
                </p>
                <p>
                    Soy un profesional con más de tres décadas de experiencia en gestión empresarial
                    y liderazgo de equipos. Actualmente combino mi rol como jefe de una empresa
                    de relevancia en el sector de materiales de construcción en Ecuador, con mi
                    formación académica en la Universidad Técnica Particular de Loja (UTPL).
                </p>
                <a class="btn-principal" href="contacto.php">Enviarme un mensaje</a>
            </div>
            <div class="hero-foto">
                <img src="img/foto-perfil.jpg" alt="Foto de Christian Vera" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <!-- Sección Sobre mí / Biografía -->
    <section class="seccion">
        <div class="container">
            <h2>Biografía</h2>
            <p>
                Soy <strong>VERA RODRÍGUEZ CHRISTIAN ORLANDO</strong>, tengo <strong>50 años</strong> 
                y actualmente me desempeño como <strong>jefe de una empresa importante en Ecuador 
                llamada FERROCENTE S.A.</strong>, dedicada a la comercialización de materiales de
                construcción y soluciones integrales para proyectos de infraestructura.
            </p>
            <p>
                A lo largo de mi trayectoria he liderado equipos multidisciplinarios, impulsando la 
                mejora continua, la innovación en procesos y la implementación de tecnologías que 
                optimicen la toma de decisiones. Mi interés por la transformación digital y el uso 
                estratégico de la información me motivó a iniciar mis estudios en la 
                <strong>Ingeniería en Tecnologías de la Información</strong> en la 
                <strong>UTPL</strong>.
            </p>
            <p>
                Mi objetivo es integrar la experiencia empresarial con las competencias tecnológicas
                para desarrollar soluciones modernas, seguras y escalables que aporten valor real 
                tanto a la organización como a nuestros clientes.
            </p>
        </div>
    </section>

    <!-- Sección Hobbies / Intereses -->
    <section class="seccion fondo-suave">
        <div class="container">
            <h2>Hobbies e intereses</h2>
            <div class="grid-3">
                <div class="card">
                    <h3>Tecnología e innovación</h3>
                    <p>
                        Disfruto aprender sobre nuevas tendencias en transformación digital,
                        ciberseguridad, computación en la nube y desarrollo de software.
                    </p>
                </div>
                <div class="card">
                    <h3>Lectura y formación continua</h3>
                    <p>
                        Me interesan los libros de liderazgo, gestión de proyectos, finanzas
                        y desarrollo personal. Considero que la formación nunca termina.
                    </p>
                </div>
                <div class="card">
                    <h3>Familia y actividades al aire libre</h3>
                    <p>
                        Valoro el tiempo en familia y disfruto de actividades al aire libre,
                        especialmente en entornos naturales de Ecuador.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Llamado a la acción -->
    <section class="seccion">
        <div class="container cta">
            <h2>¿Quieres ponerte en contacto?</h2>
            <p>
                Si deseas comunicarte conmigo para temas profesionales, proyectos académicos 
                o colaboraciones, puedes enviarme un mensaje a través del formulario de contacto.
            </p>
            <a class="btn-secundario" href="contacto.php">Ir al formulario de contacto</a>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> - Sitio personal de Christian Vera Rodríguez</p>
    </div>
</footer>
</body>
</html>

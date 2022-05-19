<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0 minimum-scale=1.0">
        <title>Mi portafolio</title>
        <link rel="stylesheet" type="text/css" href="css/styles.min.css">
    </head>
    <body>
        <!-- HEADER -->
        <header id="flex-header">
            <img class="image" src="img/zabieru.png" alt="foto">
            <h1>Javier López Carretero</h1>
            <p class="nickname">Zabieru</p>

            <!-- NAVBAR -->
            <nav id="navbar">
                <a href="#flex-header"><i class="fa-solid fa-house"></i> Inicio</a>
                <a href="#about-me"><i class="fa-solid fa-landmark"></i> Sobre mi</a>
                <a href="#portfolio"><i class="fa-solid fa-clipboard-list"></i> Portafolio</a>
                <a href="#contact"><i class="fa-solid fa-envelope-circle-check"></i></i> Contacto</a>
            </nav>
        </header>

        <!-- SECCIÓN SOBRE MI. -->
        <section id="about-me">
            <h1 class="section-title">Sobre mi</h1>
            <p>
                ¡Hola! Me llamo Javier y estoy estudiando DAW (Desarrollo de Aplicaciones Web)
            </p>
            <p>
                Tengo 21 años y vivo en Ciudad Real Castilla-La Mancha España
            </p>
            <p>
                Esta es mi página portfolio personal en la que publicaré los proyectos que
                iré realizando a lo largo de mi vida cómo desarrollador web.
            </p>
            <div class="skills-container">
                <h2>Tecnologias con las que he trabajado</h2>
                <h3>Lenguajes</h3>
                <div class="skills">
                    <img src="img/html5-logo.png" alt="HTML">
                    <img src="img/css3.logo.png" alt="CSS">
                    <img src="img/JavaScript-logo.png" alt="JAVASCRIPT">
                    <img src="img/php-logo.png" alt="PHP">
                    <img src="img/java-logo.png" alt="JAVA">
                </div>
                <h3>Frameworks</h3>
                <div class="skills">
                    <img src="img/bootstrap-logo.png" alt="bootstrap">
                    <img src="img/jquery-logo.png" alt="jquery">
                    <img src="img/laravel-logo.png" alt="laravel">
                </div>
                <h3>IDES</h3>
                <div class="skills">
                    <img src="img/eclipse-logo.png" alt="eclipse">
                    <img src="img/netbeans-logo.png" alt="netbeans">
                    <img src="img/ij-logo.png" alt="ij">
                    <img src="img/vscode-logo.png" alt="vscode">
                </div>
                <h3>Otros</h3>
                <div class="skills">
                    <img src="img/photoshop-logo.png" alt="photoshop">
                </div>
            </div>
            <a href="ejemplo.txt" download="ejemplo.txt" class="download-button"><i class="fa-solid fa-download"></i> Descarga mi curriculum aquí.</a>
        </section>

        <!-- SECCIÓN PORTAFOLIO -->
        <section id="portfolio">
            <h1 class="section-title-black">Mis proyectos</h1>
            <div class="projects">
                <div id="project-1" class="project-box project-1">
                    <h3>Mi página portafolio personal</h3>
                    <p id="description-project" class="description-project">
                        Una página que creé que sirve para explicar un poco sobre mi, las
                        tecnologias con las que trabajo, los proyectos que he hecho, etc.
                    </p>
                    <a href="https://github.com/zabieru363/Portafolio" target="blank"><i class="fa-brands fa-github"></i> Ver proyecto</a>
                </div>
            </div>
        </section>

        <!-- SECCIÓN CONTACTO -->
        <section id="contact">
            <h1 class="section-title">Contacto</h1>
            <form class="contact-form" name="contact-form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
                <label for="name">Tu nombre</label>
                <input type="text" name="name" id="name_box" placeholder="Ej: Antonio Garcia">

                <label for="email">Tu email</label>
                <input type="email" name="email" id="email_box" placeholder="Ej: alguien@gmail.com">

                <label for="message">¿Que quieres preguntarme?</label>
                <textarea name="message" id="message_box" cols="60" rows="10" placeholder="Dudas, cuestiones, etc."></textarea>

                <input class="send-btn" type="submit" name="Send" value="Enviar mensaje">
            </form>
        </section>

        <!-- FOOTER -->
        <footer>
            <p class="copyrigth">
                Powered by Zabieru &copy; <?= date("Y") ?>
            </p>
            <a href="mailto:zabierujlc@gmail.com"><i class="fa-solid fa-envelope"></i> zabierujlc@gmail.com</a>
            <a href="https://www.instagram.com/zabieru.exe/" target="blank"><i class="fa-brands fa-instagram"></i> @zabieru.exe</a>
            <a href="https://twitter.com/Zabieru222" target="blank"><i class="fa-brands fa-twitter"></i> Zabieru222</a>
        </footer>

        <!-- ARCHIVOS DE JAVASCRIPT -->
        <script src="js/showDescription.js"></script>

        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/833d921ab7.js" crossorigin="anonymous"></script>
    </body>
</html>
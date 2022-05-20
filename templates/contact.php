<?php
    require_once "app/sendMail.php";
?>
<!-- SECCIÓN CONTACTO -->
<section id="contact">
    <h1 class="section-title">Contacto</h1>
    <form class="contact-form" name="contact-form" method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <label for="name">Tu nombre</label>
        <input type="text" name="name" id="name_box" placeholder="Ej: Antonio Garcia">

        <label for="email">Tu email</label>
        <input type="email" name="email" id="email_box" placeholder="Ej: alguien@gmail.com">

        <label for="message">¿Que quieres preguntarme?</label>
        <textarea name="message" id="message_box" cols="60" rows="10" placeholder="Dudas, cuestiones, etc."></textarea>

        <input class="send-btn" type="submit" name="Send" value="Enviar mensaje">
        <span class="<?=$class?>"><?=$errorMessage?></span>
    </form>
</section>
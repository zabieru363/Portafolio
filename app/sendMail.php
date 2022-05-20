<?php
    $errorMessage = "";

    # Variable para mostrar si ha tenido exito la operación.
    $done = false;
    # Variable para saber que estilos hay que aplicar en el mensaje.
    $class = "";

    if(isset($_POST["Send"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        # Funciones para validar los campos.
        function validateName($name)
        {
            $valid = true;

            if(empty($name) || preg_match("/[0-9]/", $name))
            {
                $valid = false;
            }

            return $valid;
        }

        function validateEmail($email)
        {
            $valid = true;

            if(empty($email) || !filter_var(FILTER_VALIDATE_EMAIL))
            {
                $valid = false;
            }

            return $valid;
        }

        function validateMessage($message)
        {
            $valid = true;

            if(empty($message))
            {
                $valid = false;
            }

            return $valid;
        }

        function checkAll($name, $email, $message, $done)
        {
            if(validateName($name) && validateEmail($email) && validateMessage($message))
            {
                $done = true;
            }

            return $done;
        }

        $done = checkAll($name, $email, $message, $done);

        if($done)
        {
            $to = "zabierujlc@gmail.com";
            $subject = "Mensaje de la página portafolio";
            $mailMessage = "Nombre: $name\n Email: $email\n Mensaje: $message";

            if(mail($to,$subject,$mailMessage, $email))
            {
                $errorMessage = "¡Mensaje enviado!";
                $class = "successfully";
            }
            else
            {
                $errorMessage = "Algo salió mal";
                $class = "error";
            }
        }
        else
        {
            $errorMessage = "Datos del formulario incorrectos.";
            $class = "error";
        }
    }
?>
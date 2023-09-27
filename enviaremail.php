<?php
            $nombre= $_POST['nombre'];
            $number=$_POST['number'];
            $email=$_POST['email'];
            $message=$_POST['message'];
            $destinatario="presenttdreaming@gmail.com";
            $asunto="CONTACTO DE CLIENTE";
            $carta = "De: $nombre \n";
            $carta .= "Correo: $email \n";
            $carta .= "mensaje: $message \n";

            mail($destinatario,$asunto, $carta);
            header('Location:envioexitoso.php')




    ?> 
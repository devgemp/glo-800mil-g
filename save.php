<?php

require('./database/connection.php');

// TODO: Validar que los campos estén completos cuando se envían...
if (isset($_POST['save'])) {
    $nombres   = trim($_POST['nombres']);
    $apellidos = trim($_POST['apellidos']);
    $edad      = $_POST['edad'];
    $sexo      = $_POST['sexo'];
    $correo    = $_POST['correo'];
    $telefono  = $_POST['telefono'];
    $importe   = $_POST['importe'];
    $marca     = 'GLOBAL FINANCIAL SYSTEM';
    $medio     = 'GOOGLE';
    $fecha     = date('Y-m-d');
    $landing   = 'glo-800mil-g';

    /**
     * * El correo del cliente solo debe de existir una sola vez en la DB
     * * independientemente de que se registre desde otro landing o marca
     */
    $q = "SELECT COUNT(*) as contar from cliente where CORREO='$correo'";
    $consulta = mysqli_query($connection, $q);
    $array = mysqli_fetch_array($consulta);

    if ($array['contar'] > 0) {
        echo "
        <script>
            alert('Tus datos han sido procesados, en breve nos comunicaremos contigo');
            window.location = 'index.php';
        </script>
    ";
    } else {
        $query = "INSERT INTO cliente(NOMBRE, APELLIDOS, EDAD, SEXO, CORREO, TELEFONO, IMPORTE, MARCA, MEDIO, FECHA, LANDING) VALUES ('$nombres', '$apellidos', '$edad', '$sexo', '$correo', '$telefono', '$importe', '$marca', '$medio', '$fecha', '$landing')";

        /**
         * * Email con datos del cliente para el gerente
         * * contacto@globalfinancials.com.mx
         */
        $header  = "From web@globalfinancials.com.mx" . "\r\n";
        $header .= "Reply-To: web@globalfinancials.com.mx" . "\r\n";

        /**
         * * Datos del email
         */
        $email  = "contacto@globalfinancials.com.mx";
        $asunto = "Nuevo Contacto";

        $msg  = 'Nombre Completo : ' . $nombres . "\n";
        $msg .= 'Apellidos: ' . $apellidos . "\n";
        $msg .= 'Correo Electronico: ' . $correo . "\n";
        $msg .= 'Telefono : ' . $telefono . "\n";
        $msg .= 'Importe : ' . $importe . "\n";
        $msg .= 'Medio : ' . $medio . "\n";
        $msg .= 'Landing : ' . $landing;

        // Enviar email
        $mail = mail($email, $asunto, $msg, $header);

        $result = mysqli_query($connection, $query);

        if (!$result) {
            // header('Location: http://localhost/glo-800mil-g/success.php'); // <- Comentar para producción
            header('Location: https://globalfinancials.com.mx/glo-800mil-g/success.php'); // <- Descomentar para producción
        }

        // header('Location: http://localhost/glo-800mil-g/success.php'); // <- Comentar para producción
        header('Location: https://globalfinancials.com.mx/glo-800mil-g/success.php'); // <- Descomentar para producción
    }
}

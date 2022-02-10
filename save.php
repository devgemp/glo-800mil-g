<?php

/** ------------- Comentar para producción ----------- */
// $server = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'gempres1_tests';

/** ---------- Descomentar para producción ----------- */
$server = '209.59.139.98';
$username = 'gempres1_root';
$password = 'Dantesinferno064';
$database = 'gempres1_gemp';

$connection = mysqli_connect($server, $username, $password, $database);
mysqli_set_charset($connection, 'utf8');

if (isset($_POST['save'])) {
    $nombres   = trim($_POST['nombres']);
    $apellidos = trim($_POST['apellidos']);
    $edad      = $_POST['edad'];
    $sexo      = $_POST['sexo'];
    $correo    = $_POST['correo'];
    $telefono  = $_POST['telefono'];
    $importe   = $_POST['importe'];
    $marca     = $_POST['marca'];
    $medio     = $_POST['medio'];
    $fecha     = $_POST['fecha'];
    $landing   = $_POST['landing'];

    $q = "SELECT COUNT(*) as contar from cliente where CORREO='$correo' and LANDING='$landing'";

    $consulta = mysqli_query($connection, $q);
    $array = mysqli_fetch_array($consulta);

    if ($array['contar'] > 0) {
        echo "
      <script>
        window.location = 'index.php';
      </script>
    ";
    } else {
        $query = "INSERT INTO cliente(NOMBRE, APELLIDOS, EDAD, SEXO, CORREO, TELEFONO, IMPORTE, MARCA, MEDIO, FECHA, LANDING) VALUES ('$nombres', '$apellidos', '$edad', '$sexo', '$correo', '$telefono', '$importe', '$marca', '$medio', '$fecha', '$landing')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            // header('Location: http://localhost/glo-800mil-g/success.php'); // <- Comentar para producción
            header('Location: https://globalfinancials.com.mx/glo-800mil-g/success.php'); // <- Descomentar para producción
        }

        // header('Location: http://localhost/glo-800mil-g/success.php'); // <- Comentar para producción
        header('Location: https://globalfinancials.com.mx/glo-800mil-g/success.php'); // <- Descomentar para producción
    }
}

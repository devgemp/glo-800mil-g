<?php

/** ------------- Comentar para producción ----------- */
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'gempres1_tests';

/** ---------- Descomentar para producción ----------- */
// $server = '209.59.139.98';
// $username = 'gempres1_root';
// $password = 'Dantesinferno064';
// $database = 'gempres1_gemp';

$connection = mysqli_connect($server, $username, $password, $database);
mysqli_set_charset($connection, 'utf8');

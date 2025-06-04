<?php

// dados da conexão
$remotehost = '10.10.230.213';
$user = 'senac';
$pass = 'Jovem2025';
$connection = ssh2_connect($remotehost, '22');
if (ssh2_auth_password($connection, $user,$pass)) {
    echo "Authentication Successful!\n";
} else {
    die('Authentication Failed...');
}

?>
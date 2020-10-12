<?php
    $host = 'localhost';
    $db = 'pabw';
    $table = 'Mahasiswas';
    $user = 'root';
    $pass = '';

    $sql = mysqli_connect('localhost','root','','pabw');
    
    if (!$sql) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
?>
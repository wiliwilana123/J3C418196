<?php

    include 'conn.php';
    $nim = $_GET['nim'];
    
    $query = "DELETE FROM Mahasiswas WHERE Nim='".$nim."'";
    //mysqli_query($sql, $query);
    $stmt = mysqli_prepare($sql, "DELETE FROM Mahasiswas WHERE Nim=?");
    mysqli_stmt_bind_param($stmt, 's', $nim);
    $result = mysqli_stmt_execute($stmt);

    if ($result){
        header("location:index.php");
    }else{
        echo "Gagal saat mengupdate data: ".mysqli_error($sql);
    }
?>
<?php

    include 'conn.php';
    $nim = $_POST['nim_hidden'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis-kelamin'];
    $agama = $_POST['agama'];
    $olahraga = $_POST['olahraga-favorit'];

    if ($nim == "" or $nama == "" or $jk == "" or $agama == "" or $olahraga == ""){
        echo 'isi data dengan lengkap';
        echo "<br><a href='form_edit.php?nim=".$nim."'>kembali</a>";
    }else{
        //using prepare statement to prevent sql injection
        $stmt = mysqli_prepare($sql,"UPDATE Mahasiswas SET Nama=?, Agama=?, Jenis_kelamin=?, Olahraga_favorit=? WHERE Nim=?");
        mysqli_stmt_bind_param($stmt,'sssss',$nama,$agama,$jk,$olahraga,$nim);
        $result = mysqli_stmt_execute($stmt);
        
        if ($result){
            header("location:index.php");
        }else{
            echo "Gagal saat mengupdate data: ".mysqli_error($sql);
        }
    }
?>
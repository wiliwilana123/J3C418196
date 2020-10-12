<?php

    include 'conn.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis-kelamin'];
    $agama = $_POST['agama'];
    $olahraga = $_POST['olahraga-favorit'];

    $namaFile = $_FILES['pas_foto']['name'];
    $namaSementara = $_FILES['pas_foto']['tmp_name'];
    $dirUpload = "upload/";
    $array = explode('.', $_FILES['pas_foto']['name']);
    $extension = end($array);
    $namaB = $nim.".".$extension;
    $namaBaru = rename($namaFile, $namaB);
    $upload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

    if ($upload){
        echo "berhasil: ".$namaFile;
    }else{
        echo "gagal";
    }

    /*

    if ($nim == "" or $nama == "" or $jk == "" or $agama == "" or $olahraga == "" ){
        echo 'isi data dengan lengkap';
        echo "<br><a href='add.html'>kembali</a>";
    }else{
        //Prepared statement
        $stmt = mysqli_prepare($sql, "INSERT INTO Mahasiswas VALUES(?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt,'sssss',$nim,$nama,$agama,$jk,$olahraga);
        $result = mysqli_stmt_execute($stmt);

        if ($result){
            header("location:index.php");
        }else{
            echo "Gagal saat meng-insert data: ".mysqli_error($sql)."<a href='index.php>back to main page</a><br>'";
    
        } 
    }*/
?>
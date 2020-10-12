<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <?php
      include "conn.php";
      $nim = $_GET['nim'];
      
      $nama = "";
      $agama = "";
      $jk = "";
      $olahraga = "";

      $query = "SELECT * FROM Mahasiswas WHERE Nim='".$nim."'";
      $result = mysqli_query($sql, "SELECT * FROM Mahasiswas WHERE Nim='$nim'");

      /*Prepared statement
      $stmt = mysqli_prepare($sql, "SELECT * FROM Mahasiswas WHERE Nim=?");
      echo mysqli_stmt_bind_param($stmt, 's', $nim);
      $result = mysqli_stmt_execute($stmt);*/

      if ($result){
        while($data = mysqli_fetch_array($result)){
          $nama = $data['Nama'];
          $agama = $data['Agama'];
          $jk = $data['Jenis_kelamin'];
          $olahraga = $data['Olahraga_favorit'];
        }
      }else{
        echo "Gagal saat menampilkan data: ".mysqli_error($sql);
      }
      

    ?>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Kulub hui</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    <div class="m-5">
        <div class="py-4 d-flex justify-content-end align-items-center">
            <h2 class="mr-auto">Edit Data Mahasiswa</h2>
        </div>
        <div class="s-4">
        <form action="update.php" method="POST">
            <div class="form-group row">
              <label for="nim" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim; ?>" disabled>
                <input type="hidden" id="nim_hidden" name="nim_hidden" value="<?php echo $nim; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis-kelamin" id="radio-laki" value="L" <?php if($jk == "L"){echo "checked";} ?> >
                    <label class="form-check-label" for="radio-laki">
                      Laki-Laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis-kelamin" id="radio-perempuan" value="P" <?php if($jk == "P"){echo "checked";} ?>>
                    <label class="form-check-label" for="radio-perempuan">
                      Perempuan
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col-sm-2">Agama</div>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1" name="agama" value="Islam" <?php if($agama == "Islam"){echo "checked";} ?>>
                  <label class="form-check-label" for="gridCheck1">
                    Islam
                  </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2" name="agama" value="Kristen" <?php if($agama == "Kristen"){echo "checked";} ?>>
                    <label class="form-check-label" for="gridCheck2">
                      Kristen
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3" name="agama" value="Budha" <?php if($agama == "Budha"){echo "checked";} ?>>
                    <label class="form-check-label" for="gridCheck3">
                      Budha
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3" name="agama" value="Hindu" <?php if($agama == "Hindu"){echo "checked";} ?>>
                    <label class="form-check-label" for="gridCheck3">
                      Hindu
                    </label>
                </div>
              </div>
              <script>
                $('input[type="checkbox"]').on('change', function() {
                  $('input[type="checkbox"]').not(this).prop('checked', false);
                });
                </script>
            </div>
            <fieldset class="form-group">
            <div class="row">
                <label for="exampleFormControlSelect2">OLahraga Favorit : </label>
                <select multiple class="form-control" id="exampleFormControlSelect2" name="olahraga-favorit">
                  <option value="Jogging" <?php if($olahraga == "Jogging"){echo "selected";} ?>>Jogging</option>
                  <option value="Sepak Bola" <?php if($olahraga == "Sepak Bola"){echo "selected";} ?>>Sepak Bola</option>
                  <option value="Badminton" <?php if($olahraga == "Badminton"){echo "selected";} ?>>Badminton</option>
                  <option value="Renang" <?php if($olahraga == "Renang"){echo "selected";} ?>>Renang</option>
                  <option value="Voli" <?php if($olahraga == "Voli"){echo "selected";} ?>>Voli</option>
                </select>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          </form>
          </div>
    </div>
</body>
</html>
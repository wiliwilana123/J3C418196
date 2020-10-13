<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Tambah Mahasiswa</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">Kulub hui</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
    <div class="m-5">
        <div class="py-4 d-flex justify-content-end align-items-center">
            <h2 class="mr-auto">Tambah Data Mahasiswa</h2>
        </div>
        <div class="s-4">
        <form action="<?php echo base_url('Mahasiswa/store')?>" method="POST">
            <div class="form-group row">
              <label for="nim" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nim" name="nim">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="L">
                    <label class="form-check-label" for="gridRadios1">
                      Laki-Laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="P">
                    <label class="form-check-label" for="gridRadios2">
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
                  <input class="form-check-input" type="checkbox" id="gridCheck1" name="agama" value="Islam">
                  <label class="form-check-label" for="gridCheck1">
                    Islam
                  </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2" name="agama" value="Kristen">
                    <label class="form-check-label" for="gridCheck2">
                      Kristen
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3" name="agama" value="Budha">
                    <label class="form-check-label" for="gridCheck3">
                      Budha
                    </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck3" name="agama" value="Hindu">
                  <label class="form-check-label" for="gridCheck3">
                    Hindu
                  </label>
              </div>
              </div>
            </div>
            <fieldset class="form-group">
            <div class="row">
                <label for="exampleFormControlSelect2">OLahraga Favorit : </label>
                <select multiple class="form-control" id="exampleFormControlSelect2" name="olahraga-favorit">
                  <option value="Jogging">Jogging</option>
                  <option value="Sepak Bola">Sepak Bola</option>
                  <option value="Badminton">Badminton</option>
                  <option value="Renang">Renang</option>
                  <option value="Voli">Voli</option>
                </select>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </div>
          </form>
          </div>
    </div>
</body>
</html>
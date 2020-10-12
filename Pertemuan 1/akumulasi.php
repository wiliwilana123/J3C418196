<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic">
        <link rel="stylesheet" href="style.default.css" id="theme-stylesheet">

        <title>Praktikum 1 : Akumulasi</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <h1> Akumulasi </h1>
            </div>
            <div class="row">
                <p> Di pertama ini, kita membuat web untuk melakukan penjumlahan dengan fitur history </p>
            </div>
            <br>
            <div class="row">
                <!-- Form -->
                <form method="GET">
                    <input type="number" name="bil"/>
                    <input type="submit" value="jumlahkan"/>
                    <p> History </p>
                    <?php
                        if (isset($_GET['bil'])){
                            if (isset($_GET['bils']))
                                $data = $_GET['bils'];
                            else
                                $data = array();

                            array_push($data, $_GET['bil']);
                            foreach($data as $x)
                                echo '<input type="hidden" name="bils[]" value="'.$x.'"/>';
                            echo "<p>";
                            $sum = 0;
                            foreach($data as $x){
                                echo "$x <br>";
                                $sum += $x; 
                            }
                            echo "----------- + <br> $sum";
                        //print_r($data);
                        }
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>

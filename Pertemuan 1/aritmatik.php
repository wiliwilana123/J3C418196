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

        <title>Praktikum 1: Aritmatik</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <h1> Aritmatik </h1>
            </div>
            <div class="row">
                <p> Di pertama ini, kita membuat web kalkulator sederhana </p>
            </div>
            <div class="row">
            <form action="aritmatik.php" method="GET">
                <input type="number" name="bil1"
                    <?php
                        if(isset($_GET['bil1']))
                            echo 'value="'.$_GET['bil1'].'"';
                    ?>
                />
                <select name="opr">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="x">x</option>
                </select>
                <input type="number" name="bil2" 
                    <?php
                        if(isset($_GET['bil2']))
                            echo 'value="'.$_GET['bil2'].'"';
                    ?>
                />
                <input type="submit" value="=" name="sub" />
                <?php
                    if(isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])){
                        switch($_GET['opr']){
                            case '+': $hsl = $_GET['bil1'] + $_GET['bil2']; break;
                            case '-': $hsl = $_GET['bil1'] - $_GET['bil2']; break;
                            case '/': $hsl = $_GET['bil1'] / $_GET['bil2']; break;
                            case 'x': $hsl = $_GET['bil1'] * $_GET['bil2']; break;
                        }
                        echo $hsl;
                        $logkita = $_GET['history']. $_GET['bil1']." ". $_GET['opr']. " ". $_GET['bil2']." = ". $hsl. "<br />";
                    }
                ?>
                <input type="hidden" name="history" 
                <?php
                    if(isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2']))
                        echo 'value="'.$logkita.'"';
                    else
                        echo 'value=""';
                ?>
                />
                <h5><b><br>History:</b></h5>
                <?php
                    if(isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2']))
                        echo $logkita;
                ?>
            </form>
            </div>
        </div>
    </body>

</html>
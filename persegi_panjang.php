<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <style>
        body{
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <h2 class="text-center mt-5 fw-bolder ">Persegi Panjang</h2>
        <div class="container d-flex justify-content-center mt-5" >
            <form action="" method="post">
            <div class="mt-5 w-90">
                <label for="panjang" class="form-label fw-bold fs-3 ">Panjang</label>
                <input type="text" class="form-control mt-2" name="panjang">
                <label for="lebar" class="form-label fw-bold fs-3 ">Lebar</label>
                <input type="text" class="form-control mt-2" name="lebar">
                <button type="submit" class="btn btn-primary mt-4" name="hitung" value="hitung">Hitung</button>
            </form>
            </div>
        </div>

<h3 class="text-center mt-5">Hasil perhitungan Luas Persegi Panjang</h3>
<?php
    if(isset($_POST["hitung"])){
        $panjang=$_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas = $panjang * $lebar;
        echo "Panjang : $panjang <br>";
        echo "rumus : Panjang * Lebar <br>";
        echo "Hasil : $luas";
    }
?>
</body>
</html>
<?php
include "koneksi.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center bg-info p-3">
                <h1>Aplikasi Penjualan</h1>
            </div>
        </div>
        <?php
        if(!isset($_GET['modul'])){
            ?>
            <div class="row p-3">
                <div class="col">
                    <a class="btn btn-primary" href="?modul=barang">Data Barang</a>
                    <a class="btn btn-primary" href="?modul=penjualan">Data Penjualan</a>
                </div>
            </div>
            <?php
            }elseif($_GET['modul']=="barang"){
                include "modul/barang/index.php";
            }elseif($_GET['modul']=="form-barang"){
                include "modul/barang/form-barang.php";
            }
            elseif($_GET['modul']=="edit-barang"){
                include "modul/barang/form-edit.php";
            }elseif($_GET['modul']=="penjualan"){
                include "modul/penjualan/index.php";
            }
            ?>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
</body>
</html>
<?php
    include 'koneksi.php';

    // membuat variabel untuk memanggil elemen form dan mengambil nilainya

    $ktp= $_POST['noktp'];
    $hp= $_POST['nohp'];
    $nama= $_POST['nm'];
    $alamat= $_POST['alm'];

    // membuat variabel query berisi fungsi mysqli_query untuk menginputkan nilai $ktp, $hp, $nama, $alamat ke tabel tamu

    $query=mysqli_query($config,"INSERT INTO tamu 
    VALUES ('$ktp','$hp','$nama','$alamat')");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-10 h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="text-center">
                <img src="assets/images/head.png" class="img-responsive" with="400">
                <strong><h2 class="text-center mt-4 text-success">
                    <p>TERIMA KASIH TELAH MENGISI BUKU TAMU!</p></h2>
                </strong>
                <a href="index.php" class="btn btn-warning font-weight-bold text-white w-100">OK</a>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

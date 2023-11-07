<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get PHP</title>
</head>
<body>
    <form method="get">
        <label for="name">Masukkan Nama:</label>
        <input type="text" name="nama">
        <br><br>
        <label for="name">Masukkan Absen:</label>
        <input type="number" name="absen">
        <br><br>
        <label for="name">Masukkan Kelas:</label>
        <input type="number" name="kelas">
        <br><br>
        <input type="submit" value="submit" name="submit">
</from>
<br><br>
<?php
    if(isset($_GET["submit"])){
        $nama = $_GET['nama'];
        $absen = $_GET['absen'];
        $kelas = $_GET['kelas'];
        echo " Namaku $nama <br>";
        echo " Absenku $absen <br>";
         echo " Kelasku $kelas <br>";
    }
 
?>
</body>
</html>
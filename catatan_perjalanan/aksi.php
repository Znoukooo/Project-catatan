<?php
    include "koneksi.php";
    include "lokasi.php";

    $nik = $_POST['nik'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];

    $sql = mysqli_query($koneksi, "INSERT INTO pengguna VALUES('".$nik."', '".$nama_lengkap."', '".$username."', '".$password."', '".$alamat."', '".$tempat_lahir."', '".$tgl_lahir."', '".$jk."')");
    if($sql){
        header("location:lokasi.php");
    }else{
        echo 'Gagal Input ';
    }
?>
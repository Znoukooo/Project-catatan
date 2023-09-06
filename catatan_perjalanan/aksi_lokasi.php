<?php
    include "koneksi.php";

    $act = $_POST['act'];

    if($act == "simpan"){
        $nama_lokasi = $_POST['nama_lokasi'];
        $alamat_lokasi = $_POST['alamat_lokasi'];

        $sql = mysqli_query($koneksi, "INSERT INTO lokasi VALUES(NULL, '".$nama_lokasi."', '".$alamat_lokasi."')");

        if($sql){
            header("location:lokasi.php");
        }else{
            echo "Gagal";
        }
    }else if($act == "update"){
        echo "untuk update";
    }else if($act == "delete"){
        echo "untuk delete";
    }
?>



                  
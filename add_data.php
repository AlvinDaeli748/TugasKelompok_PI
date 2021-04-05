<?php
    require_once 'Connection/conn.php';
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $timestamp = date("Y-m-d H:i:s");

    if($db){
        $sql = "INSERT INTO data (nama,nim,timestamp) VALUES ('$nama','$nim','$timestamp')";
        $db->exec($sql);
        echo "<script>
                    alert('Presensi berhasil!'); 
                    window.location.replace('index.php');
                </script>";
    } elseif(isset($error)){
        echo "Maaf, terjadi kesalahan\nError : $error";
    }
?>
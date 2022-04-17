<?php 
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO bukutamu (nama,email,komentar) VALUES ('','$nama','$email','$komentar')";
    

    $result = $koneksi -> query($sql);
    if($result === true) {
        header('location: hasiltamu.php');
    } else {
        echo 'error';
    }
?>
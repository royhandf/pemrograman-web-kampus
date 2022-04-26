<?php 
    require 'koneksi.php';
    
    function query($sql) {
        global $koneksi;
        $result = mysqli_query($koneksi, $sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($angka) {
        global $koneksi;

        // ambil data pada form
        $angka1 = $angka["nilai1"];
        $angka2 = $angka["nilai2"];

        // pembagian
        $proses = $angka1 / $angka2;

        // cek ganjil genap
        if ($proses % 2 === 0) {
            $hasil = $proses;
        } else {
            $hasil = $angka1;
        }
        echo "<script> alert('Hasilnya adalah ' + $hasil); </script>";

        mysqli_query($koneksi, "INSERT INTO hitung VALUES('' ,'$angka1', '$hasil')");
        
        return mysqli_affected_rows($koneksi);
    }
?>
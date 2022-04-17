<?php 
    // Koneksi ke database
    require "koneksi.php";

    function query($sql) {
        global $koneksi;
        $result = mysqli_query($koneksi, $sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data) {
        global $koneksi;

        // ambil data pada form
        $matkul = htmlspecialchars($data["matkul"]);
        $hari = htmlspecialchars($data["hari"]);
        $jam = htmlspecialchars($data["jam"]);
        $ruang = htmlspecialchars($data["ruang"]);

        $query = mysqli_query($koneksi, "INSERT INTO matakuliah VALUES('','$matkul')");
        $id_matkul = mysqli_insert_id($koneksi);

        $query .= mysqli_query($koneksi, "INSERT INTO jadwal VALUES ('','$id_matkul', '$jam', '$hari', '$ruang')");
        
        return mysqli_affected_rows($koneksi);
    }
?>
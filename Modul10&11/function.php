<?php 
    require "connection.php";

    function query($sql) {
        global $koneksi;
        $result = mysqli_query($koneksi, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    function account($users) {
        global $koneksi;

        $username = strtolower(stripslashes($users["username"]));
        $password = mysqli_real_escape_string($koneksi, $users["password"]);
        $password2 = mysqli_real_escape_string($koneksi, $users["password2"]);
        $level = $users["level"];

        // cek username sudah ada atau belum
        $usernameCheck = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");
        if(mysqli_fetch_assoc($usernameCheck)) {
            echo "<script>
                    alert('Username sudah terdaftar!');
                </script>";
            return false;
        }

        // cek konfirmasi password
        if($password !== $password2) {
            echo "<script>
                    alert('Konfirmasi password tidak sesuai!');
                </script>";
            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambah user ke database
        mysqli_query($koneksi, "INSERT INTO users VALUES ('', '$username', '$password', '$level')");

        return mysqli_affected_rows($koneksi);
    }

    function tambah_barang($data) {
        global $koneksi;

        // ambil data pada form
        $nama = $data["nama"];
        $stok = $data["stok"];
        $harga = $data["harga"];

        mysqli_query($koneksi, "INSERT INTO barang VALUES ('','$nama', '$stok', '$harga')");
        
        return mysqli_affected_rows($koneksi);
    }

    function pembelian($data) {
        global $koneksi;

        // ambil data pada form
        $list_barang = explode(".", $data["list_barang"]);
        $id = $list_barang[0];
        $stok = $data["stok"];
        $tanggal = date("Y-m-d");

        mysqli_query($koneksi, "INSERT INTO pembelian VALUES ('', '$id', '$stok', '$tanggal')");
            
        return mysqli_affected_rows($koneksi);
    }

    function penjualan($data) {
        global $koneksi;

        // ambil data pada form
        $list_barang = explode(".", $data["list_barang"]);
        $id = $list_barang[0];
        $stok = $data["stok"];
        $tanggal = date("Y-m-d");

        mysqli_query($koneksi, "INSERT INTO penjualan VALUES ('', '$id', '$stok', '$tanggal')");
            
        return mysqli_affected_rows($koneksi);
    }
?>
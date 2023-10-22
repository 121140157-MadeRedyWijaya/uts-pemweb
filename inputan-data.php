<?php
if (isset($_GET['nama']) && isset($_GET['nim']) && isset($_GET['prodi']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['gender']) && isset($_GET['tgl_lahir']) && isset($_GET['alamat'])) {
    $nama = $_GET['nama'];
    $nim = $_GET['nim'];
    $prodi = $_GET['prodi'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $gender = $_GET['gender'];
    $tgl_lahir = $_GET['tgl_lahir'];
    $alamat = $_GET['alamat'];
}
?>

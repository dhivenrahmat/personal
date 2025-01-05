<?php

include("config.php");

// cek apakah tombol Kirim sudah diklik atau belum
if (isset($_POST['Kirim'])) {
    // ambil data dari formulir
    $email = $_POST['email'];
    $message = $_POST['message'];

    // buat query
    $sql = "INSERT INTO contact (email, message) VALUES ('$email', '$message')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman Contact.php dengan status=sukses
        header('Location: Contact.php?status=sukses');
        exit();
    } else {
        // kalau gagal alihkan ke halaman Contact.php dengan status=gagal
        header('Location: Contact.php?status=gagal');
        exit();
    }
} else {
    die("Akses dilarang...");
}
?>

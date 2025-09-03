<?php
// 1. Login
$username = "admin";
$password = "12345";

$inputUser = "admin";
$inputPass = "12345";

if ($inputUser == $username && $inputPass == $password) {
    echo "Login berhasil!<br>";
} else {
    echo "Username atau password salah!<br>";
}

// 2. Cek Stok Barang
$stok = 0;

if ($stok > 0) {
    echo "Barang tersedia, silakan beli.<br>";
} else {
    echo "Barang habis.<br>";
}

// 3. Diskon Harga
$totalBelanja = 600000;

if ($totalBelanja >= 500000) {
    $diskon = $totalBelanja * 0.10;
    $bayar = $totalBelanja - $diskon;
    echo "Total belanja: Rp$totalBelanja<br>";
    echo "Diskon 10%: Rp$diskon<br>";
    echo "Total bayar: Rp$bayar<br>";
} else {
    echo "Total bayar: Rp$totalBelanja (tanpa diskon)<br>";
}

// 4. Level User
$role = "admin";

if ($role == "admin") {
    echo "Selamat datang, Admin. Anda bisa mengelola data.<br>";
} else {
    echo "Selamat datang, User. Anda bisa berbelanja.<br>";
}

// 5. Metode Pembayaran
$metode = "Transfer";

switch ($metode) {
    case "Transfer":
        echo "Silakan transfer ke rekening BCA 123-456-789.<br>";
        break;
    case "COD":
        echo "Silakan bayar di tempat saat barang sampai.<br>";
        break;
    default:
        echo "Metode pembayaran tidak dikenali.<br>";
        break;
}
?>

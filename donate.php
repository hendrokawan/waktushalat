<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $amount = $_POST['amount'];

    // Simpan ke database (contoh koneksi sederhana)
    $conn = new mysqli("localhost", "root", "", "wakaf_db");
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "INSERT INTO donations (amount) VALUES ('$amount')";
    if ($conn->query($sql) === TRUE) {
        echo "Donasi berhasil! Terima kasih atas kontribusi Anda.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Metode tidak valid.";
}
?>

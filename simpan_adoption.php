<?php
include 'koneksi.php'; // Memanggil file koneksi

// Ambil data dari form
$nama_adopter = $_POST['nama_adopter'];
$jenis_hewan  = $_POST['jenis_hewan'];
$tanggal      = $_POST['tanggal'];
$notes        = $_POST['notes'];

// Simpan ke database
$sql = "INSERT INTO adoption (nama_adopter, jenis_hewan, tanggal, notes)
        VALUES ('$nama_adopter', '$jenis_hewan', '$tanggal', '$notes')";

if ($conn->query($sql) === TRUE) {
    echo "<p>✅ Data adopsi berhasil disimpan.</p>";
    echo "<a href='index.html' style='
        display:inline-block;
        margin-top:10px;
        padding:10px 20px;
        background-color:#4CAF50;
        color:white;
        text-decoration:none;
        border-radius:5px;'>Kembali ke Menu</a>";
} else {
    echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

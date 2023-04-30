<?php
$servername = "172.18.0.2";
$username = "root";
$password = "eon123";
$dbname = "Redlock";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

$sql = "SELECT ID, Nama, Alamat, Jabatan FROM users";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    echo "<ul>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<li>ID: " . $row["ID"]. ", Nama: " . $row["Nama"]. ", Alamat: " . $row["Alamat"]. ", Jabatan: " . $row["Jabatan"]. "</li>";
    }
    echo "</ul>";
} else {
    echo "Tidak ada data yang ditemukan.";
}

$conn->close();
?>

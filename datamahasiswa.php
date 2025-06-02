<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "informatik") or die("Koneksi gagal");

if (!$koneksi) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

// Ambil data dari tabel mahasiswa
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f2f2f2;
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        h1 {
            text-align: center;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            background-color: white;
        }
        th, td {
            border: 1px solid #888;
            padding: 10px;
        }
        th {
            background-color: #4A90E2;
            color: white;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <nav>
        <a href="home.html">HOME</a>
        <a href="about.html">ABOUT</a>
        <a href="service.html">SERVICES</a>
        <a href="datamahasiswa.php">DATA MAHASISWA</a>
    </nav>

    <h1>Data Mahasiswa</h1>

    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['nim']}</td>";
            echo "<td>{$row['nama']}</td>";
            echo "<td>{$row['jurusan']}</td>";
            echo "<td>{$row['alamat']}</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>

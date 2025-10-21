<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef;
            padding: 20px;
        }

        form, .result {
            background-color: white;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: white;
            cursor: pointer;
        }

        h2 {
            text-align: center;
        }

        .result p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $indo = $_POST['indo'];
    $inggris = $_POST['inggris'];
    $agama = $_POST['agama'];
    $kejuruan = $_POST['kejuruan'];
    $sejarah = $_POST['sejarah'];

    // Hitung rata-rata
    $rata2 = ($indo + $inggris + $agama + $kejuruan + $sejarah) / 5;

    // Tampilkan hasil
    echo "<div class='result'>";
    echo "<h2>Hasil Nilai</h2>";
    echo "<p><strong>Nama Siswa:</strong> $nama</p>";
    echo "<p>Bahasa Indonesia: $indo</p>";
    echo "<p>Bahasa Inggris: $inggris</p>";
    echo "<p>Agama: $agama</p>";
    echo "<p>Kejuruan: $kejuruan</p>";
    echo "<p>Sejarah: $sejarah</p>";
    echo "<p><strong>Rata-rata Nilai:</strong> " . number_format($rata2, 2) . "</p>";
    echo "</div>";
} else {
?>

<h2>Form Input Nilai Siswa</h2>

<form method="post" action="">
    <label for="nama">Nama Siswa:</label>
    <input type="text" name="nama" required>

    <label for="indo">Bahasa Indonesia:</label>
    <input type="number" name="indo" min="0" max="100" required>

    <label for="inggris">Bahasa Inggris:</label>
    <input type="number" name="inggris" min="0" max="100" required>

    <label for="agama">Agama:</label>
    <input type="number" name="agama" min="0" max="100" required>

    <label for="kejuruan">Kejuruan:</label>
    <input type="number" name="kejuruan" min="0" max="100" required>

    <label for="sejarah">Sejarah:</label>
    <input type="number" name="sejarah" min="0" max="100" required>

    <input type="submit" value="Hitung Rata-rata">
</form>

<?php
}
?>

</body>
</html>

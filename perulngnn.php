<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Gaji dan Lembur Karyawan</title>
</head>
<body>
    <h2>Menghitung Gaji dan Lembur Karyawan</h2>
    <form method="post">
        <table border="1" cellpadding="5">
            <tr><th>Nama Karyawan</th><th>Jam Kerja</th></tr>
            <?php
            $karyawan = ["Zahra", "Rara", "Citra", "Araya"];
            foreach ($karyawan as $nama) {
                echo "<tr><td>$nama</td><td><input type='number' name='jam[$nama]' min='0' required></td></tr>";
            }
            ?>
        </table><br>
        <input type="submit" name="hitung" value="Hitung Gaji">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $jam = $_POST['jam'];
        $tarifNormal = 20000;
        $tarifLembur = 25000;

        echo "<h3>Hasil Perhitungan Gaji:</h3>";
        echo "<table border='1' cellpadding='5'>
                <tr><th>Nama</th><th>Jam Normal</th><th>Jam Lembur</th><th>Total Gaji</th></tr>";

        foreach ($jam as $nama => $j) {
            $lembur = 0;
            $normal = $j;
            if ($j > 40) {
                $lembur = $j - 40;
                $normal = 40;
            }
            $gaji = ($normal * $tarifNormal) + ($lembur * $tarifLembur);
            echo "<tr><td>$nama</td><td>$normal</td><td>$lembur</td><td>Rp$gaji</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
<html>
<head>
    <title>Penilaian Kinerja Karyawan</title>
</head>
<body>
    <h2>Program Menentukan Nilai Huruf Kinerja Karyawan</h2>

    <form method="post">
        <h3>Masukkan Nilai Kinerja Setiap Karyawan</h3>

        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<fieldset style='width:400px; margin-bottom:10px;'>
                    <legend>Karyawan $i</legend>
                    <label>Nilai Kinerja: </label>
                    <input type='number' name='nilai_$i' required min='0' max='100'>
                  </fieldset>";
        }
        ?>
        <input type="submit" name="submit" value="Lihat Hasil Penilaian">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "<hr>";
        echo "<h3>Hasil Penilaian Kinerja Karyawan:</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>
                <tr>
                    <th>No</th>
                    <th>Nilai Angka</th>
                    <th>Nilai Huruf</th>
                    <th>Keterangan</th>
                </tr>";

        for ($i = 1; $i <= 5; $i++) {
            $nilai = $_POST["nilai_$i"];
            $huruf = "";
            $keterangan = "";

            if ($nilai >= 85) {
                $huruf = "A";
                $keterangan = "Sangat Baik";
            } elseif ($nilai >= 70 && $nilai <= 84) {
                $huruf = "B";
                $keterangan = "Baik";
            } elseif ($nilai >= 60 && $nilai <= 69) {
                $huruf = "C";
                $keterangan = "Cukup";
            } else {
                $huruf = "D";
                $keterangan = "Kurang";
            }

            echo "<tr>
                    <td>$i</td>
                    <td>$nilai</td>
                    <td>$huruf</td>
                    <td><b>$keterangan</b></td>
                  </tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
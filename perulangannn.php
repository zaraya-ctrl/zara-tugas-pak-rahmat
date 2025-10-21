<?php
// Data nama karyawan
$karyawan = array("Andi", "Budi", "Citra", "Dodi", "Eka");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kehadiran Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            margin: auto;
            width: 60%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .hadir {
            color: green;
            font-weight: bold;
        }

        .izin {
            color: orange;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Daftar Kehadiran Karyawan</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama Karyawan</th>
        <th>Status</th>
    </tr>

    <?php
    // Perulangan dengan for
    for ($i = 0; $i < count($karyawan); $i++) {
        $no_urut = $i + 1;
        $nama = $karyawan[$i];

        // Percabangan if-else untuk menentukan status
        if ($no_urut % 2 == 0) {
            $status = "Hadir";
            $class = "hadir";
        } else {
            $status = "Izin";
            $class = "izin";
        }

        echo "<tr>";
        echo "<td>$no_urut</td>";
        echo "<td>$nama</td>";
        echo "<td class='$class'>$status</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Total Belanja Setelah Diskon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
        }

        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: right;
        }

        th {
            background-color: #ddd;
        }

        td:first-child, th:first-child {
            text-align: center;
        }

        tfoot td {
            font-weight: bold;
            background-color: #eee;
        }
    </style>
</head>
<body>

<h2>Daftar Harga Barang dan Total Setelah Diskon</h2>

<table>
    <tr>
        <th>No</th>
        <th>Harga Asli (Rp)</th>
        <th>Diskon (Rp)</th>
        <th>Harga Setelah Diskon (Rp)</th>
    </tr>

    <?php
    // 1. Daftar harga barang
    $harga_barang = [12000, 15000, 30000, 10000, 50000];
    $total_akhir = 0;

    // 2. Perulangan untuk menghitung diskon
    for ($i = 0; $i < count($harga_barang); $i++) {
        $harga = $harga_barang[$i];
        $diskon = 0;

        // 3. Percabangan untuk cek diskon
        if ($harga > 30000) {
            $diskon = $harga * 0.10; // 10% diskon
        }

        $harga_setelah_diskon = $harga - $diskon;
        $total_akhir += $harga_setelah_diskon;

        // 4. Tampilkan baris data
        echo "<tr>
                <td>" . ($i + 1) . "</td>
                <td>" . number_format($harga, 0, ',', '.') . "</td>
                <td>" . number_format($diskon, 0, ',', '.') . "</td>
                <td>" . number_format($harga_setelah_diskon, 0, ',', '.') . "</td>
              </tr>";
    }

    // 5. Tampilkan total akhir
    echo "<tfoot>
            <tr>
                <td colspan='3'>Total Harga Belanja Setelah Diskon</td>
                <td>Rp " . number_format($total_akhir, 0, ',', '.') . "</td>
            </tr>
          </tfoot>";
    ?>
</table>

</body>
</html>

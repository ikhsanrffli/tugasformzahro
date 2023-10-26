<?php
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $matakuliah = $_POST['matakuliah'];
    $nilai_tugas = floatval($_POST['nilai_tugas']);
    $nilai_uts = floatval($_POST['nilai_uts']);
    $nilai_uas = floatval($_POST['nilai_uas']);

    $nilai_akhir = (0.2 * $nilai_tugas) + (0.3 * $nilai_uts) + (0.5 * $nilai_uas);

    $predikat = '';
    $keterangan = '';

    if ($nilai_akhir >= 80) {
        $predikat = 'A';
        $keterangan = 'Memuaskan';
    } elseif ($nilai_akhir >= 70) {
        $predikat = 'B';
        $keterangan = 'Baik';
    } elseif ($nilai_akhir >= 60) {
        $predikat = 'C';
        $keterangan = 'Cukup';
    } else {
        $predikat = 'D';
        $keterangan = 'Buruk';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Nilai Mahasiswa</title>
    <style>
        body{
            margin-top: 8em;
        }
    h1{
        text-align: center;
    }
        table{
            width: 20%;
            margin: 0 auto;
            padding: 5px;
            
        }

        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            gap:3rem;
        }
    </style>
</head>
<body>
    <h1>NILAI MAHASISWA</h1>
    <table border="1">
        <tr>
            <td>Nim</td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Matakuliah</td>
            <td><?php echo $matakuliah; ?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td><?php echo $nilai_tugas; ?></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td><?php echo $nilai_uts; ?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td><?php echo $nilai_uas; ?></td>
        </tr>
    </table>
<div class="main">
<h5>Nilai Akhir: <?php echo $nilai_akhir; ?></h5>
    <h5>Predikat: <?php echo $predikat; ?></h5>
    <h5>Keterangan: <?php echo $keterangan; ?></h5>
</div>
</body>
</html>

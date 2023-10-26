<!DOCTYPE html>
<html>
<head>
    <title>Form Input Nilai Mahasiswa</title>
    <style>
        body{
            margin-top: 8em;
        }
        h1{
            text-align: center;
        }
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            margin: 0 auto;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Form Input Nilai Mahasiswa</h1>
    <form action="proses_nilai_mahasiswa.php" method="post">
        <table>
            <tr>
                <td>Nim:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Matakuliah:</td>
                <td>
                    <select name="matakuliah">
                        <option value="PHP">PHP</option>
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="JS">JS</option>
                        <option value="JAVA">JAVA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nilai Tugas:</td>
                <td><input type="text" name="nilai_tugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS:</td>
                <td><input type="text" name="nilai_uts"></td>
            </tr>
            <tr>
                <td>Nilai UAS:</td>
                <td><input type="text" name="nilai_uas"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Proses"></td>
                <td><input type="reset" name="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
</body>
</html>
1``
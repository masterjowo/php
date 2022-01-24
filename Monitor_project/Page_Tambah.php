<!DOCTYPE html>
<html>
<head>
    <title>Database Warnet Gaboet</title>
    <style type="text/css">
        body{
            background-image: url("../bootstrap/2.jpg");
        }
    </style>
</head>
<body>
<center>
    <h1>Tambah Data Tabel Project Monitoring</h1>
    <a href="Project Monitoring.php">Kembali Ke Halaman Member</a><br>
    <table>
        <form action="Tambah.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td><label>Project_Name</label></td>
                <td>:</td>
                <td><input type="text" name="Project_Name" placeholder="isi Name Project "></td>
            </tr>
            <tr>
                <td><label>Client</label></td>
                <td>:</td>
                <td><input type="text" name="Client" placeholder="isi nama Client "></td>
            </tr>
            <tr>
                <td><label>Name_Leader</label></td>
                <td>:</td>
                <td><input type="text" name="Name_Leader" placeholder="isi nama leader"></td>
            </tr>
            <tr>
                <td><label>Foto_Leader</label></td>
                <td>:</td>
                <td><input type="file" class="form-control" name="file" id="file"></td>
            </tr>
            <tr>
                <td><label>Email_Leaderr</label></td>
                <td>:</td>
                <td><input type="text" name="Email_Leaderr" placeholder="Ex : Muhammad@ramdhani"></td>
            </tr>
            <tr>
                <td><label>Start_Date</label></td>
                <td>:</td>
                <td><input type="text" name="Start_Date" placeholder="Ex : 2022-01-18"></td>
            </tr>
            <tr>
                <td><label>End_Date</label></td>
                <td>:</td>
                <td><input type="text" name="End_Date" placeholder="Ex : 2022-01-18"></td>
            </tr>
            <tr>
                <td><label>Progress</label></td>
                <td>:</td>
                <td><input type="text" name="progress" placeholder="Ex : isi 1-100"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Input Data"></td>
            </tr>
        </form>
    </table>
</center>
</body>
</html>
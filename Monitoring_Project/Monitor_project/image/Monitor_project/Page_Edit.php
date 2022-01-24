<html>
<head>
    <title></title>
</head>
<body>

<h2>Edit DATA </h2>
<br/>
<a href="Project Monitoring.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA MAHASISWA</h3>

<?php
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from daftar_project where id='$id'");
while($d = mysqli_fetch_array($data)){
    ?>
    <table>
        <form action="Edit.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td><label>id</label></td>
                <td>:</td>
                <td><input type="text" name="id" value="<?php echo $d['id']; ?>" readonly ></td>
            </tr>
            <tr>
                <td><label>Project_Name</label></td>
                <td>:</td>
                <td><input type="text" name="Project_Name" placeholder="isi Name Project " value="<?php echo $d['Project_Name']; ?>" ></td>
            </tr>
            <tr>
                <td><label>Client</label></td>
                <td>:</td>
                <td><input type="text" name="Client" placeholder="isi nama Client " value="<?php echo $d['Client']; ?>"></td>
            </tr>
            <tr>
                <td><label>Name_Leader</label></td>
                <td>:</td>
                <td><input type="text" name="Name_Leader" placeholder="isi nama leader" value="<?php echo $d['Project_Leader']; ?>"></td>
            </tr>
            <tr>
                <td><label>Foto_Leader</label></td>
                <td>:</td>
                <td><input type="file" class="form-control" name="file" id="file"></td>
            </tr>
            <tr>
                <td><label>Email_Leaderr</label></td>
                <td>:</td>
                <td><input type="text" name="Email_Leaderr" placeholder="Ex : Muhammad@ramdhani" value="<?php echo $d['Email']; ?>"></td>
            </tr>
            <tr>
                <td><label>Start_Date</label></td>
                <td>:</td>
                <td><input type="text" name="Start_Date" placeholder="Ex : 2022-01-18" value="<?php echo $d['Start_Date']; ?>"></td>
            </tr>
            <tr>
                <td><label>End_Date</label></td>
                <td>:</td>
                <td><input type="text" name="End_Date" placeholder="Ex : 2022-01-18" value="<?php echo $d['End_Date']; ?>"></td>
            </tr>
            <tr>
                <td><label>Progress</label></td>
                <td>:</td>
                <td><input type="text" name="progress" placeholder="Ex : isi 1-100" value="<?php echo $d['progress']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Input Data"></td>
            </tr>
        </form>
    </table>
    <?php
}
?>

</body>
</html>
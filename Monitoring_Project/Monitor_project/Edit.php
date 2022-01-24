
<?php
include '../koneksi.php';
$id=$_POST['id'];
$Project_Name = $_POST['Project_Name'];
$Client = $_POST['Client'];
$Project_Leader = $_POST['Name_Leader'];
$Email= $_POST['Email_Leaderr'];
$Start_Date = $_POST['Start_Date'];
$End_Date = $_POST['End_Date'];
$progress = $_POST['progress'];

$nama_file = $_FILES['file']['name'];
$ukuran_file = $_FILES['file']['size'];
$tipe_file = $_FILES['file']['type'];
$tmp_file = $_FILES['file']['tmp_name'];


// Set path folder tempat menyimpan gambarnya
$path = "image/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/PNG" || $tipe_file == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :

    if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 10MB
        // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
        // Proses upload

        if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :
            // Proses simpan ke Database
            $query =mysqli_query($koneksi,"UPDATE daftar_project SET Project_Name='$Project_Name',Client='$Client', Project_Leader='$Project_Leader', Foto='$nama_file', Email='$Email', Start_Date='$Start_Date', End_Date='$End_Date', progress='$progress' WHERE id='$id'");
            $sql = mysqli_query($koneksi,$query);

            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                header("location:Project Monitoring.php");
            }else{
                // Jika Gagal, Lakukan :
                header("location:Project Monitoring.php");
            }
        }else{
            // Jika gambar gagal diupload, Lakukan :
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='Project Monitoring.php'>Kembali Ke Form</a>";
        }
    }else{
        // Jika ukuran file lebih dari 10MB, lakukan :
        echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
        echo "<br><a href='Page_Tambah.php'>Kembali Ke Form</a>";
    }
}else{
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
    echo "<br><a href='Page_Tambah.php'>Kembali Ke Form</a>";
}
?>

<?php
include '../koneksi.php';
?>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title></title>
    <style type="text/css">


        body {background-color: rgba(84, 171, 232, 0.3);}

        .table{
            text-align: center;
        }
        #center {
            text-align: center;
        }
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&family=Poppins:wght@600&display=swap');

        * {
            box-sizing: border-box
        }

        body {
            background-color: #d9ecf2;
            font-family: 'Poppins', sans-serif;
            color: #666
        }

        .h2 {
            color: #444;
            font-family: 'PT Sans', sans-serif
        }

        thead {
            font-family: 'Poppins', sans-serif;
            font-weight: bolder;
            font-size: 20px;
            color: #666
        }

        img {
            width: 40px;
            height: 40px
        }

        .name {
            display: inline-block
        }

        .bg-blue {
            background-color: #EBF5FB;
            border-radius: 8px
        }

        .fa-check,
        .fa-minus {
            color: blue
        }

        .bg-blue:hover {
            background-color: #3e64ff;
            color: #eee;
            cursor: pointer
        }

        .bg-blue:hover .fa-check,
        .bg-blue:hover .fa-minus {
            background-color: #3e64ff;
            color: #eee
        }

        .table thead th,
        .table td {
            border: none
        }

        .table tbody td:first-child {
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px
        }

        .table tbody td:last-child {
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px
        }

        #spacing-row {
            height: 10px
        }

        @media(max-width:575px) {
            .container {
                width: 125%;
                padding: 20px 10px
            }
        }

    </style>
</head>
<body>
<div class="container rounded mt-5 bg-white p-md-5">
    <div class="h2 font-weight-bold" id="center">Project Monitoring</div>
    <div class="table-responsive">
        <!-- As a heading -->
        <nav class="navbar navbar-light bg-light">
            <a href="Page_Tambah.php"><button type="button" class="btn btn-light" >tambah</button></a>
        </nav>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">Project_Name</th>
                <th scope="col">Client</th>
                <th scope="col">Project_Leader</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">progress</th>
                <th scope="col">Action</th>
            </tr>
            </thead>


            <?php
            $query = "SELECT * FROM daftar_project";
            $no=1;

            $data = mysqli_query($koneksi, $query)
            or die("Gagal Query : ".$query);
            ?>
            <?php
            while ($v=mysqli_fetch_array($data)):;
                ?>
            <tbody>

            <tr class="bg-blue">
                <td class="pt-3 mt-1"><?php echo $no;?></td>
                <td class="pt-3 mt-1"><?php echo $v['Project_Name'];?></td>
                <td class="pt-3 mt-1"><?php echo $v['Client'];?></td>
                <td class="pt-2"> <img src="image/<?php echo $v['Foto'];?> " class="rounded-circle" alt="">
                    <div class="pl-lg-5 pl-md-3 pl-1 name font-weight-bold"><?php echo $v['Project_Leader'];?></div>
                    <div class="pl-lg-5 pl-md-3 pl-1 Email" ><?php echo $v['Email'];?></div>
                </td>

                <td class="pt-3 mt-1"><?php echo $v['Start_Date'];?></td>
                <td class="pt-3 mt-1"><?php echo $v['End_Date'];?></td>


                <td>
                    <div class="progress">
                        <div class="progress-bar
                            <?php
                        if ($v['progress']==100){
                            echo 'bg-warning';
                        }else{
                        }
                        ?>
                            " role="progressbar" style="width: <?php echo $v['progress'];?>" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"> </div>
                    </div><?php echo $v['progress'];?>%</td>
                <td>

                    <a data-toggle="tooltip" data-placement="top" title="Hapusss" class="btn btn-danger btn-sm" href="Hapus.php?id=<?php echo $v['id'];?>" onclick="return confirm('Anda yakin ingin menghapus data <?php echo $v['Project_Name'];?>?');">Hapus</a>||
                    <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success" href="Page_Edit.php?id=<?php echo $v['id'];?>" onclick="return confirm('Anda yakin ingin edit data <?php echo $v['Project_Name'];?>?');"> Edit</a>

                </td>
            </tr>
            <?php $no++;?>
            <?php endwhile; ?>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
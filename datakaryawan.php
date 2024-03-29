<!DOCTYPE html>
<html>
    <head>
        <?php include "header.php"; ?>
        <title>Data Karyawan</title>
    </head>
    <body>
        <?php include "menu.php"; ?>

        <!-- bagian isi -->
        <div class="container-fluid">
            <h3>Data Karyawan</h3>
            <table class="table table-bordered">
                <thead>
                    <tr style="background-color: grey; color: white;">
                        <th style="width: 10px; text-align: center">No.</th>
                        <th style="width: 200px; text-align: center">No. Kartu</th>
                        <th style="width: 400px; text-align: center">Nama</th>
                        <th style="text-align: center">Alamat</th>
                        <th style="text-align: center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        include "koneksi.php";
                        //baca data karyawan
                        $sql = mysqli_query($konek, "SELECT * FROM karyawan");

                        $no = 0;
                        while($data = mysqli_fetch_array($sql)) {
                            $no++;           
                    ?>
                    <tr>
                        <td> <?php echo $no; ?> </td>
                        <td> <?php echo $data['nokartu']; ?></td>
                        <td> <?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td style="text-align: center">
                            <a class="btn btn-primary" href="edit.php?id=<?php echo $data['id']?>">
                            Edit</a> 
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']?>">Hapus</a> 
                            <!-- <a class="btn btn-success" href="monitorkaryawan.php?id=<?php echo $data['id']?>">Periksa</a> -->
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <a href="tambah.php"><button class="btn btn-primary">Tambah Data Karyawan</button></a>
        </div>

        <!-- penutup isi -->
        
        <?php include "footer.php"; ?>
    </body>
</html>
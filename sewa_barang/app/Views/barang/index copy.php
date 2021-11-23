<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?PHP
    include('layouts/css.php')
    ?>
</head>
<body>
    <!-- navbar -->
    
    <!-- akhir navbar -->

    <!-- konten -->
<section>
    <div class="container">
        <h2 class="text-center pt-5">Tabel Baru</h2>
        <a href="<?=base_url('barang/tambah'); ?>" class="btn btn-info">Tambah</a>
        <table class="table" id="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Aksi </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($data as $i => $d) {
                        ?>
                        <tr>
                            <td width="30" class="text-center"><?php echo $i+1;?></td>
                            <td><?php echo $d['nama']?></td>
                            <td><?php echo $d['stock']?></td>
                            <td><?php echo $d['jenis']?></td>
                            <td><?php echo $d['merk']?></td>
                            <td>
                                <a href="<?php echo base_url('barang/edit/'. $d['id'])?>" class="btn btn-warning">edit</a>
                                <a href="<?php echo base_url('barang/hapus/'.$d['id'])?>" class="btn btn-danger">hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</section>
    <!-- akhir konten -->

    <!-- footer -->

    <!-- akhir footer -->

    <!-- js -->
<?PHP
    include('layouts/js.php')
?>

</body>
</html>
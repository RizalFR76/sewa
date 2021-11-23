<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sewa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row-12">
            <div class="card">
                <h1 align="center"> INFO SEWA</h1>
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nama</th>
                            <th scope="col">jk</th>
                            <th scope="col">telepon</th>
                            <th scope="col">nama barang</th>
                            <th scope="col">merk</th>
                            <th scope="col">tgl_sewa</th>
                            <th scope="col">tgl_ambil</th>
                            <th scope="col">tgl_pengembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($data as $i => $d) {
                                // dd($d);
                                ?>
                                <tr>
                                    <td width="30" class="text-center"><?php echo $i+1;?></td>
                                    <td><?php echo $d->nama?></td>
                                    <td><?php echo $d->jk?></td>
                                    <td><?php echo $d->telepon?></td>
                                    <td><?php echo $d->nama_barang?></td>
                                    <td><?php echo $d->merk?></td>
                                    <td><?php echo $d->tgl_sewa?></td>
                                    <td><?php echo $d->tgl_ambil?></td>
                                    <td><?php echo $d->tgl_pengembalian?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
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
    <?PHP helper('form') ?>
    <div class="container">
        <div class="row-12">
            <div class="card">
                    <h1 align="center"> TAMBAH DATA</h1>
                <form method="post" action="<?=base_url('sewa/tambah_sewa'); ?>">
                    <div class="form-group pl-4">
                        <label for="id_penyewa">penyewa</label><br>
                        <select name="id_penyewa" id="id_penyewa" class="form-control">
                        <option value="">pilih penyewa</option>
                        <?php 
                            foreach ($pelanggan as $i => $d) {
                            ?>
                                <option value="<?=$d['id']?>"><?=$d['nama']?></option>
                        <?php 
                            } 
                        ?>
                        </select>
                    </div>
                    <div class="form-group pl-4">
                        <label for="id_barang">barang</label><br>
                        <select name="id_barang" id="id_barang" class="form-control">
                        <option value="">pilih barang</option>
                        <?php 
                            foreach ($barang as $i => $d) {
                            ?>
                                <option value="<?=$d['id']?>"><?=$d['nama']?></option>
                        <?php 
                            } 
                        ?>
                        </select>
                    </div>
                    <div class="form-group pl-4">
                        <label for="tgl_ambil">tgl_ambil</label>
                        <input name="tgl_ambil" type="date" class="form-control" id="tgl_ambil" placeholder="tgl_ambil">
                    </div>
                    <div class="form-group pl-4">
                        <label for="tgl_pengembalian">tgl_pengembalian</label>
                        <input name="tgl_pengembalian" type="date" class="form-control" id="tgl_pengembalian"  placeholder="Masukan tgl_pengembalian sewa">
                    </div>
                    <div class="form-group pl-4">
                        <label for="k_sewa">konfirmasi sewa</label><br>
                        <?PHP 
                            $option = [
                                null=>'belum dikonvirmasi',
                                'diterima' => 'sudah dikonfirmasi',
                                'ditolak' => 'permintaan ditolak'
                            ];
                            echo form_dropdown('k_sewa',$option,null);
                        ?>
                    </div>
                    <div class="form-group pl-4">
                        <label for="k_pengembalian">konfirmasi pengembalian</label><br>
                        <?PHP 
                            $option = [
                                null=>'belum dikonvirmasi',
                                'belum dikembalikan' => 'belum dikembalikan',
                                'sudah dikembalikan' => 'dikembalikan'
                            ];
                            echo form_dropdown('k_pengembalian',$option,null);
                        ?>
                    </div>
                    
                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
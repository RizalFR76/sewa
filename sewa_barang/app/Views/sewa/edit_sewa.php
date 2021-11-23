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
                    <h1 align="center"> Edit DATA</h1>
                <form method="post" action="<?=base_url('sewa/update/'.$data['id']); ?>">
                    <div class="form-group pl-4 pr-5">
                        <label for="id_penyewa">penyewa</label>
                        <select name="id_penyewa" id="id_penyewa" class="form-control">
                        <option value="">pilih penyewa</option>
                        <?php 
                            foreach ($pelanggan as $i => $d) {
                            ?>
                                <option value="<?=$d['id']?>" <?PHP if ($data['id_penyewa']==$d['id']) {
                                    echo 'selected' ;
                                }?>><?=$d['nama']?></option>
                        <?php 
                            } 
                        ?>
                        </select>
                    </div>
                    <div class="form-group pl-4 pr-5">
                        <label for="id_barang">barang</label>
                        <select name="id_barang" id="id_barang" class="form-control">
                        <option value="">pilih barang</option>
                        <?php 
                            foreach ($barang as $i => $d) {
                            ?>
                                <option value="<?=$d['id']?>"<?PHP if ($data['id_penyewa']==$d['id']) {
                                    echo 'selected' ;
                                }?>><?=$d['nama']?></option>
                        <?php 
                            } 
                        ?>
                        </select>
                    </div>
                    <div class="form-group pl-4 pr-5">
                        <label for="tgl_ambil">tgl_ambil</label>
                        <input value="<?php echo $data['tgl_ambil']; ?>" name="tgl_ambil" type="date" class="form-control" id="tgl_ambil" placeholder="tgl_ambil">
                    </div>
                    <div class="form-group pl-4 pr-5">
                        <label for="tgl_pengembalian">tgl_pengembalian</label>
                        <input value="<?php echo $data['tgl_pengembalian']; ?>" name="tgl_pengembalian" type="date" class="form-control" id="tgl_pengembalian"  placeholder="Masukan tgl_pengembalian sewa">
                    </div>
                    <div class="form-group pl-4 pr-5">
                        <label for="k_sewa">k_sewa</label>
                        <select name="k_sewa" id="k_sewa" class="form-control">
                        <option value="">belum dikonfirmasi</option>
                        <option value="ditolak">ditolak</option>
                        <option value="diterima">dikonfirmasi</option>
                        </select>
                    </div>
                    <div class="form-group pl-4 pr-5">
                        <label for="k_pengembalian">k_pengembalian</label>
                        <select name="k_pengembalian" id="k_pengembalian" class="form-control">
                        <option value="">------</option>
                        <option value="belum dikembalikan">belum dikembalikan</option>
                        <option value="sudah dikembalikan">sudah dikembalikan</option>
                        </select>
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
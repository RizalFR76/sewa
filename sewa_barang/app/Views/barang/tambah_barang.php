<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row-12">
            <div class="card">
                    <h1 align="center"> TAMBAH DATA</h1>
                <form method="post" action="<?=base_url('barang/tambah_barang'); ?>">
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input name="nama" type="text" class="form-control" id="nama"  placeholder="Masukan nama barang">
                    </div>
                    <div class="form-group">
                        <label for="stock">stock</label>
                        <input name="stock" type="number" class="form-control" id="stocl" placeholder="stock">
                    </div>
                    <div class="form-group">
                        <label for="jenis">jenis</label>
                        <input name="jenis" type="text" class="form-control" id="jenis" placeholder="jenis">
                    </div>
                    <div class="form-group">
                        <label for="merk">merk</label>
                        <input name="merk" type="text" class="form-control" id="merk" placeholder="merk">
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
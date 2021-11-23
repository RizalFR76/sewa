<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row-12">
            <div class="card">
                    <h1 align="center"> TAMBAH DATA</h1>
                <form method="post" action="<?=base_url('user/tambah_user'); ?>">
                    <div class="form-group p-4">
                        <label for="nama">nama</label>
                        <input name="nama" type="text" class="form-control" id="nama"  placeholder="Masukan nama user">
                    </div>
                    <div class="form-group p-4">
                        <label for="tgl_lahir">tgl_lahir</label>
                        <input name="tgl_lahir" type="date" class="form-control" id="stocl" placeholder="tgl_lahir">
                    </div>
                    <div class="form-group p-4">
                        <label for="jk">jk</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="jk1" value="L" />
                            <label class="form-check-label" for="jk1"> Laki-laki </label>
                        </div>
                        <div class="form-check p-3">
                            <input class="form-check-input" type="radio" name="jk" id="jk2" value="P" />
                            <label class="form-check-label" for="jk2"> Perempuan </label>
                        </div>
                    </div>
                    <div class="form-group p-4">
                        <label for="alamat">alamat</label>
                        <input name="alamat" type="text" class="form-control" id="alamat" placeholder="alamat">
                    </div>
                    <div class="form-group p-4">
                        <label for="telepon">telepon</label>
                        <input name="telepon" type="number" class="form-control" id="telepon" placeholder="telepon">
                    </div>
                    <div class="form-group p-4">
                        <label for="email">email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="form-group p-4">
                        <label for="username">username</label>
                        <input name="username" type="text" class="form-control" id="username" placeholder="username">
                    </div>
                    <div class="form-group p-4">
                        <label for="password">password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="password">
                    </div>
                    <div class="form-group p-4">
                        <label for="level">level</label>
                        <input name="level" type="text" class="form-control" id="level" placeholder="level">
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
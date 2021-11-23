<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>user - Edit</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 align="center"> EDIT DATA</h1>
            </div>
            <div class="card-body">
                <form method="post" action="<?=base_url('user/update/'.$data['id']); ?>">
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input value="<?php echo $data['nama']; ?>" name="nama" type="text" class="form-control" id="nama"  placeholder="Masukan nama user">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">tgl_lahir</label>
                        <input value="<?php echo $data['tgl_lahir']; ?>" name="tgl_lahir" type="date" class="form-control" id="stocl" placeholder="tgl_lahir">
                    </div>
                    <div class="form-group">
                        <label for="jk">jk</label>
                        <div class="form-check">
                            <input <?php if ($data['jk']=='L') {
                                echo "checked";
                            }?> class="form-check-input" type="radio" name="jk" id="jk1" value="L" />
                            <label class="form-check-label" for="jk1"> Laki-laki </label>
                        </div>
                        <div class="form-check">
                            <input <?php if ($data['jk']=='P') {
                                echo "checked";
                            }?> class="form-check-input" type="radio" name="jk" id="jk2" value="P" />
                            <label class="form-check-label" for="jk2"> Perempuan </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input value="<?php echo $data['alamat']; ?>" name="alamat" type="text" class="form-control" id="alamat" placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label for="telepon">telepon</label>
                        <input value="<?php echo $data['telepon']; ?>" name="telepon" type="number" class="form-control" id="telepon" placeholder="telepon">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input value="<?php echo $data['email']; ?>" name="email" type="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="username">username</label>
                        <input value="<?php echo $data['username']; ?>" name="username" type="text" class="form-control" id="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input value="<?php echo $data['password']; ?>" name="password" type="password" class="form-control" id="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="level">level</label>
                        <input value="<?php echo $data['level']; ?>" name="level" type="text" class="form-control" id="level" placeholder="level">
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
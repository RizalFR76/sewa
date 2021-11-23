<?= $this->extend('layouts/master.php')?>

<?= $this->section('content')?>
<div id="content">

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
        <div class="d-flex justify-content-between align-items-center">
            <h1>Silakan Masukan Data Diri Anda</h1>
            <ol>
                <ul><a href="login">Sudah punya akun?</a></ul>
                <ul><a href="login" class="btn btn-primary">Login</a></ul>
            </ol>
        </div>
		

	</div>
    <div class="container">
        <div class="row-12">
            <div class="card">
                <form method="post" action="<?=base_url('user/tambah_user'); ?>">
                    <div class="form-group p-4">
                        <label for="nama">nama</label>
                        <input name="nama" type="text" class="form-control" id="nama"  placeholder="Masukan nama user">
                    </div>
                    <div class="form-group p-4 ">
                        <label for="tgl_lahir">tgl_lahir</label>
                        <input name="tgl_lahir" type="date" class="form-control" id="stocl" placeholder="tgl_lahir">
                    </div>
                    <div class="form-group p-4">
                        <label for="jk" class="p-4">jenis kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="jk1" value="L" />
                            <label class="form-check-label" for="jk1"> Laki-laki </label>
                        </div>
                        <div class="form-check p-4">
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
                    <?php
                    helper('form');
                    echo form_hidden('level', 'pelanggan');
                    ?>
                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>
                    <br>
                </form>
            </div>
        </div>
    </div>
	<!-- /.container-fluid -->

</div>
<?= $this->endSection()?>
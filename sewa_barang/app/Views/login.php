<?= $this->extend('layouts/master.php')?>

<?= $this->section('content')?>
<div id="content">

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
        <div class="d-flex justify-content-between align-items-center">
            <h1>Silakan Login</h1>
            <ol>
                <ul><a href="registrasi">Belum punya akun?</a></ul>
                <ul><a href="registrasi" class="btn btn-primary">registrasi</a></ul>
            </ol>
        </div>
		

	</div>
    <div class="container">
        <div class="row-12">
            <div class="card">
                <form method="post" action="<?=base_url('cek'); ?>">
                    <div class="form-group p-4">
                        <label for="username">username</label>
                        <input name="username" type="text" class="form-control" id="username" placeholder="username">
                    </div>
                    <div class="form-group p-4">
                        <label for="password">password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="password">
                    </div>
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
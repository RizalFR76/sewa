
<?= $this->extend('layouts/master.php')?>

<?= $this->section('content')?>
<div id="content">

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
        <body>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h1 align="center"> Edit DATA</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?=base_url('barang/update/'.$data['id']); ?>">
                            <div class="form-group">
                                <label for="nama">nama</label>
                                <input value="<?php echo $data['nama']; ?>"  name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan nama">
                            </div>
                            <div class="form-group">
                                <label for="stock">stock</label>
                                <input value="<?php echo $data['stock']; ?>"  name="stock" type="text" class="form-control" id="stock" placeholder="stock">
                            </div>
                            <div class="form-group">
                                <label for="jenis">jenis</label>
                                <input value="<?php echo $data['jenis']; ?>"  name="jenis" type="text" class="form-control" id="jenis" placeholder="jenis">
                            </div>
                            <div class="form-group">
                                <label for="merk">merk</label>
                                <input value="<?php echo $data['merk']; ?>"  name="merk" type="text" class="form-control" id="merk" placeholder="merk">
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </body>

	</div>
	<!-- /.container-fluid -->

</div>
<?= $this->endSection()?>

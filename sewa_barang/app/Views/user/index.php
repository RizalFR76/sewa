<?= $this->extend('layouts/master.php')?>

<?= $this->section('content')?>
<div id="content">

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
        <section>
            <div class="container">
                <h2 class="text-center pt-5">Tabel User</h2>
                <a href="<?=base_url('user/tambah'); ?>" class="btn btn-info">Tambah</a>
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">tgl_lahir</th>
                            <th scope="col">jk</th>
                            <th scope="col">alamat</th>
                            <th scope="col">telepon</th>
                            <th scope="col">email</th>
                            <th scope="col">username</th>
                            <th scope="col">password</th>
                            <th scope="col">level</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($data as $i => $d) {
                                ?>
                                <tr>
                                    <td width="30" class="text-center"><?php echo $i+1;?></td>
                                    <td><?php echo $d['nama']?></td>
                                    <td><?php echo $d['tgl_lahir']?></td>
                                    <td><?php echo $d['jk']?></td>
                                    <td><?php echo $d['alamat']?></td>
                                    <td><?php echo $d['telepon']?></td>
                                    <td><?php echo $d['email']?></td>
                                    <td><?php echo $d['username']?></td>
                                    <td><?php echo $d['password']?></td>
                                    <td><?php echo $d['level']?></td>
                                    <td>
                                        <a href="<?php echo base_url('user/edit/'. $d['id'])?>" class="btn btn-warning">edit</a>
                                        <a href="<?php echo base_url('user/hapus/'.$d['id'])?>" class="btn btn-danger">hapus</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
	</div>
	<!-- /.container-fluid -->

</div>
<?= $this->endSection()?>
<?= $this->extend('layouts/master.php')?>

<?= $this->section('content')?>
<div id="content">

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
        <section>
            <div class="container">
                <h2 class="text-center pt-5">Tabel Menu</h2>
                <a href="<?=base_url('sewa/tambah'); ?>" class="btn btn-info">Tambah</a>
                <a href="<?=base_url('sewa/info'); ?>" class="btn btn-info">Info</a>
                <a href="<?=base_url('sewa/info2'); ?>" class="btn btn-info">Info2</a>
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">id_penyewa</th>
                            <th scope="col">id_barang</th>
                            <th scope="col">tgl_sewa</th>
                            <th scope="col">tgl_ambil</th>
                            <th scope="col">tgl_pengembalian</th>
                            <th scope="col">k_sewa</th>
                            <th scope="col">k_pengembalian</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($data as $i => $d) {
                                ?>
                                <tr>
                                    <td width="30" class="text-center"><?php echo $i+1;?></td>
                                    <td><?php echo $d['id_penyewa']?></td>
                                    <td><?php echo $d['id_barang']?></td>
                                    <td><?php echo $d['tgl_sewa']?></td>
                                    <td><?php echo $d['tgl_ambil']?></td>
                                    <td><?php echo $d['tgl_pengembalian']?></td>
                                    <td><?php echo $d['k_sewa']?></td>
                                    <td><?php echo $d['k_pengembalian']?></td>
                                    <td>
                                        <a href="<?php echo base_url('sewa/edit/'. $d['id'])?>" class="btn btn-warning">edit</a>
                                        <a href="<?php echo base_url('sewa/hapus/'.$d['id'])?>" class="btn btn-danger">hapus</a>
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
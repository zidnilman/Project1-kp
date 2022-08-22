<div class="container">
<h3> Daftar Santri</h3>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php if ($this->session->flashdata('flash')) : ?>
	<div class="row mt-3">
			<div class="col md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data santri <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>santri/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="<?= base_url('santri'); ?>" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari data santri..." name="keyword" autocomplete="off" autofocus>
					<div class="input-group-append">
						<input class="btn btn-primary" type="submit" name="submit">
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-10">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Kamar</th>
						<th>NIS</th>
						<th>Action</th>
					</tr>
				</thead>
			<tbody>
			<?php if (empty($santri)) : ?>
				<tr>
                    <td colspan= "4">
						<div class="alert alert-danger" role="alert">
							data santri tidak ditemukan.
						</div>
					</td>
				</tr>
			<?php endif; ?>
				<?php foreach ($santri as $san) : ?>
					<tr>
					<th><?= ++$start; ?></th>
                    <td><?= $san['nama']; ?></td>
                    <td><?= $san['kamar']; ?></td>
                    <td><?= $san['nis']; ?></td>
                    <td>
						<a href="<?= base_url(); ?>santri/hapus/<?= $san['id']; ?>" class="badge badge-danger float-center" onclick="return confirm('yakin?');">hapus</a>
						<a href="<?= base_url(); ?>santri/detail/<?= $san['id']; ?>" class="badge badge-primary float-center">detail</a>
						<a href="<?= base_url(); ?>santri/ubah/<?= $san['id']; ?>" class="badge badge-success float-center">ubah</a>
					</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
        </table>
		<?= $this->pagination->create_links(); ?>
		</div>
	</div>

</div>
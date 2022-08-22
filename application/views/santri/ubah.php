<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Form Ubah Data Santri
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $santri['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?= $santri['nama']; ?>">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="kamar">Kamar</label>
							<select class="form-control" id="kamar" name="kamar">
								<?php foreach ($kamar as $k) : ?>
									<?php if ($k == $santri['kamar']) : ?>
										<option value="<?= $k; ?>" selected><?= $k; ?></option>
									<?php else : ?>
										<option value="<?= $k; ?>"><?= $k; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="nis">NIS</label>
							<input type="text" name="nis" class="form-control" id="nis" value="<?= $santri['nis']; ?>">
							<small class="form-text text-danger"><?= form_error('nis'); ?></small>
						</div>
						<button type="submit" name="ubah" class="btn btn-primary float-right ">Ubah Data</button>
					</form>
				</div>
			</div>


		</div>

	</div>
</div>
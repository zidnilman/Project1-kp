<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Form Tambah Data Santri
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="kamar">Kamar</label>
							<select class="form-control" id="kamar" name="kamar">
								<option value="1">1 (Pa)</option>
								<option value="2">1 (Pi)</option>
								<option value="3">2 (Pa)</option>
								<option value="4">2 (Pi)</option>
								<option value="5">3 (Pa)</option>
								<option value="6">3 (Pi)</option>
								<option value="7">4 (Pa)</option>
								<option value="8">4 (Pi)</option>
								<option value="9">5 (Pa)</option>
								<option value="10">5 (Pi)</option>
							</select>
						</div>
						<div class="form-group">
							<label for="nis">NIS</label>
							<input type="text" name="nis" class="form-control" id="nis">
							<small class="form-text text-danger"><?= form_error('nis'); ?></small>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right ">Tambah Data</button>
					</form>
				</div>
			</div>


		</div>

	</div>
</div>
<div class="content">

	<!-- Start Content-->
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">Form Tambah Surat</h4>
				</div>
			</div>
		</div>
		<!-- end page title -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<?php if ($this->session->flashdata('success')): ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<span><?php echo $this->session->flashdata('success'); ?></span>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<?php endif; ?>
						<div class="row">
							<form class="row g-3" action="<?php echo site_url('surat/tambahSurat'); ?>" method="POST"
								enctype="multipart/form-data">
								<div class="col-md-4">
									<label for="nomor_surat" class="form-label">Nomor Surat</label>
									<input type="text" class="form-control" id="nomor_surat" name="nomor_surat"
										required>
								</div>
								<div class="col-md-4">
									<label for="judul_surat" class="form-label">Judul Surat</label>
									<input type="text" class="form-control" id="judul_surat" name="judul_surat"
										required>
								</div>
								<div class="col-md-4">
									<label for="tanggal_surat" class="form-label">Tanggal Surat</label>
									<input type="datetime-local" class="form-control" id="tanggal_surat"
										name="tanggal_surat" required>
								</div>
								<div class="col-md-4">
									<label for="status_surat" class="form-label">Status</label>
									<select class="form-control" id="status_surat" name="status_surat" required>
										<option value=""> --Pilih Status-- </option>
										<option value="diterima">Diterima</option>
										<option value="ditunggu">Ditunggu</option>
										<option value="ditolak">Ditolak</option>
									</select>
								</div>
								<div class="col-md-4">
									<label for="lampiran" class="form-label">Lampiran</label>
									<input type="file" class="form-control" id="lampiran" name="lampiran" required>
								</div>
								<div class="col-md-4">
									<label for="keterangan_surat" class="form-label">Keterangan Surat</label>
									<textarea class="form-control" id="keterangan_surat" name="keterangan_surat"
										data-parsley-trigger="keyup" data-parsley-minlength="20"
										data-parsley-maxlength="100"
										data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.."
										data-parsley-validation-threshold="10"></textarea>
								</div>
								<div class="col-12">
									<button class="btn btn-primary" type="submit">Tambah Data</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
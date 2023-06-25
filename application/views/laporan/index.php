<div class="content">

	<!-- Start Content-->
	<div class="container-fluid">
		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">Laporan</h4>
				</div>
			</div>
		</div>
		<?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<span><?php echo $this->session->flashdata('success'); ?></span>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>No</th>
										<th>Nomor Surat</th>
										<th>Judul Surat</th>
										<th>Status Surat</th>
										<th>Tanggal Surat</th>
										<th>Keterangan Surat</th>
										<th>Lampiran</th>
										<th></th>
                                        <th>action</th>
										<th>Hapus</th>
										<th>Detail</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1?>
									<?php foreach ($surat as $srt) : ?>
									<tr>
										<td><?php echo $i++;?></td>
										<td><?= $srt->nomor_surat; ?></td>
										<td><?= $srt->judul_surat; ?></td>
                                        <?php 
                                            if ($srt->piket == 1 && $srt->persuratan == 1 && $srt->pimpinan == 1 ) { ?> 
                                                <td><span class="badge label-table bg-success">Surat Telah Sampai Di Pimpinan</span>
                                                    </td>
                                            <?php }
                                            elseif ($srt->piket == 1 && $srt->persuratan == 1 && $srt->pimpinan == 0 ) { ?> 
                                                <td><span class="badge label-table bg-success">Surat Telah Sampai Di Persuratan</span>
                                                    </td>
                                            <?php }
                                            elseif ($srt->piket == 1 && $srt->persuratan == 0 && $srt->pimpinan == 0 ) { ?> 
                                                <td><span class="badge label-table bg-success">Surat Berada di Piket</span>
                                                    </td>
                                            <?php } ?>
										<td><?= $srt->tanggal_surat; ?></td>
										<td><?= $srt->keterangan_surat; ?></td>
										<td><?= basename($srt->lampiran); ?></td>
                                        <td>
                                        <?php 
                                            if ($srt->piket == 1 && $srt->persuratan == 1 && $srt->pimpinan == 1 ) { ?> 
                                                <td><a class="badge label-table bg-success">Selesai</a></td>
                                            <?php }
                                            elseif ($srt->piket == 1 && $srt->persuratan == 1 && $srt->pimpinan == 0 ) { ?> 
                                                <td><a href="<?= base_url('surat/go/3/').$srt->unique_tiket ?>" class="badge label-table bg-success">Pimpinan Terima</a>
                                                    </td>
                                            <?php }
                                            elseif ($srt->piket == 1 && $srt->persuratan == 0 && $srt->pimpinan == 0 ) { ?> 
                                                <td><a href="<?= base_url('surat/go/2/').$srt->unique_tiket ?>" class="badge label-table bg-success">Persuratan Terima</a>
                                                    </td>
                                            <?php } ?>
                                        </td>
										<td><a href="<?php echo base_url('laporan/hapus/').$srt->id_surat; ?>"><button type="button" class="btn btn-danger btn-sm waves-effect waves-light"><i class="mdi mdi-close"></i></button></a></td>
										<td><a href="<?php echo base_url('laporan/progress/').$srt->id_surat; ?>"><button type="button" class="btn btn-success btn-sm waves-effect waves-light"><i class="mdi mdi-progress-check"></i></button></td></a>
										</tr>

									<?php endforeach; ?>

								</tbody>
							</table>
						</div> <!-- end table-responsive-->
					</div>
				</div> <!-- end card -->
			</div>
		</div>


	</div> <!-- container -->

</div>
<div class="content">
	<!-- Start Content-->
	<div class="container-fluid">
		<!-- start page title -->
		<dv class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">Progress</h4>
				</div>
			</div>
		</dv>
		<!-- end page title -->

		<div class="row">
			<div class="col-12">
				<div class="timeline">
					<article class="timeline-item">
						<h2 class="m-0 d-none">&nbsp;</h2>
						<div class="time-show mt-0">
							<a href="#" class="btn btn-primary width-lg">Hari Ini</a>
						</div>
					</article>


					<?php foreach ($surat as $srt) : ?>

					<?php if ($srt->piket == 1 && $srt->persuratan == 0 && $srt->pimpinan == 0 ) { ?>
					<article class="timeline-item">
						<div class="timeline-desk">
							<div class="timeline-box">
								<span class="arrow"></span>
								<span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
								<h4 class="mt-0 font-16">08:05</h4>
								<p class="mb-0">Surat telah berada di <strong>Piket</strong></p>
							</div>
						</div>
					</article>
					<?php } ?>

					<?php if ($srt->piket == 1 && $srt->persuratan == 1 && $srt->pimpinan == 0 ) { ?>
					<article class="timeline-item timeline-item-left">
						<div class="timeline-desk">
							<div class="timeline-box">
								<span class="arrow-alt"></span>
								<span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
								<h4 class="mt-0 font-16">08:10</h4>
								<p>Surat telah sampai di <strong>Persuratan</strong></p>
								<div class="timeline-album">
									<a href="javascript: void(0);">
										<img alt="" src="assets/images/small/img-1.jpg">
									</a>
									<a href="javascript: void(0);">
										<img alt="" src="assets/images/small/img-2.jpg">
									</a>
									<a href="javascript: void(0);">
										<img alt="" src="assets/images/small/img-3.jpg">
									</a>
								</div>
							</div>
						</div>
					</article>
					<?php } ?>

					<?php if ($srt->piket == 1 && $srt->persuratan == 0 && $srt->pimpinan == 0 ) { ?>

					<article class="timeline-item">
						<div class="timeline-desk">
							<div class="timeline-box">
								<span class="arrow"></span>
								<span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
								<h4 class="mt-0 font-16">08:30</h4>
								<p class="mb-0">Surat sedang menuju ke <strong>Pimpinan</strong></p>
							</div>
						</div>
					</article>
					<?php } ?>

					<?php endforeach; ?>



					<article class="timeline-item">
						<h2 class="m-0 d-none">&nbsp;</h2>
						<div class="time-show mt-0">
							<a href="#" class="btn btn-primary width-lg">Selesai</a>
						</div>
					</article>

				</div>
			</div>

            <a href="<?php base_url()?>">Kembali</a>
		</div>
	</div>
</div>
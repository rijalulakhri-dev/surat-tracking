<div class="content">

	<!-- Start Content-->
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
							<li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
							<li class="breadcrumb-item active">Foo Tables</li>
						</ol>
					</div>
					<h4 class="page-title">Foo Tables</h4>
				</div>
			</div>
		</div>
		<!-- end page title -->

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="header-title">Filtering</h4>
						<p class="sub-header">
							include filtering in your FooTable.
						</p>

						<div class="mb-2">
							<div class="row row-cols-sm-auto g-2 align-items-center">
								<div class="col-12 text-sm-center">
									<select id="demo-foo-filter-status" class="form-select form-select-sm">
										<option value="">Show all</option>
										<option value="active">Active</option>
										<option value="disabled">Disabled</option>
										<option value="suspended">Suspended</option>
									</select>
								</div>
								<div class="col-12">
									<input id="demo-foo-search" type="text" placeholder="Search"
										class="form-control form-control-sm" autocomplete="on">
								</div>
							</div>
						</div>

						<div class="table-responsive">
							<table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0"
								data-page-size="7">
								<thead>
									<tr>
										<th data-toggle="true">Username</th>
										<th>Email</th>
										<th data-hide="phone">Password</th>
										<th>Level Akses</th>
										<th data-hide="phone, tablet">Status Aktivasi</th>
										<th data-hide="phone, tablet">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if ($pengguna) : ?>
									<?php foreach ($pengguna as $user) : ?>
									<tr>
										<td><?= $user->username; ?></td>
										<td><?= $user->email; ?></td>
										<td><?= $user->password; ?></td>
										<td><?= $user->level_access; ?></td>
										<td>
											<span
												class="badge label-table bg-<?= ($user->status_aktivasi == 1) ? 'success' : 'warning'; ?>">
												<?= ($user->status_aktivasi == 1) ? 'Aktif' : 'Menunggu Aktivasi'; ?>
											</span>
										</td>

										<td>
											<?php if ($user->status_aktivasi == 0) : ?>
											<a href="<?= site_url('auth/activateAccount/' . $user->id_user); ?>"
												class="btn btn-primary waves-effect waves-light">Aktivasi</a>
											<?php endif; ?>
										</td>
									</tr>
									<?php endforeach; ?>
									<?php else : ?>
									<tr>
										<td colspan="6">Tidak ada pengguna</td>
									</tr>
									<?php endif; ?>
								</tbody>


								<tfoot>
									<tr class="active">
										<td colspan="6">
											<div class="text-end">
												<ul
													class="pagination pagination-rounded justify-content-end footable-pagination mb-0">
												</ul>
											</div>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>

					</div>
				</div> <!-- end card -->
			</div> <!-- end col -->
		</div>
		<!-- end row -->

	</div> <!-- container -->

</div>
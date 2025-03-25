<!doctype html>
<link rel="stylesheet" href="../css/button_pop.css">
<html class="fixed  sidebar-left-collapsed">
	<head>
		<!-- Basic -->
		<?php include '../head.php' ?>
	</head>
	<body>
		<section class="body">
			<!-- start: header -->
			<?php include '../header.php';?>
			<!-- end: header -->
			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include 'sidebar_petender.php';?>
				<!-- end: sidebar -->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Sistem JKR E-Tender - Modul Konvensional</h2>
						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.php">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>
							</ol>
							<a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
					<!-- widget -->
					<div class="col-lg-12 ">
								<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">maklumat tender</h5>
								<div class="row">
									<div class="col-4">
										<section class="card mb-4">
											<div class="card-body bg-tertiary">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fas fa-life-ring"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Jumlah Tender</h4>
															<div class="info">
																<strong class="amount">1281</strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-uppercase">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-4">
										<section class="card mb-4">
											<div class="card-body bg-quaternary">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fas fa-life-ring"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Jumlah SST</h4>
															<div class="info">
																<strong class="amount">1281</strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-uppercase">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-4">
										<section class="card mb-4">
											<div class="card-body bg-quaternary">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fas fa-life-ring"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Jumlah JKR28</h4>
															<div class="info">
																<strong class="amount">1281</strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-uppercase">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									</div>
							</div>
					<!-- end widget -->
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<h2 class="card-title">Senarai Iklan</h2>
										<code>Senarai iklan yang dipaparkan adalah mengikut gred kelayakan pendaftaran syarikat.</code>
									</header>
									<div class="card-body">
										<table class="table table-bordered table-striped mb-0" id="datatable-default">
											<thead>
												<tr>
													<th width="1%" >Bil</th>
													<th width="28%">Nama Tender</th>
													<th width="12%" align="center" valign="middle">Kelayakan Pendaftaran</th>
													<th width="8%" align="center" valign="middle">Iklan</th>
													<th width="8%" align="center" valign="middle">Tarikh Taklimat/Lawatan Tapak</th>
													<th width="11%" align="center" valign="middle">Lokasi</th>
													<th width="11%" align="center" valign="middle">Jualan Tender</th>
													<th width="8%" align="center" valign="middle">Tarikh Tutup Tender</th>
												  <th width="13%" align="center">Tindakan</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td style="text-align: center;">1</td>
													<td>PEMASANGAN SISTEM TEKNOLOGI MAKLUMAT & KOMUNIKASI (ICT) BAGI CADANGAN HOSPITAL PARIT BUNTAR (76 KATIL), PARIT BUNTAR, PERAK (FASA 3 – KERJA-KERJA BANGUNAN) – TENDER SEMULA<br>
													<code>UPM/ME/LATIHAN/2023</code></td>
													<td align="center" valign="middle"><p>Gred G7<br>Bangunan<br>B01 dan B04</p></td>
													<td align="center" valign="middle">15/2/24</td>
													<td align="center" valign="middle"><a class="btn btn-primary btn-sm" href="#">Wajib</a><br>17/2/24</td>
													<td align="center" valign="middle">Dewan taklimat Sk Banir, Tapah, Perak</td>
													<td align="center" valign="middle">20/2/24 - 27/2/24</td>
													<td align="center" valign="middle">15/3/24</td>
													<td align="center" valign="middle">
														<div class="btn-group flex-wrap">
															<!--<a class="btn btn-warning btn-sm" href="dashboard_pmt.php"><i class="fas fa-edit fa-sm"></i></a>-->
															<a class="btn btn-primary btn-sm mb-1 mt-1 me-1 modal-with-move-anim ws-normal" href="#daftar_tender"><i class="fa fa-file fa-sm"></i> Papar</a>
														</div>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>
					<!--Daftar Tender-->
						<style>
							.modal-block-landscape {
								width: 70%; /* Adjust width to suit your needs */
								max-width: 1200px; /* Maximum width for larger screens */
								height: auto; /* Automatically adjust height based on content */
								max-height: 80%; /* Prevent it from becoming too tall */
								margin: auto; /* Center the modal */
							}

							.modal-block-landscape .card {
								display: flex;
								flex-direction: column;
								height: 100%; /* Make card fill the modal */
							}

							.modal-block-landscape .card-body {
								overflow-y: auto; /* Add scroll if content overflows */
							}
						</style>

						<div id="daftar_tender" class="zoom-anim-dialog modal-block modal-block-primary modal-block-landscape mfp-hide"> 
							<form class="form-horizontal form-bordered">
								<section class="card">
									<!-- Header Section -->
									<header class="card-header">
										<h2 class="card-title">Maklumat Ringkas Projek</h2>
									</header>

									<!-- Card Body -->
									<div class="card-body">
										<!-- Section 1: Tender Information -->
										<h4 class="mb-3"><strong>Maklumat Tender</strong></h4>
										<div class="row mb-3">
											<div class="col-md-6">
												<label for="tajukTender">Tajuk Tender</label>
												<textarea id="tajukTender" name="tajukTender" class="form-control" rows="3" placeholder="Masukkan tajuk tender"></textarea>
											</div>
											<div class="col-md-6">
												<label for="rujTender">Ruj. Tender</label>
												<input type="text" id="rujTender" name="rujTender" class="form-control" placeholder="Masukkan rujukan tender">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-md-6">
												<label for="jenisPeruntukan">Jenis Peruntukan</label>
												<select id="jenisPeruntukan" name="jenisPeruntukan" class="form-control">
													<option value="">Sila pilih</option>
													<option value="persekutuan">Persekutuan</option>
													<option value="negeri">Negeri</option>
												</select>
											</div>
											<div class="col-md-6">
												<label for="tempohSiap">Tempoh Siap Kerja/Kontrak</label>
												<input type="text" id="tempohSiap" name="tempohSiap" class="form-control" placeholder="Masukkan tempoh">
											</div>
										</div>

										<!-- Section 2: Lawatan Tapak -->
										<h4 class="mb-3"><strong>Lawatan Tapak</strong></h4>
										<div class="row mb-3">
											<div class="col-md-6">
												<label for="syaratKehadiran">Syarat Kehadiran</label>
												<select id="syaratKehadiran" name="syaratKehadiran" class="form-control">
													<option value="">Sila pilih</option>
													<option value="wajib">Wajib</option>
													<option value="digalakkan">Digalakkan</option>
													<option value="tidak">Tidak Wajib</option>
												</select>
											</div>
											<div class="col-md-6">
												<label for="tarikhLawatan">Tarikh Lawatan</label>
												<input type="date" id="tarikhLawatan" name="tarikhLawatan" class="form-control">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-md-6">
												<label for="masaLawatan">Masa Lawatan</label>
												<input type="time" id="masaLawatan" name="masaLawatan" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="lokasiLawatan">Lokasi</label>
												<textarea id="lokasiLawatan" name="lokasiLawatan" class="form-control" rows="3" placeholder="Masukkan lokasi"></textarea>
											</div>
										</div>

										<!-- Section 3: Maklumat Jualan -->
										<h4 class="mb-3"><strong>Maklumat Jualan</strong></h4>
										<div class="row mb-3">
											<div class="col-md-6">
												<label for="tarikhIklan">Tarikh Iklan</label>
												<input type="date" id="tarikhIklan" name="tarikhIklan" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="tarikhMulaJualan">Tarikh Mula Jualan</label>
												<input type="date" id="tarikhMulaJualan" name="tarikhMulaJualan" class="form-control">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-md-6">
												<label for="tarikhTutupJualan">Tarikh Tutup Jualan</label>
												<input type="date" id="tarikhTutupJualan" name="tarikhTutupJualan" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="masaTutupJualan">Masa Tutup Jualan</label>
												<input type="time" id="masaTutupJualan" name="masaTutupJualan" class="form-control">
											</div>
										</div>

										<!-- Section 4: Maklumat Kelayakan -->
										<h4 class="mb-3"><strong>Maklumat Kelayakan</strong></h4>
										<div class="row mb-3">
											<div class="col-md-6">
												<label for="tarafBumiputera">Taraf Bumiputera</label>
												<select id="tarafBumiputera" name="tarafBumiputera" class="form-control">
													<option value="">Sila pilih</option>
													<option value="bumiputera">Bumiputera</option>
													<option value="bukan">Bukan Bumiputera</option>
													<option value="terbuka">Terbuka</option>
												</select>
											</div>
											<div class="col-md-6">
												<label for="jenisSyarikat">Jenis Syarikat</label>
												<select id="jenisSyarikat" name="jenisSyarikat" class="form-control">
													<option value="">Sila pilih</option>
													<option value="t1">T1</option>
													<option value="a1">A1</option>
													<option value="a2">A2</option>
												</select>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-md-12">
												<label for="catatan">Catatan</label>
												<textarea id="catatan" name="catatan" class="form-control" rows="3" placeholder="Masukkan catatan (jika ada)"></textarea>
											</div>
										</div>
									</div>

									<!-- Footer -->
									<footer class="card-footer text-end">
										<button type="button button-dismiss" class="btn btn-danger">Tutup</button>
										<button type="submit" class="btn btn-primary">Berminat</button>
									</footer>
								</section>
							</form>


						</div>	
					<!-- end: page -->
				</section>
			</div>
		</section>
		<!-- Vendor -->
		<?php include '../script.php'?>
	</body>
</html>
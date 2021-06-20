<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>

<head>
	<title>Sewa - SeBat</title>
</head>

<div class="content-wrapper">
	<div class="content">


		<div class="row">
			<div class="col-md-12 container-fluid">

				<!-- User activity statistics
              <div class="card card-header">
                <h1>Pinjam</h1>
              </div> -->

				<!-- <?php
              include '<?= base_url(); ?>/conn.php';

              $query = mysqli_query($koneksi, "SELECT max(id_pinjam) as kodeTerbesar FROM pinjam");
              $data = mysqli_fetch_array($query);
              $id_pinjam = $data['kodeTerbesar'];

              // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
              // dan diubah ke integer dengan (int)
              $urutan = (int) substr($id_pinjam, 3, 3);

              // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
              $urutan++;

              // membentuk kode barang baru
              // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
              // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
              // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
              $huruf = "S-";
              $id_pinjam = $huruf . sprintf("%03s", $urutan);
              ?> -->
				<div class="card card-body">
					<form action="act/pinjam.php" method="POST">
						<div class="form-group">
							<input type="text" name="id_pinjam" class="form-control" value="<?= $id_pinjam ?>" readonly hidden>
						</div>
						<div class="form-group">
							<H3 for="exampleFormControlInput1">Nama Peminjam</H3>
							<br>
							<input type="text" name="nama_peminjam" class="form-control" placeholder="Nama Peminjam...">
						</div>
						<div class="form-group">
							<H3 for="exampleFormControlInput1">Nomor HP Peminjam</H3>
							<br>
							<input type="text" name="no_hp" min="11" class="form-control" placeholder="Nomor HP Peminjam...">
						</div>
						<div class="form-group">
							<input type="date" name="tgl_pinjam" class="form-control" value="<?= date("Y-m-d"); ?>" readonly hidden>
						</div>

						<h3>Kabel</h3>
						<br>
						<div class="form-group radio-section card-pinjam">
							<div class="row">
								<div class="col-md-auto">
									<label>
										<input type="radio" name="cable" value="micro">
										<span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
										<div class="radio-body"><img src="<?= base_url(); ?>/assets/img/cable/micro.png" alt=""></div>
									</label>
								</div>
								<div class="col-md-auto">
									<label>
										<input type="radio" name="cable" value="type-c">
										<span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
										<div class="radio-body"><img src="<?= base_url(); ?>/assets/img/cable/type-c.png" alt=""></div>
									</label>
								</div>
								<div class="col-md-auto">
									<label>
										<input type="radio" name="cable" value="lightning">
										<span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
										<div class="radio-body"><img src="<?= base_url(); ?>/assets/img/cable/lightning.png" alt=""></div>
									</label>
								</div>
								<div class="col-md-auto">
									<label>
										<input type="text" value="m" size="3" readonly>
										<input type="text" value="c" size="3" readonly>
										<input type="text" value="l" size="3" readonly>
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<h3>Durasi Pinjam</h3>
							<br>
							<div class="row harga">
								<div class="col-md-3">
									<label>
										<input type="radio" name="durasi" value="1000">
										<span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
										<div class="radio-body radio-text">30 Menit</div>
										<div class="radio-option radio-text">Rp<strong>1000</strong></div>
									</label>
								</div>
								<div class="col-md-3">
									<label>
										<input type="radio" name="durasi" value="2000">
										<span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
										<div class="radio-body radio-text">60 Menit</div>
										<div class="radio-option radio-text">Rp<strong>2000</strong></div>
									</label>
								</div>
								<div class="col-md-3">
									<label>
										<input type="radio" name="durasi" value="3000">
										<span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
										<div class="radio-body radio-text">90 Menit</div>
										<div class="radio-option radio-text">Rp<strong>3000</strong></div>
									</label>
								</div>
								<div class="w-100"><br></div>
								<div class="col-md-3">
									<label>
										<input type="radio" name="durasi" value="4000">
										<span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
										<div class="radio-body radio-text">2 Jam</div>
										<div class="radio-option radio-text">Rp<strong>4000</strong></div>
									</label>
								</div>
								<div class="col-md-3">
									<label>
										<input type="radio" name="durasi" value="10000">
										<span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
										<div class="radio-body radio-text">5 Jam</div>
										<div class="radio-option radio-text">Rp<strong>10000</strong></div>
									</label>
								</div>
								<div class="col-md-3">
									<label>
										<input type="radio" name="durasi" value="25000">
										<span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
										<div class="radio-body radio-text">24 Jam</div>
										<div class="radio-option radio-text">Rp<strong>25000</strong></div>
									</label>
								</div>
							</div>
							<div class="form-group">
								<input type="text" name="status" class="form-control" value="pinjam" readonly hidden>
							</div>
						</div>

						<br>
						<br>
						<!-- <div class="form-group total">
                    <div class="row">
                      <div class="col-md">
                        <p>Total:</p>
                      </div>
                      <div class="col-auto text-right">
                        <p>Rp</p>
                      </div>
                      <div class="col-md">
                        <p>0</p>
                      </div>
                    </div>
                  </div> -->
						<br>
						<br>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">&nbsp;</div>
								<div class="col-md-4"><button class="btn btn-primary btn-block">Pinjam</button></div>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>

	</div>




</div>


<footer class="footer mt-auto">
	<div class="copyright bg-white">
		<p>
			&copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
			<a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
		</p>
	</div>
	<script>
		var d = new Date();
		var year = d.getFullYear();
		document.getElementById("copy-year").innerHTML = year;

	</script>
</footer>

</div>
</div>

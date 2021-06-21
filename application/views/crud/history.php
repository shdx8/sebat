<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>

<head>
	<title>Riwayat - SeBat</title>
</head>

<div class="content-wrapper">
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- User activity statistics -->
				<div class="card card-default" id="user-activity">
					<div class="card card-table-border-none recent-orders" id="recent-orders">
						<div class="card-header justify-content-between">
							<h2>Recent Orders</h2>
							<div class="date-range-report ">
								<!--<span></span>-->
							</div>
						</div>
						<div class="card-body pt-0 pb-5">
							<table class="table card-table table-responsive table-responsive-large" style="width:100%">
								<thead>
									<tr>
										<th class="font-weight-bold text-reset">Order ID</th>
										<th class="font-weight-bold text-reset">Nama Peminjam</th>
										<th class="font-weight-bold text-reset">No HP</th>
										<th class="font-weight-bold text-reset">Kabel</th>
										<th class="font-weight-bold text-reset">Total</th>
										<th class="font-weight-bold text-reset">Order Date</th>
										<th class="font-weight-bold text-reset">Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php 
                        include '../conn.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from pinjam");
                        while($d = mysqli_fetch_array($data)){
                          ?>
									<tr>
										<td class="d-none d-lg-table-cell"><?php echo $d['id_pinjam']; ?></td>
										<td hidden><?php echo $no++; ?></td>
										<td class="d-none d-lg-table-cell"><?php echo $d['nama_peminjam']; ?></td>
										<td class="d-none d-lg-table-cell"><?php echo $d['no_hp']; ?></td>
										<td class="d-none d-lg-table-cell"><?php echo $d['kabel']; ?></td>
										<td class="d-none d-lg-table-cell">Rp<?php echo $d['total']; ?></td>
										<td class="d-none d-lg-table-cell"><?php echo $d['tgl_pinjam']; ?></td>
										<td>
											<?php if($d['status'] == 'pinjam'){ ?>
											<span class="badge badge-warning">Pinjam</span>
											<?php }else if($d['status'] == 'selesai'){ ?>
											<span class="badge badge-success">Selesai</span>
											<?php } ?>
										<td class="text-right">
											<div class="dropdown show d-inline-block widget-dropdown">
												<a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
													data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
												<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
													<?php if($d['status'] == 'pinjam'){ ?>
													<li class="dropdown-item">
														<a href="act/status.php?id_pinjam=<?= $d['id_pinjam'] ?>">Selesai</a>
													</li>
													<li class="dropdown-item">
														<a href="act/delete.php?id_pinjam=<?= $d['id_pinjam'] ?>">Remove</a>
													</li <?php }else if($d['status'] == 'selesai'){ ?> <li class="dropdown-item">
													<a href="act/delete.php?id_pinjam=<?= $d['id_pinjam'] ?>">Remove</a>
													</li>
													<?php } ?>
												</ul>
											</div>
										</td>
									</tr>
									<?php 
                        }
                        ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>




</div>



<!-- <script>
  $.ajax({
        url : "act/status.php",
        type: "POST",
        d : "status=selesai",
        success: function(d)
        {
            //data - response from server
            $('#response_div').html(d);
        }
    });
</script> -->


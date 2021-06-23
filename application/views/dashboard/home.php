<?php
$getUser = $this->session->userdata('session_user');
$getRole = $this->session->userdata('session_role');
?>
<head>
	<title>SeBat - Dashboard</title>
</head>
	<div class="content-wrapper">
		<div class="content">
			<div class="row">
				<div class="col-xl-3 col-sm-6">
					<div class="card card-mini mb-4">
						<div class="card-body stat">
							<h2 class="mb-1">123</h2>
							<p>Total Order</p>
							<div class="chartjs-wrapper">
								<canvas id="barChart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card card-mini  mb-4">
						<div class="card-body stat">
							<h2 class="mb-1">123</h2>
							<p>Sedang dipinjam</p>
							<div class="chartjs-wrapper">
								<canvas id="dual-line"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card card-mini mb-4">
						<div class="card-body stat">
							<h2 class="mb-1">50</h2>
							<p>Powerbank Tersedia</p>
							<div class="chartjs-wrapper">
								<canvas id="area-chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card card-mini mb-4">
						<div class="card-body stat">
							<h2 class="mb-1">Rp123K</h2>
							<p>Total Revenue</p>
							<div class="chartjs-wrapper">
								<canvas id="line"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">

					<!-- User activity statistics -->
					<div class="card card-default" id="user-activity">
						<div class="row no-gutters">
							<div class="col-xl-12">
								<div class="border-right">
									<div class="card-header justify-content-between py-5">
										<h2>User Activity</h2>
										<div class="date-range-report ">
											<span></span>
										</div>
									</div>
									<ul
										class="nav nav-tabs nav-style-border justify-content-between justify-content-xl-start border-bottom"
										role="tablist">
										<li class="nav-item">
											<a class="nav-link active pb-md-0" data-toggle="tab" href="#user" role="tab" aria-controls=""
												aria-selected="true">
												<span class="type-name">Dipinjam</span>
												<h4 class="d-inline-block mr-2 mb-3">5248</h4>
												<!-- <span class="text-success ">5%
                              <i class="mdi mdi-arrow-up-bold"></i>
                            </span> -->
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link pb-md-0" data-toggle="tab" href="#session" role="tab" aria-controls=""
												aria-selected="false">
												<span class="type-name">Total order</span>
												<h4 class="d-inline-block mr-2 mb-3">638</h4>
												<!-- <span class="text-success ">20%
                              <i class="mdi mdi-arrow-up-bold"></i>
                            </span> -->
											</a>
										</li>

									</ul>
									<div class="card-body">
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="home-tab">
												<canvas id="activity" class="chartjs"></canvas>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>

		</div>




	</div>

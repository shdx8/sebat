<?php
$getUser = $this->session->userdata('session_user');
$getRole = $this->session->userdata('session_role');
?>
<div id="sidebar" class="sidebar sidebar-with-footer">
	<!-- Aplication Brand -->
	<div class="app-brand">
		<a href="index.php">
			<img src="<?= base_url(); ?>/assets/img/logo/logo-white.png" alt="" class="brand-logo">
			<!--
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
              height="33" viewBox="0 0 30 33">
              <g fill="none" fill-rule="evenodd">
                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
              </g>
            </svg>
          -->
			<span class="brand-name"><img src="<?= base_url(); ?>/assets/img/logo/sebat-bw.png" alt=""></span>
		</a>
	</div>
	<!-- begin sidebar scrollbar -->
	<div class="sidebar-scrollbar">
		<!-- sidebar menu -->
		<ul class="nav sidebar-inner" id="sidebar-menu">
			<li class="has-sub expand">
				<a class="sidenav-item-link" href="<?= base_url('Dashboard'); ?>">
					<i class="mdi mdi-view-dashboard-outline"></i>
					<span class="nav-text">Dashboard</span>
				</a>
			</li>
		<!-- //if($getRole==2) {
		//echo ' -->
			<li class="has-sub">
				<a class="sidenav-item-link" href="Pinjam">
					<i class="mdi mdi-swap-horizontal-bold"></i>
					<span class="nav-text">Pinjam</span>
				</a>
			</li>
			<li class="has-sub">
				<a class="sidenav-item-link" href="Riwayat">
					<i class="mdi mdi-history"></i>
					<span class="nav-text">Riwayat</span>
				</a>
			</li>
		<li class="has-sub">
				<a class="sidenav-item-link" href="Help">
					<i class="mdi mdi-information"></i>
					<span class="nav-text">Bantuan</span>
				</a>
			</li>
			<!-- ';}?> -->

		<?php
		if($getRole==1) {
		echo '<li class="has-sub">
				<a class="sidenav-item-link" href="User">
					<i class="mdi mdi-card-account-details"></i>
					<span class="nav-text">Data User</span>
				</a>
			</li>';}?>

 
			<!-- <li class="has-sub">
              <a class="sidenav-item-link" href="profile.php">
                <i class="mdi mdi-account"></i>
                <span class="nav-text">Profile</span>
              </a>
            </li> -->
			
		</ul>
	</div>
</div>

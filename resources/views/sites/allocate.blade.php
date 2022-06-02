<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>VMS</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="topbar-logo-header">
						<div class="">
							<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><a href="list-supervisor.html"><i class='bx bx-group'></i></a>
											</div>
											<div class="app-title">Supervisors</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-burning text-white"><a href="list-resident.html"><i class='bx bx-group'></i></a>
											</div>
											<div class="app-title">Residents</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-lush text-white"><a href="list-visitor.html"><i class='bx bx-group'></i></a>
											</div>
											<div class="app-title">Visitors</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-kyoto text-dark"><a href="list-site.html"><i class='bx bx-file'></i></a>
											</div>
											<div class="app-title">Sites</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-blues text-dark"><a href="#"><i class='bx bx-file'></i></a>
											</div>
											<div class="app-title">Reports</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">2</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Visitors<span class="msg-time float-end">14 Sec
												ago</span></h6>
													<p class="msg-info">5 new visitors</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-file"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Residents <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">5 new residents</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">3</span>
									<i class='bx bx-comment'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
												ago</span></h6>
													<p class="msg-info">All the Lorem Ipsum generators</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Pauline</p>
								<p class="designattion mb-0">Administrator</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Change Password</span></a>
							</li>
							<li><a class="dropdown-item" href="dashboard-admin"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="index.html"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--navigation-->
		<div class="nav-container">
			<div class="mobile-topbar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">VMS</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<nav class="topbar-nav">
				<ul class="metismenu" id="menu">
					<li>
						<a href="dashboard-admin.html" class="has-arrow">
							<div class="parent-icon"><i class='bx bx-home-circle'></i>
							</div>
							<div class="menu-title">Dashboard</div>
						</a>
					</li>
					<li>
						<a href="javascript:;" class="has-arrow">
							<div class="parent-icon"><i class="bx bx-category"></i>
							</div>
							<div class="menu-title">Settings</div>
						</a>
						<ul>
							<li> <a href="list-department.html"><i class="bx bx-right-arrow-alt"></i>Department</a>
							</li>
							<li> <a href="list-role.html"><i class="bx bx-right-arrow-alt"></i>Role</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:;" class="has-arrow">
							<div class="parent-icon"><i class="bx bx-category"></i>
							</div>
							<div class="menu-title">User</div>
						</a>
						<ul>
							<li> <a href="add-employee.html"><i class="bx bx-right-arrow-alt"></i>Add Employee</a>
							</li>
							<li> <a href="list-employee.html"><i class="bx bx-right-arrow-alt"></i>View Employee</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon icon-color-6"> <i class="bx bx-category"></i>
							</div>
							<div class="menu-title">Sites</div>
						</a>
						<ul>
							<li> <a href="add-site.html"><i class="bx bx-right-arrow-alt"></i>Add Site</a>
							</li>
							<li> <a href="list-site.html"><i class="bx bx-right-arrow-alt"></i>View Sites</a>
							</li>
							<li> <a href="site-allocation.html"><i class="bx bx-right-arrow-alt"></i>Site Allocation</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon icon-color-6"> <i class="bx bx-category"></i>
							</div>
							<div class="menu-title">Leave</div>
						</a>
						<ul>
							<li> <a href="list-attendance.html"><i class="bx bx-right-arrow-alt"></i>Attendance</a>
							</li>
							<li> <a href="list-leave.html"><i class="bx bx-right-arrow-alt"></i>Leaves</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class='bx bx-category'></i>
							</div>
							<div class="menu-title">Visitors</div>
						</a>
						<ul>
							<li> <a href="add-visitor.html"><i class="bx bx-right-arrow-alt"></i>Add Visitor</a>
							</li>
							<li> <a href="list-visitor.html"><i class="bx bx-right-arrow-alt"></i>View Visitors</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:;" class="has-arrow">
							<div class="parent-icon"><i class="bx bx-category"></i>
							</div>
							<div class="menu-title">Payroll</div>
						</a>
						<ul>
							<li> <a href="list-department.html"><i class="bx bx-right-arrow-alt"></i>Employee Payroll</a>
							</li>
						</ul>
					</li>
					<!-- <li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class="bx bx-category"></i>
							</div>
							<div class="menu-title">Residents</div>
						</a>
						<ul>
							<li> <a href="add-resident.html"><i class="bx bx-right-arrow-alt"></i>Add Resident</a>
							</li>
							<li> <a href="list-resident.html"><i class="bx bx-right-arrow-alt"></i>View Residents</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class='bx bx-category'></i>
							</div>
							<div class="menu-title">Visitors</div>
						</a>
						<ul>
							<li> <a href="add-visitor.html"><i class="bx bx-right-arrow-alt"></i>Add Visitor</a>
							</li>
							<li> <a href="list-visitor.html"><i class="bx bx-right-arrow-alt"></i>View Visitors</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class='bx bx-category'></i>
							</div>
							<div class="menu-title">Reports</div>
						</a>
						<ul>
							<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Visitor Reports</a>
							</li>
						</ul>
					</li> -->
				</ul>
			</nav>
		</div>
		<!--end navigation-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Site Allocation</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<hr/>

				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<h4>Supervisor</h4><hr />
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">
												<img src="assets/images/avatars/avatar-1.png" width="50" height="50" class="rounded-circle" alt="" />
												Michle Jhon</h6>
												<span class="text-secondary">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="staff">
													</div>
												</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">
												<img src="assets/images/avatars/avatar-2.png" width="50" height="50" class="rounded-circle" alt="" />
												Pauline Bird</h6>
												<span class="text-secondary">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="staff">
													</div>
												</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">
												<img src="assets/images/avatars/avatar-3.png" width="50" height="50" class="rounded-circle" alt="" />
												Tiger Nixon</h6>
												<span class="text-secondary">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="staff">
													</div>
												</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">
												<img src="assets/images/avatars/avatar-4.png" width="50" height="50" class="rounded-circle" alt="" />
												Ralph Alva</h6>
												<span class="text-secondary">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="staff">
													</div>
												</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">
												<img src="assets/images/avatars/avatar-5.png" width="50" height="50" class="rounded-circle" alt="" />
												John Roman</h6>
												<span class="text-secondary">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="staff">
													</div>
												</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body">
										<h4>Site List</h4><hr />
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">
												<img src="assets/images/sites/beaverton.jpg" width="50" height="50" class="rounded-circle" alt="" />
												Beaverton Court</h6>
												<span class="text-secondary">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
													</div>
												</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">
												<img src="assets/images/sites/sunville.jpg" width="50" height="50" class="rounded-circle" alt="" />
												Sunville Condo</h6>
												<span class="text-secondary">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
													</div>
												</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">
												<img src="assets/images/sites/beaverton.jpg" width="50" height="50" class="rounded-circle" alt="" />
												Beaverton Court</h6>
												<span class="text-secondary">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
													</div>
												</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">
												<img src="assets/images/sites/sunville.jpg" width="50" height="50" class="rounded-circle" alt="" />
												Sunville Condo</h6>
												<span class="text-secondary">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
													</div>
												</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">
												<img src="assets/images/sites/beaverton.jpg" width="50" height="50" class="rounded-circle" alt="" />
												Beaverton Court</h6>
												<span class="text-secondary">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
													</div>
												</span>
											</li>
										<br />
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-3">
								
							</div>
							<div class="col-9">
								<button class="btn btn-primary success" type="button">Save Site Allocation</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2022. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="assets/plugins/sweetalerts/custom-sweetalert.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>
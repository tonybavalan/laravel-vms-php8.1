@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
				<div class="col">
					<div class="card radius-10 ">
						<div class="card-body">
						<div class="d-flex align-items-center">
							<h5 class="mb-0 text-primary">23</h5>
							<div class="ms-auto">
								<i class="bx bx-group fs-3 text-primary"></i>
							</div>
						</div>
						<div class="progress my-2" style="height:4px;">
							<div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="d-flex align-items-center">
							<p class="mb-0">Pre Checkin</p>
						</div>
					</div>
					</div>
				</div>
				<div class="col">
					<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<h5 class="mb-0 text-success">5</h5>
							<div class="ms-auto">
								<i class="bx bx-group fs-3 text-success"></i>
							</div>
						</div>
						<div class="progress my-2" style="height:4px;">
							<div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="d-flex align-items-center">
							<p class="mb-0">Total Checkin</p>
						</div>
					</div>
					</div>
				</div>
				<div class="col">
					<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<h5 class="mb-0 text-danger">127</h5>
							<div class="ms-auto">
								<i class="bx bx-group fs-3 text-danger"></i>
							</div>
						</div>
						<div class="progress my-2" style="height:4px;">
							<div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="d-flex align-items-center">
							<p class="mb-0">Total Checkout</p>
						</div>
					</div>
				</div>
				</div>
				<div class="col">
					<div class="card radius-10">
						<div class="card-body">
						<div class="d-flex align-items-center">
							<h5 class="mb-0 text-warning">500</h5>
							<div class="ms-auto">
								<i class="bx bx-group fs-3 text-warning"></i>
							</div>
						</div>
						<div class="progress my-2" style="height:4px;">
							<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="d-flex align-items-center">
							<p class="mb-0">Repeated Visitors</p>
						</div>
					</div>
					</div>
				</div>
			</div><!--end row-->
		
		<div class="row">
			<div class="col-12 col-lg-8 col-xl-8 d-flex">
				<div class="card radius-10 w-100">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<h6 class="mb-0">Visitors </h6>
						</div>
						<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
						</div>
					</div>
					
					<div class="chart-container-1">
						<canvas id="chart1"></canvas>
					</div>
				</div>
				
				</div>
			</div>
		
			<div class="col-12 col-lg-4 col-xl-4 d-flex">
				<div class="card radius-10 overflow-hidden w-100">
					<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<h6 class="mb-0">Total Visitor Status</h6>
						</div>
						<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
						</div>
					</div>
					<div class="chart-container-2 my-3">
						<canvas id="chart2"></canvas>
						</div>
					</div>
					<div class="table-responsive">
					<table class="table align-items-center mb-0">
						<tbody>
						<tr>
							<td><i class="bx bxs-circle me-2" style="color: #14abef"></i>Main Gate</td>
							<td>856</td>
						</tr>
						<tr>
							<td><i class="bx bxs-circle me-2" style="color: #02ba5a"></i>Side Gate</td>
							<td>602</td>
						</tr>
						</tbody>
					</table>
					</div>
				</div>
			</div>
			</div>
			<!--End Row-->

		</div>
			
	</div>
	</div>
	<!--end page wrapper -->
@endsection

@pushOnce('scripts')
	<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="assets/plugins/jquery-knob/excanvas.js"></script>
	<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
	<script>
		$(function() {
			$(".knob").knob();
		});
	</script>
	<script src="assets/js/index.js"></script>
@endpushOnce

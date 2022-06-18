@extends('layouts.app')

@section('title', 'Sites')

@section('content')
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
							<li class="breadcrumb-item active" aria-current="page">VIEW SITES</li>
						</ol>
					</nav>
				</div>
				<div class="ms-auto">
					
				</div>
			</div>
			<!--end breadcrumb-->
			
			<hr/>
			<div class="card border-top border-0 border-4 border-primary">
				<div class="card-body">
					<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>Image</th>
									<th>Site Name</th>
									<th>Postalcode</th>
									<th>MCST Number</th>
									<th>MA Name</th>
									<th>MA Contact Info</th>
									<th>Shift Type</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach($sites as $site)
								<tr>
									<td><img src="{{ asset($site->avatar) }}" width="50" height="50" class="rounded-circle" alt="" onerror="this.src='{{ asset('assets/images/sites/beaverton.jpg') }}'"/></td>
									<td>{{ $site->name }}</td>
									<td>{{ $site->postal_code }}</td>
									<td>{{ $site->mcst_number }}</td>
									<td>{{ $site->ma_name }}</td>
									<td>{{ $site->ma_contact_number }} 
										<br/>
										{{ $site->ma_contact_email }}
									</td>
									@if($site->shift_type =='1')
										<td>Day</td>
									@elseif($site->shift_type =='2')
										<td>Night</td>
									@else
										<td>Dynamic</td>
									@endif
									<td>
										<div class="dropdown">
											<div class="cursor-pointer font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded'></i>
											</div>
											<div class="dropdown-menu dropdown-menu-end"> 
												<a class="dropdown-item" href="view-site.html">View</a>
												<a class="dropdown-item" href="javascript:;">Delete</a>
											</div>
										</div>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!--end page wrapper -->
@endsection

@pushOnce('scripts')
	<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
@endpushOnce
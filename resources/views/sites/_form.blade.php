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
						<li class="breadcrumb-item active" aria-current="page">SITES</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				
			</div>
		</div>
		<!--end breadcrumb-->
		<hr/>
		<div class="row">					
			<div class="col-xl-12 mx-auto">
				<div class="card border-top border-0 border-4 border-primary">
					<div class="card-body">
						<div class="p-4 border rounded">
							<form class="row g-3 needs-validation" method="post" action="{{ route('sites.store') }}" novalidate>
								@csrf
								<label for="validationCustom01" class="form-label">Site Image</label>
								<div class="col-md-6 input-group mb-3">
									<input type="file" class="form-control" id="inputGroupFile02">
									<label class="input-group-text" for="inputGroupFile02">Upload</label>
								</div>
								<div class="col-md-6">
									<label for="validationCustom01" class="form-label">Site Name</label>
									<input type="text" class="form-control" id="validationCustom01" value="" name="name" required>
								</div>
								<div class="col-md-6">
									<label for="validationCustom04" class="form-label">Postalcode</label>
									<input type="text" class="form-control" id="validationCustom04" name="postal_code" required>
								</div>
								<div class="col-md-6">
									<label for="validationCustom05" class="form-label">MCST Number</label>
									<input type="text" class="form-control" id="validationCustom05" name="mcst_number" required>
								</div>
								<div class="col-md-6">
									<label for="validationCustom06" class="form-label">MA Name</label>
									<input type="text" class="form-control" id="validationCustom06" name="ma_name" required>
								</div>
								<div class="col-md-6">
									<label for="validationCustom07" class="form-label">MA Contact Number</label>
									<input type="text" class="form-control" id="validationCustom07" name="ma_contact_number" required>
								</div>
								<div class="col-md-6">
									<label for="validationCustom08" class="form-label">MA Contact Email</label>
									<input type="text" class="form-control" id="validationCustom08" name="ma_contact_email" required>
								</div>										
								<div class="col-md-6">
									<label for="validationCustom09" class="form-label">Company Name</label>
									<input type="text" class="form-control" id="validationCustom09" name="company_name" required>
								</div>
								<div class="col-md-6">
									<label for="validationCustom03" class="form-label">Shift Type</label><br />
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="shift_type" id="inlineRadio1" value="1" checked="checked">
										<label class="form-check-label" for="inlineRadio1">Day</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="shift_type" id="inlineRadio2" value="2">
										<label class="form-check-label" for="inlineRadio2">Night</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="shift_type" id="inlineRadio2" value="3">
										<label class="form-check-label" for="inlineRadio2">Dynamic</label>
									</div>
								</div>
								<div class="col-12">
									<button class="btn btn-primary success" type="submit">Save</button>
									<button class="btn btn-warning" type="reset">Clear</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end row-->
	</div>
</div>
<!--end page wrapper -->
@endsection

@pushOnce('scripts')
	<script src="{{ asset('assets/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.prototype.slice.call(forms)
				.forEach(function(form) {
					form.addEventListener('submit', function(event) {
						if (!form.checkValidity()) {
							event.preventDefault()
							event.stopPropagation()
						}

						form.classList.add('was-validated')
					}, false)
				})
		})()

		$(document).ready(function() {
			$('#inputGroupFile02').val('');
		});
	</script>
@endpushOnce
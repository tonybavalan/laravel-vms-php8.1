@extends('layouts.app')

@section('title', 'Employees')

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
						<li class="breadcrumb-item active" aria-current="page">Add Employee</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">

			</div>
		</div>
		<!--end breadcrumb-->
		<hr />
		<div class="row">
			<div class="col-xl-12 mx-auto">
				<div class="card border-top border-0 border-4 border-primary">
					<div class="card-body">
						<div class="p-4 border rounded">
							<form class="row g-3 needs-validation" action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data" novalidate>
								@csrf
								<label for="validationCustom01" class="form-label">Photo</label>
								<div class="col-md-6 input-group mb-3">
									<input type="file" class="form-control" id="avatar" name="avatar">
									<label class="input-group-text" for="avatar">Upload</label>
								</div>
								<div class="col-md-6">
									<label for="validationCustom01" class="form-label">Name</label>
									<!-- <input type="text" class="form-control" id="validationCustom01" value="" required> -->
									<input type="text" class="form-control" id="validationCustom01" name="name">
								</div>
								<!-- <div class="col-md-4">
									<label for="validationCustomUsername" class="form-label">Username</label>
									<div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend">@</span>
										<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
										<div class="invalid-feedback">Please choose a username.</div>
									</div>
								</div> -->
								<div class="col-md-6">
									<label for="validationCustom03" class="form-label">IC Number</label>
									<input type="text" class="form-control" id="validationCustom02" name="ic_number" required>
									<div class="invalid-feedback">Please provide a valid IC Number.</div>
								</div>
								<div class="col-md-6">
									<label for="validationCustom03" class="form-label">Mobile</label>
									<input type="text" class="form-control" id="validationCustom03" name="phno" required>
									<div class="invalid-feedback">Please provide a valid Mobile.</div>
								</div>
								<div class="col-md-6">
									<label for="validationCustom04" class="form-label">Email</label>
									<input type="text" class="form-control" id="validationCustom04" name="email" required>
									<div class="invalid-feedback">Please provide a valid Email.</div>
								</div>
								<div class="col-md-6">
									<label for="validationCustom04" class="form-label">Deprtment</label>
									<select class="form-select" id="validationCustom04" name="department_id" required>
										<option selected disabled value="">Choose...</option>
										@foreach($departments as $department )
											<option value="{{ $department->id }}">{{ $department->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="col-md-6">
									<label for="validationCustom04" class="form-label">Role</label>
									<select class="form-select" id="validationCustom04" name="role_id" required>
										<option selected disabled value="">Choose...</option>
										@foreach($roles as $role )
											<option value="{{ $role->id }}">{{ $role->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="col-md-6">
									<label for="validationCustom04" class="form-label">Shift Type</label><br />
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="shift_type" id="inlineRadio1" value="1" checked="checked">
										<label class="form-check-label" for="inlineRadio1">Permanant</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="shift_type" id="inlineRadio2" value="2">
										<label class="form-check-label" for="inlineRadio2">Releif</label>
									</div>
									<div class="invalid-feedback">Please select a valid Shift Type.</div>
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
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
	<p class="mb-0">Copyright © 2022. All right reserved.</p>
</footer>
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
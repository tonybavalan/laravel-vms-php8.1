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
									@foreach($managers as $manager)
										<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
											<h6 class="mb-0">
												<img src="{{ asset($manager->avatar) }}" width="50" height="50" class="rounded-circle" alt="" onerror="this.src='{{ asset('assets/images/sites/beaverton.jpg') }}'"/>
												{{ $manager->name }}
											</h6>
											<span class="text-secondary">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="manager_id" id="inlineRadio1" value="{{ $manager->id }}">
												</div>
											</span>
										</li>
									@endforeach
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="card">
								<div class="card-body">
									<h4>Site List</h4><hr />
									<ul class="list-group list-group-flush">
									@foreach($sites as $site)
										<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
											<h6 class="mb-0">
												<img src="{{ asset($site->avatar) }}" width="50" height="50" class="rounded-circle" alt="" onerror="this.src='{{ asset('assets/images/sites/beaverton.jpg') }}'"/>
												{{ $site->name }}
											</h6>
											<span class="text-secondary">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="site_id" id="flexCheckDefault1" value="{{ $site->id }}">
												</div>
											</span>
										</li>
									@endforeach
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
@endsection

@pushOnce('scripts')
<script>

  $(".success").click(function(event){
      event.preventDefault();

      let manager_id = $("input[name=manager_id]:checked").val();

	  const site_id = [];

	  $("input:checkbox[name=site_id]:checked").each(function(){
			site_id.push($(this).val());
		});

      $.ajax({
        url: "{{ route('sites.allocate') }}",
        type: "POST",
        data:{
          	employee_id:manager_id,
          	sites_id:site_id,
          	_token: "{{ csrf_token() }}"
        },
        success:function(response){
          	console.log(response);
          	if(response) {
				alert("sites allocated to employee successfully");
            	// $('.success').text(response.success);
            	// $("#ajaxform")[0].reset();
          	}
        },
        error: function(error) {
         	console.log(error);
        }
       });
    });

</script>
@endpushOnce
@extends('dashboard')
@section('content')

 <section class="">
	<!-- Jumbotron -->
	<div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
	  <div class="container">
		<div class="row gx-lg-5 align-items-center">
		  <div class="col-lg-6 mb-5 mb-lg-0">
			<img src="{{ asset('images/bfar.png') }}"
			class="img-fluid" alt="Sample image">
		  </div>
  
		  <div class="col-lg-6 mb-5 mb-lg-0">
			<div class="card">
			  <div class="card-body py-5 px-md-5">
				<main class="login-form">

					

				<form method="post" action="{{ route('login.custom') }}">

					
					
				  <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
						<p class="lead fw-bold mb-5 me-">Clarin Freshwater Fish Farm Record Management System</p>
				  </div>

				  @if (session()->has('error'))

						<div class="alert alert-danger">
							{{ session()->get('error') }}
						</div>

					@endif
					
					@csrf
				  <!-- Email input -->
				  <div class="form-outline mb-4">
					<input type="text" name="email" class="form-control" placeholder="Email" />
						@if ($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
				  </div>
  
				  <!-- Password input -->
				  <div class="form-outline mb-4">
					<input type="password" name="password" class="form-control" placeholder="Password" />
						@if ($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
				  </div>
  
				  <!-- Submit button -->
				  <button type="submit" class="btn btn-primary btn-block mb-4">
					LOGIN
				  </button>
				</form>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<!-- Jumbotron -->
	<div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. All rights reserved.
    </div>
    <!-- Copyright -->
  </div>
</section>
@endsection


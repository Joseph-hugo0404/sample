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

				<main class="signup-form">

                <form action="{{ route('register.custom') }}" method="POST">
										
				  <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
						<p class="lead fw-bold mb-5 me-">REGISTER NEW ADMIN</p>
				  </div>

				     @if (session()->has('error'))
						<div class="alert alert-danger">
							{{ session()->get('error') }}
						</div>

					@endif
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
					@csrf
				  <!-- Name input -->
				  <div class="form-outline mb-4">
					<input type="Text" name="name" class="form-control" placeholder="Name" />
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
				  </div>
  
				  <!-- Email input -->
				  <div class="form-outline mb-4">
					<input type="text" name="email" class="form-control" placeholder="Email" />
                            @if($errors->has('email'))
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
				  <input type="hidden" name="address" value="None" />
				  <input type="hidden" name="contact_number" value="None" />
				  <input type="hidden" name="image" value="noimage.png" />
				  
				  <button type="submit" class="btn btn-success btn-block mb-4">
					Sign Up
				  </button>
                  <div class="btn btn-primary btn-block mb-4 float-end">
                    <a href="{{ route('login') }}" style="color: white;text-decoration:none;">Login</a>
                </div>
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
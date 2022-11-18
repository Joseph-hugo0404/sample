@extends('dashboard')

@section('content')

<h2 class="mt-3">Transaction Management</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    	<li class="breadcrumb-item"><a href="/all_transaction">Transaction</a></li>
    	<li class="breadcrumb-item active">Add New Transaction</li>
  	</ol>
</nav>

<div class="row mt-4">
	<div class="col-md-5">
		<div class="card">
			<div class="card-header">Add New Transaction</div>
			<div class="card-body">
				<form method="POST" action="{{ route('all_transaction.add_validation') }}">
					@csrf
					<div class="form-group mb-3">
		        		<label><b>Name</b></label>
		        		<input type="text" name="name" class="form-control" placeholder="name" />
		        		@if($errors->has('name'))
		        		<span class="text-danger">{{ $errors->first('name') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Address</b></label>
		        		<input type="text" name="address" class="form-control" placeholder="address">
		        		@if($errors->has('address'))
		        			<span class="text-danger">{{ $errors->first('address') }}</span>
		        		@endif
		        	</div>
                    <div class="form-group mb-3">
		        		<label><b>Contact Number</b></label>
		        		<input type="tel" pattern="((^(\+)(\d){12}$)|(^\d{11}$))" name="contact_number" class="form-control" placeholder="contact_number">
		        		@if($errors->has('contact_number'))
		        			<span class="text-danger">{{ $errors->first('contact_number') }}</span>
		        		@endif
		        	</div>
                    <div class="form-group mb-3">
		        		<label><b>Transaction Date</b></label>
		        		<input type="date" name="transaction_date" class="form-control" placeholder="transaction_date">
		        		@if($errors->has('transaction_date'))
		        			<span class="text-danger">{{ $errors->first('transaction_date') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Tilapia</b></label>
		        		<input type="number" name="tilapia" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="tilapia">
		        		@if($errors->has('tilapia'))
		        			<span class="text-danger">{{ $errors->first('tilapia') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Ornamental</b></label>
		        		<input type="number" name="ornamental" min="0" oninput="validity.valid||(value='');" name="ornamental" class="form-control" placeholder="ornamental">
		        		@if($errors->has('ornamental'))
		        			<span class="text-danger">{{ $errors->first('ornamental') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Carp</b></label>
		        		<input type="number" name="carp" min="0" oninput="validity.valid||(value='');" name="carp" class="form-control" placeholder="carp">
		        		@if($errors->has('carp'))
		        			<span class="text-danger">{{ $errors->first('carp') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Beetle Fish</b></label>
		        		<input type="number" name="beetle_fish" min="0" oninput="validity.valid||(value='');" name="beetle_fish" class="form-control" placeholder="beetle_fish">
		        		@if($errors->has('beetle_fish'))
		        			<span class="text-danger">{{ $errors->first('beetle_fish') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>cat Fish</b></label>
		        		<input type="number" name="cat_fish" min="0" oninput="validity.valid||(value='');" name="cat_fish" class="form-control" placeholder="cat_fish">
		        		@if($errors->has('cat_fish'))
		        			<span class="text-danger">{{ $errors->first('cat_fish') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<input type="submit" class="btn btn-primary" value="Add" />
		        	</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
@extends('dashboard')

@section('content')

<h2 class="mt-3">Price Management</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    	<li class="breadcrumb-item"><a href="/all_transaction">Price</a></li>
    	<li class="breadcrumb-item active">Edit Selected Price</li>
  	</ol>
</nav>

<div class="row mt-4">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">Edit Selected Price & Fish Stock</div>
			<div class="card-body">
				<form method="POST" action="{{ route('price.edit_validation') }}">
					@csrf
					<div class="form-group mb-3">
		        		<label><b>Tilapia</b></label>
		        		<input type="number" name="tilapia" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="tilapia" value="{{ $data->tilapia }}">
		        		@if($errors->has('tilapia'))
		        			<span class="text-danger">{{ $errors->first('tilapia') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Tilapia Fish Stock</b></label>
		        		<input type="number" name="tilapia_stock" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="tilapia" value="{{ $data->tilapia }}">
		        		@if($errors->has('tilapia_stock'))
		        			<span class="text-danger">{{ $errors->first('tilapia_stock') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Ornamental</b></label>
		        		<input type="number" name="ornamental" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="ornamental" value="{{ $data->ornamental }}">
		        		@if($errors->has('ornamental'))
		        			<span class="text-danger">{{ $errors->first('ornamental') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Ornamental Fish Stock</b></label>
		        		<input type="number" name="ornamental_stock" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="ornamental" value="{{ $data->ornamental }}">
		        		@if($errors->has('ornamental_stock'))
		        			<span class="text-danger">{{ $errors->first('ornamental_stock') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Carp</b></label>
		        		<input type="number" name="carp" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="carp" value="{{ $data->carp }}">
		        		@if($errors->has('carp'))
		        			<span class="text-danger">{{ $errors->first('carp') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Carp Fish Stock</b></label>
		        		<input type="number" name="carp_stock" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="carp" value="{{ $data->carp }}">
		        		@if($errors->has('carp_stock'))
		        			<span class="text-danger">{{ $errors->first('carp_stock') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Beetle Fish </b></label>
		        		<input type="number" name="beetle_fish" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="beetle_fish" value="{{ $data->beetle_fish }}">
		        		@if($errors->has('beetle_fish'))
		        			<span class="text-danger">{{ $errors->first('beetle_fish') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Beetle Fish Stock</b></label>
		        		<input type="number" name="beetle_fish_stock" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="beetle_fish" value="{{ $data->beetle_fish }}">
		        		@if($errors->has('beetle_fish_stock'))
		        			<span class="text-danger">{{ $errors->first('beetle_fish_stock') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Cat Fish</b></label>
		        		<input type="number" name="cat_fish" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="cat_fish" value="{{ $data->cat_fish }}">
		        		@if($errors->has('cat_fish'))
		        			<span class="text-danger">{{ $errors->first('cat_fish') }}</span>
		        		@endif
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>Cat Fish Stock</b></label>
		        		<input type="number" name="cat_fish_stock" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="cat_fish" value="{{ $data->cat_fish }}">
		        		@if($errors->has('cat_fish_stock'))
		        			<span class="text-danger">{{ $errors->first('cat_fish_stock') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<input type="hidden" name="hidden_id" value="{{ $data->id }}" />
		        		<input type="submit" class="btn btn-primary" value="Edit" />
		        	</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
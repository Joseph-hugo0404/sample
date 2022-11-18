@extends('dashboard')

@section('content')
<h2 class="mt-3">Transaction</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    	<li class="breadcrumb-item active">Transaction</li>	
  	</ol>
</nav>

<div class="mt-4 mb-4">
	@if(session()->has('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
	@endif
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col col-md-6">Transactions List</div>
				<div class="col col-md-6">
					<a href="{{ url('/trans/create') }}" class="btn btn-success btn-sm float-end">Add New Transaction</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="transaction_table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Address</th>
							<th>Contact Number</th>
							<th>Transaction Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						@foreach($transaction as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->contact_number }}</td>
  
                                        
                                    </tr>
                                @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
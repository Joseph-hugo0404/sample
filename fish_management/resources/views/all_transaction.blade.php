@extends('dashboard')
@section('content')

<h2 class="mt-3">Transaction Management</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    	<li class="breadcrumb-item active">Transaction List</li>	
  	</ol>
</nav>

<div class="mt-4 mb-4">
	@if(session()->has('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
	@endif
	@if (session()->has('error'))
	<div class="alert alert-danger">
		{{ session()->get('error') }}
	</div>

@endif
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col col-md-6">List of Transaction</div>
				<div class="col col-md-6">
					<a href="{{ route('all_transaction.add') }}" class="btn btn-success btn-sm float-end"><i class="fa fa-plus" aria-hidden="true"></i> Add New Transaction</a>
					<a href="{{ route('all_transaction.print') }}" class="btnprn btn btn-primary btn-sm float-end " style="margin-right: 2%"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
					
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover" id="all_transaction_table">
					<thead class="table-primary">
						<tr>
							<th>Name</th>
							<th>Address</th>
                            <th>Contact Number</th>
                            <th>Transaction Date</th>
							<th  colspan="2">Tilapia </th>
							
							<th colspan="2">Ornamental</th>
							
							<th colspan="2">Carp</th>
							
							<th colspan="2">Beetle Fish</th>
							
							<th colspan="2">Cat Fish</th>
							
							<th>Action</th>
						</tr>
						<tr>
							<th></th>
							<th></th>
                            <th> </th>
                            <th></th>
							
							<th>Qty. </th>
							<th>Price </th>
							
							<th>Qty. </th>
							<th>Price </th>
							
							<th>Qty. </th>
							<th>Price </th>
							
							<th>Qty. </th>
							<th>Price </th>
							
							<th>Qty. </th>
							<th>Price </th>
							
							<th></th>
							
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
$(function(){

	var table = $('#all_transaction_table').DataTable({
		processing:true,
		serverSide:true,
		ajax:"{{ route('all_transaction.fetchall') }}",
		columns:[
			{
				data:'name',
				name:'name'
			},
			{
				data:'address',
				name:'address'
			},
			{
				data:'contact_number',
				name:'contact_number'
				
			},
            {
				data:'transaction_date',
				name:'transaction_date'
			},
			{
				data:'tilapia',
				name:'tilapia'
			},
			{
				data:'total_price_tilapia',
				name:'total_price_tilapia',

				render: function( data, type, full, meta ) {
                        return "<p>₱ "+data+"</p>";
                    }
			},
			{
				data:'ornamental',
				name:'ornamental'
			},
			{
				data:'total_price_ornamental',
				name:'total_price_ornamental',
				render: function( data, type, full, meta ) {
                        return "<p>₱ "+data+"</p>";
                    }
			},
			{
				data:'carp',
				name:'carp'
			},
			{
				data:'total_price_carp',
				name:'total_price_carp',
				render: function( data, type, full, meta ) {
                        return "<p>₱ "+data+"</p>";
                    }
			},
			{
				data:'beetle_fish',
				name:'beetle_fish'
			},
			{
				data:'total_price_beetle_fish',
				name:'total_price_beetle_fish',
				render: function( data, type, full, meta ) {
                        return "<p>₱ "+data+"</p>";
                    }
			},
			{
				data:'cat_fish',
				name:'cat_fish'
			},
			{
				data:'total_price_cat_fish',
				name:'total_price_cat_fish',
				render: function( data, type, full, meta ) {
                        return "<p>₱ "+data+"</p>";
                    }
			},
			{
				data:'action',
				name:'action',
				orderable:false
			}
		]
	});

	$(document).on('click', '.delete', function(){

		var id = $(this).data('id');

		if(confirm("Are you sure you want to remove it?"))
		{
			window.location.href = "/all_transaction/delete/" + id;
		}

	});

})
</script>
	<script type="text/javascript">
		$(document).ready(function(){
		$('.btnprn').printPage();
		});
	</script>
	
@endsection
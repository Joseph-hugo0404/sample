@extends('dashboard')
@section('content')

<h2 class="mt-3">Administrator Management</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    	<li class="breadcrumb-item active">Admins' List</li>	
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
				<div class="col col-md-6">List of Admins</div>
				<div class="col col-md-6">
					<!--<a href="{{ route('all_transaction.add') }}" class="btn btn-success btn-sm float-end"><i class="fa fa-plus" aria-hidden="true"></i> Add New Transaction</a>
					<a href="{{ route('all_transaction.print') }}" class="btnprn btn btn-primary btn-sm float-end " style="margin-right: 2%"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
					-->
					
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover " id="view_admin_table">
					<thead class="table-primary">
						<tr>
                            <th>Email</th>
							<th>Name</th>
							<th>Address</th>
                            <th>Contact Number</th>
                            <th>Image</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>

			
			</div>
		</div>
	</div>
</div>
<script>
	
$(function(){

	var table = $('#view_admin_table').DataTable({
		processing:true,
		serverSide:true,
		ajax:"{{ route('view_admin.fetchall') }}",
		columns:[
            {
				data:'email',
				name:'email'
			},
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
				data:'image',
				name:'image',
				
				render: function( data, type, full, meta ) {
                        return "<img src=\"/image/" + data + "\" height=\"50\"/>";
                    }
			}
		]
	});

})
</script>
	<script type="text/javascript">
		$(document).ready(function(){
		$('.btnprn').printPage();
		});
	</script>
	
@endsection
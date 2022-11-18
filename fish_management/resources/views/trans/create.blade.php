
@extends('dashboard')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Add New Transactions</div>
  <div class="card-body">
       
      <form action="{{ url('trans/transaction') }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contact_number" id="contact_number" class="form-control"></br>
        <label>Transaction Date</label></br>
        <input type="text" name="transaction_date" id="transaction_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop
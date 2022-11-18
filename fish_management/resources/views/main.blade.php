@extends('dashboard')

@section('content')

<!--<img src="{{ asset('images/bfar.png') }}" style=" display: block; margin-left: auto; margin-right: auto; width: 50%;">-->
<div class="row" style="margin-top:3%">
    <div class="col-lg-3 col-3">
      <!-- small box -->
      <div class="small-box bg-info text-white">
        <div class="inner">
          <h3>{{ $total_admin }}</h3>

          <p>Total Administrators</p>
        </div>
        <div class="icon">
            <i class="fa-solid fa-users"></i>
        </div>
        
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success text-white">
        <div class="inner">
          <h3>{{ $total_transaction }}</h3>

          <p>Total Transactions</p>
        </div>
        <div class="icon ">
            <i class="fa-solid fa-exchange"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary text-white">
        <div class="inner">
          <h3>{{ $total_stocks }}</h3>

          <p>Stocks Available</p>
        </div>
        <div class="icon">
            <i class="fa-solid fa-fish"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning text-white">
          <div class="inner">
            <h3>{{ $total_fish_sold }}</h3>
  
            <p>Total Fish Sold</p>
          </div>
          <div class="icon">
              <i class="fa-solid fa-peso-sign"></i>
          </div>
        </div>
      </div>
  </div>

  <div class="small-box" style="max-width: 100%;">
   
    <div id='full_calendar_events'></div>
</div>

@endsection
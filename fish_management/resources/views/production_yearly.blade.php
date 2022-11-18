@extends('dashboard')
@section('content') 

<h2 class="mt-3">Yearly Production Management</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    	<li class="breadcrumb-item active">Production</li>	
  	</ol>
</nav>
<canvas id="myChart" height="100px" style="margin-top: 2%"></canvas>
<a class="btn btn-success btn-sm" {{ Request::segment(1) == 'production' ? 'active' : '' }}" aria-current="page" href="/production_weekly"><i class="fa-solid fa-chart-column"></i> Weekly</a>
<a class="btn btn-success btn-sm" {{ Request::segment(1) == 'production' ? 'active' : '' }}" aria-current="page" href="/production"><i class="fa-solid fa-chart-column"></i> Monthly</a>
<a class="btn btn-success btn-sm" {{ Request::segment(1) == 'production' ? 'active' : '' }}" aria-current="page" href="/production_yearly"><i class="fa-solid fa-chart-column"></i> Yearly</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
 var myChart = new Chart(ctx, {
     type: 'bar',
     data: {
         labels: @json($chart_title),
         datasets: [{
             label: 'Tilapia',
             data: @json($fishes['tilapia']),
             backgroundColor: 'rgb(5, 5, 5)',
             borderColor: 'rgb(237, 237, 237)',
            
         }, {
             label: 'Ornamental',
             data: @json($fishes['ornamental']),
             backgroundColor: 'rgb(204, 24, 24)',
             borderColor: 'rgb(255, 99, 132)',
            
         }, {
             label: 'Carp',
             data: @json($fishes['carp']),
             backgroundColor: 'rgb(23, 105, 62)',
             borderColor: 'rgb(255, 99, 132)',
             
         }, {
             label: 'Beetle Fish',
             data: @json($fishes['beetle_fish']),
             backgroundColor: 'rgb(13, 186, 177)',
             borderColor: 'rgb(255, 99, 132)',
             
         }, {
             label: 'Cat Fish',
             data: @json($fishes['cat_fish']),
             backgroundColor: 'rgb(117, 186, 13)',
             borderColor: 'rgb(255, 99, 132)',
             
         }]
     },
     options: {
         scales: {
             yAxes: [{
                 ticks: {
                     beginAtZero: true
                 }
             }]
         }
     }
 });
</script>
@endsection
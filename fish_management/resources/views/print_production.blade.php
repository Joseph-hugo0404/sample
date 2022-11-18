<!DOCTYPE html>
<html>
<head>
    <title>Fish Management System</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
</head>
<body>

    @guest

    <h1 class="mt-4 mb-5 text-center">Fish Management System</h1>

    @yield('content')

    @else

    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js/jquery.printPage.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!--<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/all.min.css')}}">-->
     <h2 class="mt-3">Monthly Production Management</h2>
     <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
             <li class="breadcrumb-item active">Production</li>	
           </ol>
     </nav>
     
     <canvas id="myChart" height="100px" style="margin-top: 2%"></canvas> 
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

       

    @endguest

    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
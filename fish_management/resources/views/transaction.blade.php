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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!--<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/all.min.css')}}">-->


    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
        
    </header>

    <center>
      
        <h1 class="mt-4 mb-5 text-center">Fish Management System</h1>
        <h1>Transaction List </h1>
        <table class="table" >
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Transaction Date</th>
            <th>Tilapia</th>
            <th>Ornamental</th>
            <th>Carp</th>
            <th>Beetle Fish</th>
            <th>Cat Fish</th>
        </tr>
        @foreach($transaction as $transaction)
        <tr>
        <td>{{ $transaction->name }}</td>
        <td>{{ $transaction->address }}</td>
        <td>{{ $transaction->contact_number }}</td>
        <td>{{ $transaction->transaction_date }}</td>
        <td>{{ $transaction->tilapia }}</td>
        <td>{{ $transaction->ornamental }}</td>
        <td>{{ $transaction->carp }}</td>
        <td>{{ $transaction->beetle_fish }}</td>
        <td>{{ $transaction->cat_fish }}</td>
        </tr>
        @endforeach
    </center>
    @endguest
    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>


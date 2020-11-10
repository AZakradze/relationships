@foreach($comp as $c)
    <h1>company name: {{ $c->name }}</h1>
    <h2>company email: {{ $c->email->email }}</h2>
    <hr>
    @foreach($c->customer as $cust)
        <h2>customer name: {{$cust->name }}</h2>
    @endforeach
    <hr>
    @foreach($c->developer as $cust)
        <h2>developer name: {{$cust->name }}</h2>
    @endforeach
@endforeach

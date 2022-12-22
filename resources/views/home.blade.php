@extends('index')

@section('input')

<div class="container-fluid"
style="height: 100vh; background: url(https://th.bing.com/th/id/R.3569552d66d268915e9b38f17a5d1af1?rik=x%2fVyT4GRDUdWlQ&riu=http%3a%2f%2fo.aolcdn.com%2fhss%2fstorage%2fmidas%2f21703f8002a8e30986bcd9db94bb7e73%2f205510975%2fCopenhagenZoo_JMcArthur-3958%2bcopy.jpg&ehk=7KpDQlkw%2bzJIyAuLJ7ncdWMldsIreRlvJ9HG5e4y2CE%3d&risl=&pid=ImgRaw&r=0);
no-repeat right;
background-size: cover;">

    <div class="position-absolute top-50 start-50 translate-middle">
        <h1 class="text-light">Welcome to Zoo</h1>
        <div class="col-md-12 text-center">
           <p style="color:white" style="font-size 50px">Hello, {{auth()->user()->name}}</p>
            <a href="/animallist" type="button" class="btn btn-primary">View Animal List</a>
        </div>
    </div>
</div>
@endsection

@extends('index')

@section('input')

<div class="container-fluid"
style="height: 100vh; background: url(https://images4.alphacoders.com/871/thumb-1920-871898.jpg);
no-repeat right;
background-size: cover;">

    <div class="position-absolute top-50 start-50 translate-middle">
        <h1>Welcome to Zoo</h1>
        <div class="col-md-12 text-center">
           <p style="color: red">Your New Favorite Zoo</p>
            <a href="/animallist" type="button" class="btn btn-primary">View Animal List</a>
        </div>
    </div>
</div>
@endsection

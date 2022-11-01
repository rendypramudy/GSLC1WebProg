@extends('index')
@section('input')

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Food</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($animals as $animal )
        <tr>
          <th scope="row">{{$animal->id}}</th>
          <td>{{$animal->name}}</td>
          <td>{{$animal->type}}</td>
          <td>{{$animal->food}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<br>

  <div class="container-fluid"
style="height: 100vh; background: url(https://freedesignfile.com/upload/2016/12/Macaws-in-the-zoo-HD-picture-02.jpg);
no-repeat right;
background-size: cover;">
</div>

  @endsection

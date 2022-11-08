@extends('index')
@section('input')

<style>
    .title1 p{
        size: 50px;
        font-style:italic;
        color: white;
    }
    .title1 h2{
        size: 100px;
        font-style:inherit;
        color: black;
    }
    .img1{
        display: flex;
        justify-content: left;
    }
</style>

<div class="container-fluid"
style="height: 100vh; background: url(https://htmlcolorcodes.com/assets/images/colors/gray-color-solid-background-1920x1080.png);
no-repeat right;
background-size: cover;">

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
<div class="title1">
    <h2>Lion</h2>
    <div class="img1">
        <img src="https://asset-a.grid.id//crop/0x0:0x0/700x465/photo/bobofoto/original/2158_singa.jpg" height="300px" width="400px" alt="">
        <p>The lion (Panthera leo) is a large cat of the genus Panthera native to Africa and India. It has a muscular, broad-chested body, short, rounded head, round ears, and a hairy tuft at the end of its tail. It is sexually dimorphic; adult male lions are larger than females and have a prominent mane. It is a social species, forming groups called prides. A lion's pride consists of a few adult males, related females, and cubs. Groups of female lions usually hunt together, preying mostly on large ungulates. The lion is an apex and keystone predator; although some lions scavenge when opportunities occur and have been known to hunt humans,
             the species typically does not actively seek out and prey on humans.</p>
    </div>
</div>
</div>

  @endsection

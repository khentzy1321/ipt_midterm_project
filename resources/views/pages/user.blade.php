@extends('layouts.app')

@section('content')
<div class="container">
<h1>User page</h1>

<table class="table table-bordered">
  <thead class="bg-primary">
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->fname}}</td>
      <td>{{$user->lname}}</td>
      <td>{{$user->address}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
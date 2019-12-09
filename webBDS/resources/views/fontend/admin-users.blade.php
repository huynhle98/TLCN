@extends('fontend.layout-admin')
@section('content')
<h3>Danh sách User</h3>
<a class="btn btn-success float-right mb-2" href="{{URL::to('/viewadduser')}}">Thêm</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $key => $user)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
      <a title="update product" href="{{URL::to('/viewupdateuser/'.$user->id)}}"
                    class="btn btn-warning btn-circle float-left mr-1">
                    <i class="fas fa-pen"></i>
                </a>
                <!-- Delete category -->
                <form action="{{URL::to('/deleteuser/'.$user->id)}}"  method="POST" class="float-left">
                @csrf
                {{ method_field('DELETE')}}
                <button type="submit" class="btn btn-danger btn-circle"
                    title="delete user" >
                    <i class="fas fa-trash"></i>
                </button>
                </form>
      </td>
    </tr>
@endforeach
<?php $user=$user_selected[0]; ?>
  </tbody>
</table>


@endsection()

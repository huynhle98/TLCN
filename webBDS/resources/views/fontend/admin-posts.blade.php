@extends('fontend.layout-admin')
@section('content')
<h3>Danh sách Post</h3>
<a class="btn btn-success float-right mb-2" href="{{URL::to('/viewadduser')}}">Thêm</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name Contact</th>
      <th scope="col">Form Post</th>
      <th scope="col">Province</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($posts as $key => $post)
        <?php
            $dates  = $post->created_at;
            $date = explode("-", $dates);
        ?>
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$post->name_contact}}</td>
      <td>{{$post->form}}</td>
      <td>{{$post->province}}</td>
      <td>{{$date[2]}}/{{$date[1]}}/{{$date[0]}}</td>
      <td>
      <a title="update product" href="{{URL::to('/viewupdateuser/'.$post->id)}}"
                    class="btn btn-warning btn-circle float-left mr-1">
                    <i class="fas fa-pen"></i>
                </a>
                <!-- Delete category -->
                <form action="{{URL::to('/deleteuser/'.$post->id)}}"  method="POST" class="float-left">
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

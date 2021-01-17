@extends('base') 
@section('main')
<div class="row">

<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success text-center">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="col-sm-12">
<br />
<h3 class="display-5 text-center">User List</h3>    
  <table class="table table-striped">
    <thead>
        <tr>
          <th>No</th>
          <th>User Picture</th>
          <th>User Name</th>
          <th>User Role</th>
          <th>User Email</th>
          <th>User ID</th>
          <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($staffs as $count => $staff)
        <tr>
            <td>{{++$count}}</td>
            <td>{{$staff->User_pic}}</td>
            <td>{{$staff->User_name}}</td>
            <td>{{$staff->User_role}}</td>
            <td>{{$staff->User_email}}</td>
            <td>{{$staff->User_id}}</td>
            <td class="text-center">
                <a href="{{ route('staffs.edit',$staff->No)}}" class="btn btn-primary btn-block">Edit</a>
            </td>
            <td class="text-center">
                <form action="{{ route('staffs.destroy', $staff->No)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-block" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="text-center">
    <a style="margin: 19px;" href="{{ route('staffs.create')}}" class="btn btn-primary">Add Details</a>
  </div>
<div>

</div>
@endsection
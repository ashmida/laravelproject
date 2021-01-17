@extends('base') 
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <br />
    <h3 class="display-5 text-center">Add New Details</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br />
    @endif
    <font face="arial" size="2" color="#000000">
    <form method="post" action="{{ route('staffs.store') }}">
@csrf
<table>
<tr>
    <td>User Picture</td>
    <td>:</td>
    <td><input type="file" name="img"></td>
</tr>
<tr>
    <td>User Name</td>
    <td>:</td>
    <td><input type="text" name="name" size="50"></td>
</tr>
<tr>
    <td>User Role</td>
    <td>:</td>
    <td><input type="radio" id="reader" name="role" value="Reader">
        <label for="reader">Reader</label><br>
        <input type="radio" id="publisher/author" name="role" value="Publisher/AuthorS">
        <label for="publisher/author">Publisher/Author</label><br></td>
        
</tr>
<tr>
    <td>User Email</td>
    <td>:</td>
    <td><input type="textbox" name="email" size="50"></td>
</tr>
<tr>
    <td>User ID</td>
    <td>:</td>
    <td><input type="number" name="id"></td>
</tr>
<tr>
    <a href="{{ route('staffs.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;  
    <td><button type="submit" value="Submit">Submit</button></td>
    <td><button type="reset" value="Reset">Clear</button></td>
</tr>
</table>
</form>

</div>
</div>
</div>
@endsection
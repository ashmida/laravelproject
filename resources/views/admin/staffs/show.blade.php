@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">User Details</h3>
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
        <table>
        <tr>
         <td>User Image</td>
         <td>:</td>
         <td><input type="file" name="img" value="{{ $staffs->User_pic }}"></td>
        </tr>
        <tr>
         <td>User Name</td>
         <td>:</td>
         <td><input type="text" name="Username" size="50" value="{{ $staffs->User_name }}"></td>
        </tr>
        <tr>
         <td>User Role</td>
         <td>:</td>
         <td><input type="text" name="role" value="{{ $staffs->User_role }}" readonly>
             <input type="radio" id="reader" name="role" value="Reader">
             <label for="reader">Reader</label><br>
             <input type="radio" id="publisher/author" name="role" value="Publisher/Author">
             <label for="publisher/author">Publisher/Author</label><br></td>
             
        </tr>
        <tr>
         <td>User Email</td>
         <td>:</td>
         <td><input type="text" name="desc" size="200" value="{{ $staffs->User_email }}"></td>
        </tr>
        <tr>
         <td>User ID</td>
         <td>:</td>
         <td><input type="number" name="id" value="{{ $students->citizenship }}"></td>
        </tr>
        <tr>
         <a href="{{ route('index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;  
        </tr>
    </table>
    </div>
</div>
@endsection
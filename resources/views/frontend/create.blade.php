@extends('layouts.master')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 jumbotron">
            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class = "form-group">
                    <label for="name" >Name</label>
                    <input type="text" name ="name" id="name" class="form-control">
                    <span style="color: red">{{$errors->first('name')}}</span>
                </div>

                <div class = "form-group">
                    <label for="email" >Email</label>
                    <input type="text" name ="email" id="email" class="form-control">
                    <span style="color: red">{{$errors->first('email')}}</span>
                </div>

                <div class = "form-group">
                    <label for="phone" >Phone</label>
                    <input type="text" name ="phone" id="phone" class="form-control">
                    <span style="color: red">{{$errors->first('phone')}}</span>
                </div>

                <div class = "form-group">
                    <label for="image" >Picture</label>
                    <input type="file" name ="image" id="imageId" class="btn btn-default">
                    <span style="color: red">{{$errors->first('image')}}</span>
                </div>
                <div class = "form-group">
                    <label for="password" >Password</label>
                    <input type="password" name ="password" id="password" class="form-control">
                    <span style="color: red">{{$errors->first('password')}}</span>
                </div>
                <div class = "form-group">
                    <label for="password_confirmation" >Password Confirmation</label>
                    <input type="password" name ="password_confirmation" id="password_confirmation" class="form-control">
                    <span style="color: red">{{$errors->first('password_confirmation')}}</span>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <br>
                    <input type="radio" class="" id ="user status" name="status" value="1">Active
                    <input type="radio" class="" id ="user status" name="status" value="0">Offline
                    <span style="color: red">{{$errors->first('status')}}</span>
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-primary float-left">Submit</button>
                </div>
            </form>
            </div>
    </div>
    </div>

@endsection
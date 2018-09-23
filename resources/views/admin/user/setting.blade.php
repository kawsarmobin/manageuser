@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" style="background-color: #00AA9E;">Setting</div>

          <div class="card-body">

            @include('includes.errors')

            <form class="" action="{{ route('changePass') }}" method="post">
              @csrf @method('put')

              <div class="form-group">
                <label for="exampleInputPassword1">Old Password</label>
                <input type="password" name="old_password" class="form-control" placeholder="Password">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">New Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Confirmed Password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmed password">
              </div>

              <button type="submit" class="btn btn-primary btn-block">Password Update</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

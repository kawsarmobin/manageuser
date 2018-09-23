@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" style="background-color: #00AA9E;">Create New User</div>

          <div class="card-body">

            @include('includes.errors')

            <form class="" action="{{ route('user.store') }}" method="post">
              @csrf

              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
              </div>

              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Confirmed Password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmed password">
              </div>

              <button type="submit" class="btn btn-primary btn-block">Submit</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

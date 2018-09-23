@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" style="background-color: #00AA9E;">View All User</div>

          <div class="card-body">

            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @if ($users)
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ ucwords($user->name) }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        <!-- Example single danger button -->
                        <div class="btn-group dropright">
                          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Option
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{  route('user.edit', $user->id) }}">Edit</a>
                            <a class="dropdown-item" href="{{ route('users.destroy', $user->id) }}">Delete</a>
                            <div class="dropdown-divider"></div>

                            {{-- user verify area --}}
                            @if ($user->is_verify)
                              <a class="dropdown-item" style="color: red;" href="{{ route('unverify', $user->id) }}">Unverified</a>
                            @else
                              <a class="dropdown-item" style="color: green;" href="{{ route('verify', $user->id) }}">Verified</a>
                            @endif

                            {{-- user active area --}}
                            @if ($user->is_active)
                              <a class="dropdown-item" style="color: red;" href="{{ route('deactive', $user->id) }}">Deactive</a>
                            @else
                              <a class="dropdown-item" style="color: green;" href="{{ route('active', $user->id) }}">Active</a>
                            @endif

                            {{-- user admin/regular area --}}
                            @if ($user->is_admin)
                              <a class="dropdown-item" style="color: #A569BD;" href="{{ route('regular', $user->id) }}">Regular</a>
                            @else
                              <a class="dropdown-item" style="color: #2ECC71;" href="{{ route('admin', $user->id) }}">Admin</a>
                            @endif

                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

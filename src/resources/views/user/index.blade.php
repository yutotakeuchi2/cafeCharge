@extends("user/layout")
@section("content")

  <div class="user-wrapper">
    @foreach ($users as $user)
        <p class="profile-name">{{$user->name}}</p>
    @endforeach
  </div>

@endsection
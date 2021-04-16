@extends("user/layout")
@section("content")

  <div class="user-wrapper">
    @foreach ($users as $user)
        <a href="#" class="profile-name">{{$user->name}}</a>
    @endforeach
  </div>

@endsection
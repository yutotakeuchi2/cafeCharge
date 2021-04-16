@extends("user/layout")
@section("content")

  <div class="user-wrapper">
    @foreach ($users as $user)
        <a href="/user/show/{{$user->id}}" class="profile-name">{{$user->name}}</a>
    @endforeach
  </div>

@endsection
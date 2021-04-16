@extends("user/layout")
@section("content")

  <div class="user-wrapper">
    <p>検索結果:</p>
    @foreach ($foundUsers as $user)
        <p class="profile-name">{{$user->name}}</p>
    @endforeach
  </div>
  <a href="index">戻る</a>

@endsection
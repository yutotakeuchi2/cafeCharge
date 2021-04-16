@extends("user/layout")
@section("content")

  <div class="user-wrapper">
    <p>検索結果:</p>
    @if(!isset($foundUsers[0]))
        <p>その名前は存在しません</p>
  　@endif
    @foreach ($foundUsers as $user)
        <p class="profile-name">{{$user->name}}</p>
    @endforeach
  </div>
  <a href="index">戻る</a>

@endsection
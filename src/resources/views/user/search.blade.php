@extends("user/layout")
@section("content")

  <div class="user-wrapper">
    <p>検索結果:</p>

    @if(!isset($foundUsers[0]) || isset($errorMessage))
        <p>その名前は存在しません</p>
  　@else
    @foreach ($foundUsers as $user)
        <a href="/user/show/{{$user->id}}" class="profile-name">{{$user->name}}</a>
    @endforeach
    @endif
  </div>
  <a href="index">戻る</a>

@endsection
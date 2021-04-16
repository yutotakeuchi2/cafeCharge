@extends('user/layout')
@section('content')

<h1 class="show_title">{{$user[0]->name}}さんの詳細ページ</h1>
<div class="show-wrapper">
  <p class="show-content">名前 : {{$user[0]->name}}</p>
  <p class="show-content">年齢 : {{$user[0]->age}}</p>
  <p class="show-content">最寄り駅 : {{$user[0]->station}}</p>
  <p class="show-content">趣味 : {{$user[0]->hobby}}</p>
  <p class="show-content">得意なこと : {{$user[0]->good_at}}</p>
  <p class="show-content">自分のモチベーションのために必要なこと : {{$user[0]->motivation}}</p>
</div>

<a href="/user/index">ユーザー一覧に戻る</a>

@endsection
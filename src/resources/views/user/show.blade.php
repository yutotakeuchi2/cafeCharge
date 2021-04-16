@extends('user/layout')
@section('connect')

<h1>さんの詳細ページ</h1>
<div class="show-wrapper">
  <p class="show-content">名前:{{$user[0]->name}}</p>
  <p class="show-content">年齢:</p>
  <p class="show-content">最寄り駅:</p>
  <p class="show-content">趣味:</p>
  <p class="show-content">得意なこと:</p>
  <p class="show-conetnt">自分のモチベーションのために必要なこと:</p>
</div>

<a href="index">ユーザー一覧に戻る</a>

@endsection

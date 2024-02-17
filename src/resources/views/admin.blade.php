@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>
@if (Auth::check())
<form class="form" action="/logout" method="post">
    @csrf
  <button class="button">ログアウト</button>
</form>
@endif

<div class="attendance__content">
  <h2>Admin</h2>
  <form action="admin" method="POST">
  @csrf
    <input type="text" name="input" placeholder="名前やメールアドレスを入力してください"value="">
    <input type="text" name="gender" placeholder="性別" value="">
    <input type="text" name="content" placeholder="お問い合わせの種類" value="">
    <input name="date" type=date />
    <input type="submit" value="検索">
  </form>
</div>
<div class="attendance__content">
  <div class="attendance-table">
    @if (@isset($item))
    <table class="attendance-table__inner">
      <tr class="attendance-table__row">
        <th class="attendance-table__header">お名前</th>
        <th class="attendance-table__header">性別</th>
        <th class="attendance-table__header">メールアドレス</th>
        <th class="attendance-table__header">お問い合わせの種類</th>
        <th class="attendance-table__header">詳細内容</th>
      </tr>
      <tr class="attendance-table__row">
        <td class="attendance-table__item">サンプル太郎</td>
        <td class="attendance-table__item">{{$item->gender}}</td>
        <td class="attendance-table__item">サンプル</td>
        <td class="attendance-table__item">サンプル</td>
        <td class="attendance-table__item">サンプル</td>
      </tr>
    </table>
    @endif
  </div>
</div>
@endsection
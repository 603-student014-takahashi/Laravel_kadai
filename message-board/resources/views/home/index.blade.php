@extends('layouts.app')
@section('content')
    <h1>マイページ</h1>

    @include ('commons.flash')
    <form action="{{ route('messages.store') }}" method="post">
        @csrf
        <dl>
            <dt>メッセージ入力</dt>
            <dd><textarea name="content" rows="5"></textarea><br></dd>
        </dl>
        <button type="submit">登録</button>
    </form>

    <!-- 入力したメッセージを表示 -->
    @include('commons.messages')
@endsection
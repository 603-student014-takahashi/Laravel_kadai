@extends('layouts.app')
@section('content')
    <h1>書籍情報編集</h1>
    @include ('commons.flash')
    <form action="{{ route('messages.update', $message->id) }}" method="post">
        @method('patch')
        @include('messages.form')
        <button type="submit">更新</button>
    </form>
@endsection
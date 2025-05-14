@extends('layouts.app')
@section('content')
    <h1>メッセージ情報</h1>
    <p>
        @if($message->user_id == Auth::id())
                <!-- 編集ボタン -->
            <form action="{{ route('messages.edit', $message) }}" method="">
                <button type="submit">編集</button>
                <a href="{{ route('home', $message) }}">キャンセル</a>
            </form>
            <!-- 削除ボタン -->
            <form action="#" method="">
                <button onclick="deleteMessage()">削除</button>
            </form>

            <form action="{{ route('messages.destroy', $message) }}" method="post" id="delete-form">
                @csrf
                @method('delete')
            </form>
            <script type="text/javascript">
                function deleteMessage() {
                    event.preventDefault();
                    if (window.confirm('本当に削除しますか？')) {
                        document.getElementById('delete-form').submit();
                    }
                }
            </script>
        @else
        @if(Auth::user()->isLike($message->id))
            <form action="{{ route('likes.destroy') }}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="message_id" value="{{ $message->id }}">
                <button type="submit">いいね解除</button>
            </form>
        @else
            <form action="{{ route('likes.store') }}" method="post">
                @csrf
                <input type="hidden" name="message_id" value="{{ $message->id }}">
                <button type="submit">いいね！</button>
            </form>
        @endif
    @endif

    </p>
    <dl>
        <dt>{{ $message->user->name }} : {{ $message->created_at }}</dt>
        <dd> {!! nl2br(e($message->content)) !!}</dd>
    </dl>
@endsection
<!-- 入力したメッセージ表示 -->
<table>
    @foreach($messages as $message)
        <p>
            {{ $message->user->name }}:{{ $message->created_at }}<a href="{{ route('messages.show', $message) }}">編集</a><br>
            {!! nl2br(e($message->content)) !!}<br>
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
        </p>
    @endforeach
</table>

{{ $messages->links() }}
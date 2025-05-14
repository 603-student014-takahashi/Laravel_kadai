
<?php $__env->startSection('content'); ?>
    <h1>メッセージ情報</h1>
    <p>
        <?php if($message->user_id == Auth::id()): ?>
                <!-- 編集ボタン -->
            <form action="<?php echo e(route('messages.edit', $message)); ?>" method="">
                <button type="submit">編集</button>
                <a href="<?php echo e(route('home', $message)); ?>">キャンセル</a>
            </form>
            <!-- 削除ボタン -->
            <form action="#" method="">
                <button onclick="deleteMessage()">削除</button>
            </form>

            <form action="<?php echo e(route('messages.destroy', $message)); ?>" method="post" id="delete-form">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
            </form>
            <script type="text/javascript">
                function deleteMessage() {
                    event.preventDefault();
                    if (window.confirm('本当に削除しますか？')) {
                        document.getElementById('delete-form').submit();
                    }
                }
            </script>
        <?php else: ?>
        <?php if(Auth::user()->isLike($message->id)): ?>
            <form action="<?php echo e(route('likes.destroy')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <input type="hidden" name="message_id" value="<?php echo e($message->id); ?>">
                <button type="submit">いいね解除</button>
            </form>
        <?php else: ?>
            <form action="<?php echo e(route('likes.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="message_id" value="<?php echo e($message->id); ?>">
                <button type="submit">いいね！</button>
            </form>
        <?php endif; ?>
    <?php endif; ?>

    </p>
    <dl>
        <dt><?php echo e($message->user->name); ?> : <?php echo e($message->created_at); ?></dt>
        <dd> <?php echo nl2br(e($message->content)); ?></dd>
    </dl>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\message-board\resources\views/messages/show.blade.php ENDPATH**/ ?>
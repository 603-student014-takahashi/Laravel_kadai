<!-- 入力したメッセージ表示 -->
<table>
    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>
            <?php echo e($message->user->name); ?>:<?php echo e($message->created_at); ?><a href="<?php echo e(route('messages.show', $message)); ?>">編集</a><br>
            <?php echo nl2br(e($message->content)); ?><br>
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
        </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo e($messages->links()); ?><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\message-board\resources\views/commons/messages.blade.php ENDPATH**/ ?>
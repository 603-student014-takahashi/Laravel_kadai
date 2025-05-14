
<?php $__env->startSection('content'); ?>
    <h1>マイページ</h1>

    <?php echo $__env->make('commons.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form action="<?php echo e(route('messages.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <dl>
            <dt>メッセージ入力</dt>
            <dd><textarea name="content" rows="5"></textarea><br></dd>
        </dl>
        <button type="submit">登録</button>
    </form>

    <!-- 入力したメッセージを表示 -->
    <?php echo $__env->make('commons.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\message-board\resources\views/home/index.blade.php ENDPATH**/ ?>
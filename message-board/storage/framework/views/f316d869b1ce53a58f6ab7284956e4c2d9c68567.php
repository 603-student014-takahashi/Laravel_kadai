
<?php $__env->startSection('content'); ?>
    <h1>書籍情報編集</h1>
    <form action="<?php echo e(route('messages.update', $message->id)); ?>" method="post">
        <?php echo method_field('patch'); ?>
        <?php echo $__env->make('messages.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button type="submit">更新</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\message-board\resources\views/messages/edit.blade.php ENDPATH**/ ?>
<?php echo csrf_field(); ?>
<dl>
    <dt>メッセージ入力</dt>
    <dd>
        <textarea name="content" rows="5"><?php echo e(old('content', $message)); ?></textarea>
    </dd>
</dl><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\message-board\resources\views/messages/form.blade.php ENDPATH**/ ?>
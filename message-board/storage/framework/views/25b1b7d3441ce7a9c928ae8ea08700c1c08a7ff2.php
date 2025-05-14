<?php if(Auth::check()): ?>
    <ul class="navigation">
        <li>
            <a href="<?php echo e(route('home')); ?>">マイページ</a>
        </li>
        <li>
            <a href="<?php echo e(route('messages.index')); ?>">みんなのメッセージ</a>
        </li>
        <li>
            <a href="#" onclick="logout()">
                ログアウト
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post">
                <?php echo csrf_field(); ?>
            </form>
            <script type="text/javascript">
                function logout() {
                    event.preventDefault();
                    if (window.confirm('ログアウトしますか？')) {
                        document.getElementById('logout-form').submit();
                    }
                }
            </script>
        </li>
    </ul>
<?php endif; ?><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\message-board\resources\views/commons/nav.blade.php ENDPATH**/ ?>
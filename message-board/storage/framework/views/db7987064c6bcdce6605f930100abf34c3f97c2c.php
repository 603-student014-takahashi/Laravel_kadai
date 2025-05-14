<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name')); ?></title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <header>
        <div class="container">
            <a class="brand" href="/"><?php echo e(config('app.name')); ?></a>
            <?php echo $__env->make('commons.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </header>
    <main>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>
</body>

</html><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\message-board\resources\views/layouts/app.blade.php ENDPATH**/ ?>
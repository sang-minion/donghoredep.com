<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="title m-b-md">
            Product3win <?php echo e(isset($name)?$name:''); ?>

        </div>
        <div class="links">
            <a href="https://laravel.com/docs">Doc laravel</a>
            <a href="https://laracasts.com">Doc laracsts</a>
            <a href="https://laravel-news.com">Tin tức laravel</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">Tài nguyên laravel</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
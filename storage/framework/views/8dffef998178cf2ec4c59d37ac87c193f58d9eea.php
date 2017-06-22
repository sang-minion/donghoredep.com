<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 07/06/2017
 * Time: 13:54 CH
 */?>

<?php $__env->startSection('content'); ?>
    <h3>Dashboard</h3>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
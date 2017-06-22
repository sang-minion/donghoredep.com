<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 05/06/2017
 * Time: 10:00 SA
 */
?>

<?php $__env->startSection('content'); ?>
    <div class="row menu-option">
        <div class="col-lg-6 col-md-6 col-sm-6"><h5>Thông tin bảo hành đổi trả</h5></div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right">
            <a href="<?php echo e(route('admin.guarantee_edit')); ?>"> <i class="fa fa-edit" title="Cập nhật"></i> </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php echo stripcslashes($data->category_content); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
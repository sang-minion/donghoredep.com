<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 05/06/2017
 * Time: 10:00 SA
 */
?>

<?php $__env->startSection('content'); ?>
    <form action="" class="form-horizontal frmAdd" method="POST" id="frmAdd" name="frmAdd"
          enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="category_content" class="col-md-2 col-sm-3 control-label">Thông tin bảo hành đổi trả</label>
            <div class="col-md-10 col-sm-9">
                <textarea class="form-control ckeditor  "
                          name="category_content"><?php echo e(isset($data['category_content'])?stripslashes($data['category_content']):old('category_content')); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12 col-md-12 btn-option">
                <button type="submit" name="txtSubmit" id="buttonSubmit" class="btn btn-primary">Lưu lại</button>
                <button type="reset" class="btn" id="goback">Bỏ qua</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
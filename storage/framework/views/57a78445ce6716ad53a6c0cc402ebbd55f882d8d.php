<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 05/06/2017
 * Time: 10:00 SA
 */
?>

<?php $__env->startSection('content'); ?>
    <form action="" class="form-horizontal frmAdd" method="POST" id="frmAdd" name="frmAdd">
        <?php echo e(csrf_field()); ?>

        <div class="form-group<?php echo e(isset($errors)&& $errors->has('password') ? ' has-error' : ''); ?>">
            <label for="password" class="col-md-2 col-sm-3 control-label">Mật khẩu</label>
            <div class="col-md-6 col-sm-9">
                <input id="password" type="password" class="form-control" name="password">

                <?php if(isset($errors)&&$errors->has('password')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="password-confirm" class="col-md-2 col-sm-3 control-label date">Nhập lại mật khẩu</label>
            <div class="col-md-6 col-sm-9">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            </div>
        </div>
        <div class="form-group">
            <div class=" col-md-6 btn-option">
                <input type="hidden" id="id_hidden" name="id_hidden" value="<?php echo e($id); ?>"/>
                <button type="submit" name="txtSubmit" id="buttonSubmit" class="btn btn-primary">Lưu lại</button>
                <button type="reset" class="btn" id="goback">Bỏ qua</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
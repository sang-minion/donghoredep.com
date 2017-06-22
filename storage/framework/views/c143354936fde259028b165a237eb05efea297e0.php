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

        <div class="form-group<?php echo e(isset($errors)&& $errors->has('advertise_title') ? ' has-error' : ''); ?>">
            <label for="script_title" class="col-md-2 col-sm-3 control-label">Tiêu đề</label>
            <div class="col-md-6 col-sm-9">
                <input id="script_title" type="text" class="form-control" name="script_title"
                       value="<?php echo e(isset($data['script_title'])?$data['script_title']: old('script_title')); ?>" required
                       autofocus>
                <?php if(isset($errors)&&$errors->has('script_title')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('script_title')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="advertise_intro" class="col-md-2 col-sm-3 control-label">Mã nhúng</label>
            <div class="col-md-6 col-sm-9">
                <textarea id="script_content" class="form-control" name="script_content" rows="3"
                          autofocus><?php echo e(isset($data['script_content'])?$data['script_content']:old('script_content')); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="product_status" class="col-md-2 col-sm-3 control-label">Vị trí nhúng</label>
            <div class="col-md-6 col-sm-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="post_header" value="1"
                               <?php if((isset($data['post_header'])&&$data['post_header']==1)||old('post_header')==1): ?> checked <?php endif; ?> />
                        header
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="post_end" value="1"
                               <?php if((isset($data['post_end'])&&$data['post_end']==1)||old('post_end')==1): ?> checked <?php endif; ?> />
                        End
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('script_status') ? ' has-error' : ''); ?>">
            <label for="script_status" class="col-md-2 col-sm-3 control-label">Trạng thái</label>
            <div class="col-md-6 col-sm-9">
                <select class="form-control" name="script_status">
                    <?php echo $optionStatus; ?>

                </select>
                <?php if(isset($errors)&&$errors->has('script_status')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('script_status')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 btn-option">
                <input type="hidden" id="id_hidden" name="id_hidden" value="<?php echo e($id); ?>"/>
                <input type="hidden" id="remove_media" name="remove_media" value="0"/>
                <button type="submit" name="txtSubmit" id="buttonSubmit" class="btn btn-primary">Lưu lại</button>
                <button type="reset" class="btn" id="goback">Bỏ qua</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
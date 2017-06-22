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
        <div class="col-lg-6 col-md-6 col-sm-6"><h5>Thùng rác : <?php echo e(isset($id)&&$id>0?'xem':''); ?></h5></div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right">
            <a href="javascript:void(0)"> <i class="fa fa-mail-reply" id="restoreMoreItem" title="Khôi phục "></i> </a>
            <a href="javascript:void(0)"> <i class="fa fa-trash" id="deleteMoreItem" title="xóa item"></i> </a>
        </div>
    </div>
    <form action="<?php echo e(route('admin.trash_delete')); ?>" class="form-horizontal frmAdd" method="POST" id="formListItem" name="formListItem" >
        <?php echo e(csrf_field()); ?>

        <input class="checkItem trash" name="checkItem[]" value="<?php echo e($id); ?>" type="checkbox" style="float: right">
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3">Lớp:</label>
            <div class="col-md-8 col-sm-9">
                <?php if(isset($data['trash_class'])): ?><?php echo e($data['trash_class']); ?><?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3">Thư mục</label>
            <div class="col-md-8 col-sm-9">
                <?php if(isset($data['trash_folder_media'])): ?><?php echo e($data['trash_folder_media']); ?><?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-3">Nội dung</label>
            <div class="col-md-8 col-sm-9">
                <?php
                $trash_content = array();
                if(isset($data['trash_content'])){
                    $trash_content = unserialize($data['trash_content']);
                    foreach($arrField as $field){
                        if(isset($trash_content[$field])){
                            echo '<div class="line"><b>'.$field.':</b> '.$trash_content[$field].'</div>';
                        }
                    }
                }
                ?>

            </div>
        </div>
        <div class="form-group" >
            <div class="col-lg-6 col-md-6 btn-option">
                <input type="hidden" id="id_hidden" name="id_hidden" value="<?php echo e($id); ?>"/>
                <button type="submit" name="txtSubmit" id="buttonSubmit" class="btn btn-primary">Lưu lại</button>
                <button type="reset" class="btn" id="goback">Bỏ qua</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
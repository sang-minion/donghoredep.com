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

        <?php
        $ar = isset($data['category_intro']) && $data['category_intro'] != '' ? unserialize($data['category_intro']) : array();
        $arPhone = array();
        $arAddress = array();
        $arTitle = array();
        if (!empty($ar)) {
            $arPhone = $ar['phone'];
            $arAddress = $ar['address'];
            $arTitle = $ar['title'];
        }
        ?>
        <div class="form-group">
            <label for="category_content" class="col-md-2 col-sm-3 control-label">Địa chỉ liên hệ
                <i class="fa fa-plus green fa-admin" id="themADR" title="thêm chi nhánh"></i></label>
            <div class="col-md-10 col-sm-9">
                <ul id="listADR">
                    <?php if(!empty($arAddress)&&!empty($arTitle)): ?>
                        <?php $__currentLoopData = $arAddress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$adr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="col-md-12">
                                <input class="form-control" type="text" name="title[]" value="<?php echo e(isset($arTitle[$k])?$arTitle[$k]:''); ?>" placeholder="tiêu đề">
                                <input class="form-control" type="text" name="address[]" value="<?php echo e($adr); ?>" placeholder="địa chỉ liên hệ">
                                <i class="fa fa-remove fa-admin red" id="xoa-ADR"></i>
                                <hr>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <li class="col-md-12">
                            <input class="form-control" type="text" name="title[]" value="" placeholder="tiêu đề">
                            <input class="form-control" type="text" name="address[]" value="" placeholder="địa chỉ liên hệ">
                        </li>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
        <div class="form-group">
            <label for="category_content" class="col-md-2 col-sm-3 control-label">SĐT liên hệ
                <i class="fa fa-plus green fa-admin" id="themSDT" title="thêm số điện thoại"></i></label>
            <div class="col-md-6 col-sm-9">
                <ul id="listSDT">
                    <?php if(!empty($arPhone)): ?>
                        <?php $__currentLoopData = $arPhone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="col-md-12">
                                <input class="form-control" type="text" name="phone[]" value="<?php echo e($phone); ?>" placeholder="số điện thoại liên hệ">
                                <i class="fa fa-remove fa-admin red" id="xoa-SDT"></i>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <li class="col-md-12">
                            <input class="form-control" type="text" name="phone[]" value="" placeholder="số điện thoại liên hệ">
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label for="category_content" class="col-md-2 col-sm-3 control-label">Thông tin chung </label>
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
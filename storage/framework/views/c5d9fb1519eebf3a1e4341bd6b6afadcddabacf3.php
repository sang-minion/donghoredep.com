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
        <div class="col-lg-6 col-md-6 col-sm-6"><h5>Thông tin liện hệ</h5></div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right">
            <a href="<?php echo e(route('admin.contact_edit')); ?>"> <i class="fa fa-edit" title="Cập nhật"></i> </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
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
        <br>
            <div class="col-md-6 table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th width="2%">STT</th>
                        <th>Tiêu đề</th>
                        <th>Địa chỉ văn phòng</th>
                    </tr>
                    <?php $__currentLoopData = $arAddress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$adr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($k+1); ?></td>
                            <td><?php echo e(isset($arTitle[$k])?$arTitle[$k]:''); ?></td>
                            <td><?php echo e($adr); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
            <div class="col-md-6 table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th width="2%">STT</th>
                        <th>Số điện thoại liên hệ</th>
                    </tr>
                    <?php $__currentLoopData = $arPhone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($k+1); ?></td>
                            <td><?php echo e($p); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        <div>
            <?php echo stripcslashes($data->category_content); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
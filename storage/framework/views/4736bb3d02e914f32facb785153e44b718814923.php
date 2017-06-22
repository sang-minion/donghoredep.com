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


        <div class="form-group<?php echo e(isset($errors)&& $errors->has('role_title') ? ' has-error' : ''); ?>">
            <label for="role_title" class="col-md-2 col-sm-3 control-label">Tiêu đề</label>
            <div class="col-md-6 col-sm-9">
                <input id="role_title" type="text" class="form-control" name="role_title"
                       value="<?php echo e(isset($data['role_title'])?$data['role_title']: old('role_title')); ?>" required
                       autofocus>
                <?php if(isset($errors)&&$errors->has('role_title')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('role_title')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 col-sm-3 control-label">Phân quyền truy cập</label>
            <div class="col-md-10 col-sm-9">
                <div class="col-lg-12 col-md-12 col-sm-12 head-permission" >
                    <ul class=" col-lg-12 col-md-12 col-sm-12">
                        <li class="col-md-3 col-sm-4 ">Tên module</li>
                        <li class="col-md-9 col-sm-8">Danh sách quyền</li>
                    </ul>
                </div>
                <div class=" col-lg-12 col-md-12 col-sm-12 content-permission" >
                    <?php $__currentLoopData = $arrModule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <ul class="col-lg-12 col-md-12 col-sm-12" >
                            <li class="col-lg-12 col-md-12 col-sm-12 " >
                                <div class=" col-md-3 col-sm-4 ">
                                    <?php echo e($module['module_title']); ?>-<?php echo e($module['module_controller']); ?>

                                </div>
                                <?php
                                $module_action = array();
                                if($module['module_action'] != '' || $module['module_action'] != null){
                                    $module_action = unserialize($module['module_action']);
                                }
                                $permission = array();
                                if(isset($data['role_permission']) && ($data['role_permission'] != '' || $data['role_permission'] != null)){
                                    $permission = unserialize($data['role_permission']);
                                }
                                $str = '';
                                ?>
                                <div class="col-md-9 col-sm-8">

                                    <?php $__currentLoopData = $module_action; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if(isset($permission[$module->module_controller]) && isset($permission[$module->module_controller][$action]) == 1){
                                            $str = 'value="1" checked="checked"';
                                        }else{
                                            $str ='value="1"';
                                        }
                                        ?>
                                        <div class=" col-md-2 col-sm-6">
                                            <input type="checkbox" name="access[<?php echo e($module['module_controller']); ?>][<?php echo e($action); ?>]" class="item_<?php echo e($action); ?>" id="access[<?php echo e($module['module_controller']); ?>][<?php echo e($action); ?>]" <?php echo e($str); ?>/>
                                            <label for="access[<?php echo e($module['module_controller']); ?>][<?php echo e($action); ?>]" title="<?php echo e(ucwords($action)); ?>"><?php if(isset($arrNamePermission[$action])): ?> <?php echo e($arrNamePermission[$action]); ?> <?php else: ?> <?php echo e($action); ?> <?php endif; ?></label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </li>
                        </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('role_status') ? ' has-error' : ''); ?>">
            <label for="role_status" class="col-md-2 col-sm-3 control-label">Cho phép upload</label>
            <div class="col-md-6 col-sm-9">
                <select class="form-control" name="allow_upload">
                    <?php echo $optionAllowUL; ?>

                </select>
                <?php if(isset($errors)&&$errors->has('role_status')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('role_status')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('role_status') ? ' has-error' : ''); ?>">
            <label for="role_status" class="col-md-2 col-sm-3 control-label">Trạng thái</label>
            <div class="col-md-6 col-sm-9">
                <select class="form-control" name="role_status">
                    <?php echo $optionStatus; ?>

                </select>
                <?php if(isset($errors)&&$errors->has('role_status')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('role_status')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('role_order_no') ? ' has-error' : ''); ?>">
            <label for="role_order_no" class="col-md-2 col-sm-3 control-label">Thứ tự</label>
            <div class="col-md-6 col-sm-9">
                <input type="text" class="form-control" name="role_order_no" id="role_order_no" value="<?php echo e(isset($data['role_order_no'])?$data['role_order_no']:'0'); ?>">
                <?php if(isset($errors)&&$errors->has('role_order_no')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('role_order_no')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group" >
            <div class="col-md-6 btn-option">
                <input type="hidden" id="id_hidden" name="id_hidden" value="<?php echo e($id); ?>"/>
                <button type="submit" name="txtSubmit" id="buttonSubmit" class="btn btn-primary">Lưu lại</button>
                <button type="reset" class="btn" id="goback">Bỏ qua</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
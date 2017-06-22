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


        <div class="form-group<?php echo e(isset($errors)&&$errors->has('module_title') ? ' has-error' : ''); ?>">
            <label for="module_title" class="col-md-2 col-sm-3 control-label">Tiêu đề</label>
            <div class="col-md-6 col-sm-9">
                <input id="module_title" type="text" class="form-control" name="module_title"
                       value="<?php echo e(isset($data['module_title'])?$data['module_title']: old('module_title')); ?>" required
                       autofocus>
                <?php if(isset($errors)&&$errors->has('module_title')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('module_title')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('module_controller') ? ' has-error' : ''); ?>">
            <label for="module_controller" class="col-md-2 col-sm-3 control-label">Controller</label>
            <div class="col-md-6 col-sm-9">
                <input id="module_controller" type="text" class="form-control" name="module_controller"
                       value="<?php echo e(isset($data['module_controller'])?$data['module_controller']:old('module_controller')); ?>" required
                       autofocus>
                <?php if(isset($errors)&&$errors->has('module_controller')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('module_controller')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <?php
            $module_action = array();
            if(isset($data['module_action']) && $data['module_action'] != ''){
                $module_action = unserialize($data['module_action']);
            }
            ?>
            <label class="col-md-2 col-sm-3 control-label">Action <i class="fa fa-plus fa-admin green" id="themAction" rel="<?php echo e(count($module_action)>1?count($module_action):3); ?>"></i></label>
            <div class="col-md-6 col-sm-9">
                <ul id="sys_drag_sort_action" class="ul_drag_sort">
                    <?php if(is_array($module_action) && !empty($module_action)): ?>
                        <?php $__currentLoopData = $module_action; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li id="sys_div_sort_other_<?php echo e($k); ?>">
                                <div class="div_sort_order">
                                    <input type="checkbox" name="module_action[]" value="<?php echo e($action); ?>" checked="checked" class="item_<?php echo e($action); ?>" id="module_action[<?php echo e($action); ?>]"/> <?php echo e($action); ?>

                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <li id="sys_div_sort_other_0">
                            <div class="div_sort_order">
                                <input type="checkbox" name="module_action[]" value="listView" />listView
                            </div>
                        </li>
                        <li id="sys_div_sort_other_1">
                            <div class="div_sort_order">
                                <input type="checkbox" name="module_action[]" value="getItem" />getItem
                            </div>
                        </li>
                        <li id="sys_div_sort_other_2">
                            <div class="div_sort_order">
                                <input type="checkbox" name="module_action[]" value="postItem"/>postItem
                            </div>
                        </li>
                        <li id="sys_div_sort_other_3">
                            <div class="div_sort_order">
                                <input type="checkbox" name="module_action[]" value="delete"/>delete
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('module_status') ? ' has-error' : ''); ?>">
            <label for="module_status" class="col-md-2 col-sm-3 control-label">Trạng thái</label>
            <div class="col-md-6 col-sm-9">
                <select class="form-control" name="module_status">
                    <?php echo $optionStatus; ?>

                </select>
                <?php if(isset($errors)&&$errors->has('module_status')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('module_status')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('module_order_no') ? ' has-error' : ''); ?>">
            <label for="module_order_no" class="col-md-2 col-sm-3 control-label">Thứ tự</label>
            <div class="col-md-6 col-sm-9">
                <input type="text" class="form-control" name="module_order_no" id="module_order_no" value="<?php echo e(isset($data['module_order_no'])?$data['module_order_no']:'0'); ?>">
                <?php if(isset($errors)&&$errors->has('module_order_no')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('module_status')); ?></strong>
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
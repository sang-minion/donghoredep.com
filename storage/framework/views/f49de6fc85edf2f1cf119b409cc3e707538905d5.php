<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 05/06/2017
 * Time: 10:00 SA
 */
?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <form name="frmSearch" class="frmSearch" id="frmSearch" method="GET">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <label class="control-label">Từ khóa</label>
                    <div>
                        <input type="text" class="form-control input-sm" name="module_title"
                               <?php if(isset($search['module_title']) && $search['module_title'] !=''): ?>value="<?php echo e($search['module_title']); ?>"<?php endif; ?>>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <label class="control-label">Trạng thái</label>
                    <div>
                        <select name="module_status" class="form-control input-sm">
                            <?php echo $optionStatus; ?>

                        </select>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">
                    <div>
                        <button class="btn" name="submit" value="s" title="tìm kiếm"><i class="fa fa-search fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="row menu-option">
        <div class="col-lg-6 col-md-6 col-sm-6"><h5>Quản lý: Module [tổng số: <?php echo e($total); ?>]</h5></div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right">
            <a href="<?php echo e(route('admin.module_edit')); ?>"> <i class="fa fa-plus" title="thêm mới"></i> </a>
            <a href="javascript:void(0)"> <i class="fa fa-trash" id="deleteMoreItem" title="xóa item"></i> </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <form action="<?php echo e(route('admin.module_delete')); ?>" id="formListItem" name="formListItem" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="table-responsive ">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th width="1%">STT</th>
                            <th width="1%"><input id="checkAll" type="checkbox"></th>
                            <th width="20%">Tên Module</th>
                            <th width="20">Controller</th>
                            <th width="8%">Trạng thái</th>
                            <th width="2%">Action</th>
                        </tr>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($k+1); ?></td>
                                <td><input class="checkItem" name="checkItem[]"  type="checkbox" value="<?php echo e($item->module_id); ?>"> </td>
                                <td><?php echo e($item->module_title); ?></td>
                                <td><?php echo e($item->module_controller); ?></td>
                                <td><?php if($item->module_status == CGlobal::status_show): ?>
                                        <i class="fa fa-check fa-admin green"></i>
                                    <?php else: ?>
                                        <i class="fa fa-remove fa-admin red"></i>
                                    <?php endif; ?>
                                </td>
                                <td><a href="<?php echo e(route('admin.module_edit',['id'=>$item->module_id])); ?>"><i
                                                class="fa fa-edit fa-admin"></i></a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </form>
        </div>
        <?php if(isset($total)&&$total>0): ?>
            <div class="" style="text-align: center;padding: 0px 15px">
                <?php if(isset($paging)): ?>
                    <?php echo $paging; ?>

                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
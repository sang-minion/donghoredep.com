<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 05/06/2017
 * Time: 10:00 SA
 */
?>

<?php $__env->startSection('content'); ?>
    <form action="" class="form-horizontal frmAdd" method="POST" id="frmAdd" name="frmAdd" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="form-group<?php echo e(isset($errors)&& $errors->has('advertise_title') ? ' has-error' : ''); ?>">
            <label for="advertise_title" class="col-md-2 col-sm-3 control-label">Tiêu đề</label>
            <div class="col-md-6 col-sm-9">
                <input id="advertise_title" type="text" class="form-control" name="advertise_title"
                       value="<?php echo e(isset($data['advertise_title'])?$data['advertise_title']: old('advertise_title')); ?>" required
                       autofocus>
                <?php if(isset($errors)&&$errors->has('advertise_title')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('advertise_title')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('advertise_link') ? ' has-error' : ''); ?>">
            <label for="advertise_link" class="col-md-2 col-sm-3 control-label">Link</label>
            <div class="col-md-6 col-sm-9">
                <input id="advertise_link" type="text" class="form-control" name="advertise_link"
                       value="<?php echo e(isset($data['advertise_link'])?$data['advertise_link']: old('advertise_link')); ?>" required
                       autofocus>
                <?php if(isset($errors)&&$errors->has('advertise_link')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('advertise_link')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="advertise_media" class="col-md-2 col-sm-3 control-label">Hình ảnh danh mục</label>
            <div class="col-md-6 col-sm-9">
                <label class="btn btn-primary" for="advertise_media">Upload hình ảnh</label>  <i id="fileName"></i>
                <input type="file" class="" accept="image/jpg,image/jpeg,image/png" name="advertise_media" id="advertise_media" value="" style="display: none">
                <br>
                <div class="col-md-12" id="privewIMG" <?php if(isset($data['advertise_media'])&&$data['advertise_media']!=''): ?> rel="1" <?php else: ?>  rel="0"  <?php endif; ?>>
                    <?php if(isset($data['advertise_media'])&&$data['advertise_media']!=''): ?>
                        <i class="fa fa-remove red" id="xoa-media" title="xóa"></i>
                        <img src="<?php echo e(ThumbImg::thumbBaseNormal(\App\model\Advertise::FOLDER,$id,$data['advertise_media'],400,400,'',true,true,true)); ?>" width="100%"/>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="advertise_intro" class="col-md-2 col-sm-3 control-label">Mô tả</label>
            <div class="col-md-6 col-sm-9">
                <textarea id="advertise_intro" class="form-control" name="advertise_intro" rows="3" autofocus><?php echo e(isset($data['advertise_intro'])?$data['advertise_intro']:old('advertise_intro')); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="product_status" class="col-md-2 col-sm-3 control-label">Vị trí quảng cáo</label>
            <div class="col-md-6 col-sm-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="advertise_index" value="1"
                               <?php if((isset($data['advertise_index'])&&$data['advertise_index']==1)||old('advertise_index')==1): ?> checked <?php endif; ?> />
                        Trang trủ
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="advertise_category" value="1"
                               <?php if((isset($data['advertise_category'])&&$data['advertise_category']==1)||old('advertise_category')==1): ?> checked <?php endif; ?> />
                        Trang danh mục sản phẩm
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="advertise_details" value="1"
                               <?php if((isset($data['advertise_details'])&&$data['advertise_details']==1)||old('advertise_details')==1): ?> checked <?php endif; ?> />
                        Trang chi tiết sản phẩm
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="advertise_popup" value="1"
                               <?php if((isset($data['advertise_popup'])&&$data['advertise_popup']==1)||old('advertise_popup')==1): ?> checked <?php endif; ?> />
                        Popup 1 lần
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('advertise_status') ? ' has-error' : ''); ?>">
            <label for="advertise_status" class="col-md-2 col-sm-3 control-label">Trạng thái</label>
            <div class="col-md-6 col-sm-9">
                <select class="form-control" name="advertise_status">
                    <?php echo $optionStatus; ?>

                </select>
                <?php if(isset($errors)&&$errors->has('advertise_status')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('advertise_status')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10 btn-option">
                <input type="hidden" id="id_hidden" name="id_hidden" value="<?php echo e($id); ?>"/>
                <input type="hidden" id="remove_media" name="remove_media" value="0"/>
                <button type="submit" name="txtSubmit" id="buttonSubmit" class="btn btn-primary">Lưu lại</button>
                <button type="reset" class="btn" id="goback">Bỏ qua</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
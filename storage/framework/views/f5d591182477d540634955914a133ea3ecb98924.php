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

        <div class="form-group<?php echo e(isset($errors)&& $errors->has('product_cate_id') ? ' has-error' : ''); ?>">
            <label for="product_cate_id" class="col-md-2 col-sm-3 control-label">Danh mục sản phẩn</label>
            <div class="col-md-6 col-sm-9">
                <select class="form-control" name="product_cate_id">
                    <?php echo $optionCate; ?>

                </select>
                <?php if(isset($errors)&&$errors->has('product_cate_id')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('product_cate_id')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('product_brand_id') ? ' has-error' : ''); ?>">
            <label for="product_cate_id" class="col-md-2 col-sm-3 control-label">Nhãn hiệu sản phẩn</label>
            <div class="col-md-6 col-sm-9">
                <select class="form-control" name="product_brand_id">
                    <?php echo $optionBrand; ?>

                </select>
                <?php if(isset($errors)&&$errors->has('product_brand_id')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('product_brand_id')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('product_code') ? ' has-error' : ''); ?>">
            <label for="category_title" class="col-md-2 col-sm-3 control-label">Mã sản phẩm</label>
            <div class="col-md-6 col-sm-9">
                <input id="product_code" type="text" class="form-control" name="product_code"
                       value="<?php echo e(isset($data['product_code'])?$data['product_code']: old('product_code')); ?>" required
                       autofocus>
                <?php if(isset($errors)&&$errors->has('product_code')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('product_code')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group ">
            <label for="product_code_replace" class="col-md-2 col-sm-3 control-label">Mã thay thế <i
                        class="fa fa-plus green fa-admin" id="themMa" title="thêm mã"></i></label>
            <div class="col-md-6 col-sm-9">
                <?php
                $arma = isset($data['product_code_replace']) && $data['product_code_replace'] != '' ? unserialize($data['product_code_replace']) : array();
                ?>
                <ul id="listMa">
                    <?php if(!empty($arma)): ?>
                        <?php $__currentLoopData = $arma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="col-md-6 col-sm-6">
                                <input class="form-control " type="text" name="product_code_replace[]" value="<?php echo e($v); ?>"><i
                                        class="fa fa-remove fa-admin red" id="xoa-ma"></i>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <li class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" name="product_code_replace[]" value="">
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('product_title') ? ' has-error' : ''); ?>">
            <label for="product_title" class="col-md-2 col-sm-3 control-label">Tiêu đề</label>
            <div class="col-md-6 col-sm-9">
                <input id="product_title" type="text" class="form-control" name="product_title"
                       value="<?php echo e(isset($data['product_title'])?$data['product_title']: old('product_title')); ?>"
                       required
                       autofocus>
                <?php if(isset($errors)&&$errors->has('product_title')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('product_title')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group ">
            <label for="product_price_input" class="col-md-2 col-sm-3 control-label">Giá nhập</label>
            <div class="col-md-6 col-sm-9">
                <input id="product_price_input" type="number" class="form-control" name="product_price_input"
                       value="<?php echo e(isset($data['product_price_input'])?$data['product_price_input']: old('product_price_input')); ?>"
                       autofocus>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('product_price') ? ' has-error' : ''); ?>">
            <label for="product_price" class="col-md-2 col-sm-3 control-label">Giá bán</label>
            <div class="col-md-6 col-sm-9">
                <input id="product_price" type="number" class="form-control" name="product_price"
                       value="<?php echo e(isset($data['product_price'])?$data['product_price']: old('product_price')); ?>" required
                       autofocus>
                <?php if(isset($errors)&&$errors->has('product_price')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('product_price')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group ">
            <label for="product_price_saleof" class="col-md-2 col-sm-3 control-label">Giảm giá</label>
            <div class="col-md-6 col-sm-9">
                <input id="product_price_saleof" type="number" class="form-control" name="product_price_saleof"
                       value="<?php echo e(isset($data['product_price_saleof'])?$data['product_price_saleof']: old('product_price_saleof')); ?>"
                       autofocus>
            </div>
        </div>
        <div class="form-group ">
            <label for="product_price_multi" class="col-md-2 col-sm-3 control-label">Giá khác <i
                        class="fa fa-plus green fa-admin" id="themGIa" title="thêm bộ giá"></i></label>
            <div class="col-md-6 col-sm-9">
                <ul id="listGia">
                    <?php
                    $argia = isset($data['product_price_multi']) && $data['product_price_multi'] != '' ? unserialize($data['product_price_multi']) : array();
                    ?>
                    <?php if(!empty($argia)): ?>
                        <?php $__currentLoopData = $argia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                Giá mua : <input class="form-control level-price" type="number" name="level[]" min="1"
                                                 value="<?php echo e($k); ?>" autofocus> :
                                <input class="form-control price" type="number" name="price[]" min="0" value="<?php echo e($v); ?>"
                                       autofocus>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <li>
                            Giá mua : <input class="form-control level-price" type="number" name="level[]" min="1"
                                             value="1" autofocus> :
                            <input class="form-control price" type="number" name="price[]" min="0" autofocus>
                        </li>
                        <li>
                            Giá mua : <input class="form-control level-price" type="number" name="level[]" min="1"
                                             value="2" autofocus> :
                            <input class="form-control price" type="number" name="price[]" min="0" autofocus>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label for="product_media" class="col-md-2 col-sm-3 control-label">Hình ảnh</label>
            <div class="col-md-6 col-sm-9">
                <label class="btn btn-primary" for="product_media">Upload hình ảnh</label> <i id="fileName"></i>
                <input type="file" class="" accept="image/jpg,image/jpeg,image/png" name="product_media"
                       id="product_media" value="" style="display: none">
                <br>
                <div class="col-md-12" id="privewIMG"
                     <?php if(isset($data['product_media'])&&$data['product_media']!=''): ?> rel="1" <?php else: ?>  rel="0" <?php endif; ?>>
                    <?php if(isset($data['product_media'])&&$data['product_media']!=''): ?>
                        <i class="fa fa-remove red" id="xoa-media" title="xóa"></i>
                        <img src="<?php echo e(ThumbImg::thumbBaseNormal(\App\model\Product::FOLDER,$id,$data['product_media'],400,400,'',true,true,true)); ?>"
                             width="100%"/>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('product_video') ? ' has-error' : ''); ?>">
            <label for="product_video" class="col-md-2 col-sm-3 control-label">Link video</label>
            <div class="col-md-6 col-sm-9">
                <input id="product_video" type="text" class="form-control" name="product_video"
                       value="<?php echo e(isset($data['product_video'])?$data['product_video']: old('product_video')); ?>"autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="product_multi_media" class="col-md-2 col-sm-3 control-label">Album ảnh</label>
            <div class="col-md-10 col-sm-9">
                <label class="btn btn-primary" for="product_multi_media">Upload album ảnh</label> <i id="totalList"></i>
                <input type="file" class="" accept="image/jpg,image/jpeg,image/png" multiple name="product_multi_media[]"
                       id="product_multi_media" value="" style="display: none">
                <br>
                <div class="col-md-12" id="showIMG"
                     <?php if(isset($data['product_multi_media'])&&$data['product_multi_media']!=''): ?> rel="1"
                     <?php else: ?>  rel="0" <?php endif; ?>>
                    <ul id="showListIMG">
                        <?php if(isset($data['product_multi_media'])&&$data['product_multi_media']!=''): ?>
                            <?php
                            $ar = isset($data['product_multi_media']) && $data['product_multi_media'] != '' ? unserialize($data['product_multi_media']) : array();
                            ?>
                            <?php $__currentLoopData = $ar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="col-md-3 col-sm-4" rel="<?php echo e($k); ?>">
                                    <i class="fa fa-remove red" id="xoa-multi-media" title="xóa" rel="<?php echo e($k); ?>"></i>
                                    <img src="<?php echo e(ThumbImg::thumbBaseNormal(\App\model\Product::FOLDER,$id,$v,400,400,'',true,true,true)); ?>"
                                         style=""/>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-group<?php echo e(isset($errors)&& $errors->has('product_status') ? ' has-error' : ''); ?>">
            <label for="product_status" class="col-md-2 col-sm-3 control-label">Trạng thái</label>
            <div class="col-md-6 col-sm-9">
                <select class="form-control" name="product_status">
                    <?php echo $optionStatus; ?>

                </select>
                <?php if(isset($errors)&&$errors->has('product_status')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('product_status')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="product_status" class="col-md-2 col-sm-3 control-label">Tình trạng sản phẩm</label>
            <div class="col-md-6 col-sm-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="product_focus" value="1"
                               <?php if((isset($data['product_focus'])&&$data['product_focus']==1)||old('product_focus')==1): ?> checked <?php endif; ?> />
                        Sản phẩm nổi bật
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="product_host" value="1"
                               <?php if((isset($data['product_host'])&&$data['product_host']==1)||old('product_host')==1): ?> checked <?php endif; ?> />
                        Sản phẩm mới nhất
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="product_buy_most" value="1"
                               <?php if((isset($data['product_buy_most'])&&$data['product_buy_most']==1)||old('product_buy_most')==1): ?> checked <?php endif; ?> />
                        Sản phẩm bán chạy
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="product_cheapest" value="1"
                               <?php if((isset($data['product_cheapest'])&&$data['product_cheapest']==1)||old('product_cheapest')==1): ?> checked <?php endif; ?> />
                        Sản phẩm rẻ nhất
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="product_promotion" class="col-md-2 col-sm-3 control-label">Nội dung khuyến mại</label>
            <div class="col-md-10 col-sm-9">
                <textarea class="form-control ckeditor  "
                          name="product_promotion"><?php echo e(isset($data['product_promotion'])?stripslashes($data['product_promotion']):old('product_promotion')); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="product_intro" class="col-md-2 col-sm-3 control-label">Mô tả</label>
            <div class="col-md-10 col-sm-9">
                <textarea id="product_intro" class="form-control ckeditor" name="product_intro" rows="3"
                          autofocus><?php echo e(isset($data['product_intro'])? stripslashes($data['product_intro']):old('product_intro')); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="product_details" class="col-md-2 col-sm-3 control-label">Mô tả chi tiết</label>
            <div class="col-md-10 col-sm-9">
                <textarea id="product_details" class="form-control ckeditor" name="product_details" rows="3"
                          autofocus><?php echo e(isset($data['product_details'])? stripslashes($data['product_details']):old('product_details')); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="product_order_no" class="col-md-2 col-sm-3 control-label">Thứ tự</label>
            <div class="col-md-6 col-sm-9">
                <input type="number" class="form-control" name="product_order_no" id="product_order_no" min="0"
                       value="<?php echo e(isset($data['product_order_no'])?$data['product_order_no']:old('product_order_no')); ?>">
            </div>
        </div>
        <div class="form-group ">
            <label for="meta_title" class="col-md-2 col-sm-3 control-label">Meta title</label>
            <div class="col-md-6 col-sm-9">
                <input type="text" class="form-control" name="meta_title" id="meta_title"
                       value="<?php echo e(isset($data['meta_title'])?$data['meta_title']:old('meta_title')); ?>">
            </div>
        </div>
        <div class="form-group ">
            <label for="meta_keywords" class="col-md-2 col-sm-3 control-label">Meta keywords</label>
            <div class="col-md-6 col-sm-9">
                <input type="text" class="form-control" name="meta_keywords" id="meta_keywords"
                       value="<?php echo e(isset($data['meta_keywords'])?$data['meta_keywords']:old('meta_keywords')); ?>">
            </div>
        </div>
        <div class="form-group ">
            <label for="meta_keywords" class="col-md-2 col-sm-3 control-label">Meta description</label>
            <div class="col-md-6 col-sm-9">
                <input type="text" class="form-control" name="meta_description" id="meta_description"
                       value="<?php echo e(isset($data['meta_description'])?$data['meta_description']:old('meta_description')); ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 btn-option">
                <input type="hidden" id="id_hidden" name="id_hidden" value="<?php echo e($id); ?>"/>
                <input type="hidden" id="remove_media" name="remove_media" value="0"/>
                <input type="hidden" id="remove_multi_media" name="remove_multi_media[]" value="-1"/>
                <button type="submit" name="txtSubmit" id="buttonSubmit" class="btn btn-primary">Lưu lại</button>
                <button type="reset" class="btn" id="goback">Bỏ qua</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 12/06/2017
 * Time: 11:58 SA
 */
?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid banner">
        <?php if(!empty($banner)&&!empty($banner[0])): ?>
            <img src="<?php echo e($banner[0]['banner_media']!=''?ThumbImg::thumbBaseNormal(\App\model\Banner::FOLDER,$banner[0]['banner_id'],$banner[0]['banner_media'],1200,600,'',true,true,true):asset('uploads/default.jpg')); ?>"
                 class="img-banner" alt="banner">
            <?php if($banner[0]['banner_link']!=''): ?>
                <div class="col-lg-offset-8 col-md-offset-7 col-sm-offset-7 col-xs-offset-3 col-lg-3 col-md-4 col-sm-4 col-xs-8 videointro">
                    <iframe width="100%" height="100%" src="<?php echo e($banner[0]['banner_link']); ?>" frameborder="0"
                            allowfullscreen></iframe>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <img src="<?php echo e(asset('uploads/default.jpg')); ?>" class="img-banner">
        <?php endif; ?>
    </div>
    <div class="container">
        <div class="brand">
            <h3 class="title-brand">THƯƠNG HIỆU TỐT NHẤT <?php echo e(date('Y',time())); ?></h3>
            <div class="arows">
                <div class="bole"><i class="fa fa-angle-down"></i></div>
            </div>
            <div class="sline">
                <div class="arows-left" title="previous" id="previous"><i class="fa fa-angle-left fa-3x"
                                                                          title="previous"></i></div>
                <div class="col-md-12 col-sm-12 col-xs-12 slider">
                    <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="col-md-3 col-sm-4 col-xs-6 item"
                           href="<?php echo e(route('home.category',['name'=>$v->category_keyword])); ?>"
                           title="<?php echo e($v->category_title); ?>">
                            <img src="<?php echo e(ThumbImg::thumbBaseNormal(\App\model\Category::FOLDER,$v->category_id,$v->category_media,350,150,'',true,true,true)); ?>"
                                 title="<?php echo e($v->category_title); ?>" alt="<?php echo e($v->category_title); ?>"></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <a class="col-md-3 col-sm-4 col-xs-6 item" href="" title="">
                            <img src="" title="" alt="" style="background-color: #2b542c"></a>
                        <a class="col-md-3 col-sm-4 col-xs-6 item" href="" title="">
                            <img src="" title="" alt="" style="background-color: #002a80"></a>
                        <a class="col-md-3 col-sm-4 col-xs-6 item" href="" title="">
                            <img src="" title="" alt="" style="background-color: #4c4c4c"></a>
                        <a class="col-md-3 col-sm-4 col-xs-6 item" href="" title="">
                            <img src="" title="" alt="" style="background-color: red"></a>
                        <a class="col-md-3 col-sm-4 col-xs-6 item" href="" title="">
                            <img src="" title="" alt="" style="background-color: #5cb85c"></a>
                        <a class="col-md-3 col-sm-4 col-xs-6 item" href="" title="">
                            <img src="" title="" alt="" style="background-color: #cc5500"></a>
                </div>
                <div class="arows-right" title="next" id="next"><i class="fa fa-angle-right fa-3x" title="next"></i>
                </div>
            </div>
        </div>
        <div class="product">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#Pfocus">sản phẩm nổi bật</a>
                    <div class="arows">
                        <div class="bole"><i class="fa fa-angle-down"></i></div>
                    </div>
                </li>
                <li><a data-toggle="tab" href="#Phost">mới nhất</a>
                    <div class="arows">
                        <div class="bole"><i class="fa fa-angle-down"></i></div>
                    </div>
                </li>
                <li><a data-toggle="tab" href="#Pmost">mua nhiều nhất</a>
                    <div class="arows">
                        <div class="bole"><i class="fa fa-angle-down"></i></div>
                    </div>
                </li>
                <li><a data-toggle="tab" href="#Pcheapest">rẻ nhất</a>
                    <div class="arows">
                        <div class="bole"><i class="fa fa-angle-down"></i></div>
                    </div>
                </li>
            </ul>
            <div class="tab-content">
                <div id="Pfocus" class="tab-pane fade in active">
                    <div class="lisproduct">
                        <?php $__currentLoopData = $pdFocus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-4 col-md-3 itemproduct">
                                <a class="thumbnail"
                                   href="<?php echo e(route('home.details',['name'=>Utility::pregReplaceStringAlias($v->product_title)])); ?>"
                                   title="<?php echo e($v->product_title); ?>">
                                    <div class="sale">Mua 1 Tặng 3</div>
                                    <img src="<?php echo e(asset('uploads/default.jpg')); ?>" alt="<?php echo e($v->product_title); ?>"
                                         title="<?php echo e($v->product_title); ?>">
                                    <div class="caption" title="<?php echo e($v->product_title); ?>">
                                        <h4 title="<?php echo e($v->product_title); ?>"><?php echo e($v->product_title); ?></h4>
                                        <h5>
                                            <div class="gia" title="<?php echo e($v->product_title); ?>">
                                                <span class="ok"><?php echo e(Funclip::numberFormat($v->product_price)); ?>

                                                    đ</span><br>
                                                <?php if($v->product_price_saleof>0): ?>
                                                    <span class="notok"><?php echo e(Funclip::numberFormat($v->product_price_saleof)); ?>

                                                        đ</span>
                                                <?php endif; ?>
                                            </div>
                                            <button class="btn btn-default" role="button" title="<?php echo e($v->product_title); ?>">
                                                Xem ngay
                                            </button>
                                        </h5>
                                    </div>
                                    <?php
                                    $argia = isset($v['product_price_multi']) && $v['product_price_multi'] != '' ? unserialize($v['product_price_multi']) : array();
                                    ?>
                                    <?php if(!empty($argia)): ?>
                                        <div class="recaption">
                                            <?php $__currentLoopData = $argia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span>Giá mua <?php echo e($k); ?>: <?php echo e(Funclip::numberFormat($v)); ?>đ / sản phẩn</span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </div>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    <?php if($totalFocus>CGlobal::num_record_per_page_product): ?>
                        <h4 class="loadProduct">
                            <button class="btn btn-default" id="load" data="1" page="1">còn nữa xem thêm</button>
                        </h4>
                    <?php endif; ?>
                </div>
                <div id="Phost" class="tab-pane fade">
                    <div id="Pfocus" class="tab-pane fade in active">
                        <div class="lisproduct">
                            <?php $__currentLoopData = $pdHost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-4 col-md-3 itemproduct">
                                    <a class="thumbnail"
                                       href="<?php echo e(route('home.details',['name'=>Utility::pregReplaceStringAlias($v->product_title)])); ?>"
                                       title="<?php echo e($v->product_title); ?>">
                                        <img src="<?php echo e(asset('uploads/default.jpg')); ?>" alt="<?php echo e($v->product_title); ?>"
                                             title="<?php echo e($v->product_title); ?>">
                                        <div class="caption" title="<?php echo e($v->product_title); ?>">
                                            <h4 title="<?php echo e($v->product_title); ?>"><?php echo e($v->product_title); ?></h4>
                                            <h5>
                                                <div class="gia" title="<?php echo e($v->product_title); ?>">
                                                <span class="ok"><?php echo e(Funclip::numberFormat($v->product_price)); ?>

                                                    đ</span><br>
                                                    <?php if($v->product_price_saleof>0): ?>
                                                        <span class="notok"><?php echo e(Funclip::numberFormat($v->product_price_saleof)); ?>

                                                            đ</span>
                                                    <?php endif; ?>
                                                </div>
                                                <button class="btn btn-default" role="button"
                                                        title="<?php echo e($v->product_title); ?>">Xem ngay
                                                </button>
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        <?php if($totalHost>CGlobal::num_record_per_page_product): ?>
                            <h4 class="loadProduct">
                                <button class="btn btn-default" id="load" data="1" page="1">còn nữa xem thêm</button>
                            </h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div id="Pmost" class="tab-pane fade">
                    <div id="Pfocus" class="tab-pane fade in active">
                        <div class="lisproduct">
                            <?php $__currentLoopData = $pdMost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-4 col-md-3 itemproduct">
                                    <a class="thumbnail"
                                       href="<?php echo e(route('home.details',['name'=>Utility::pregReplaceStringAlias($v->product_title)])); ?>"
                                       title="<?php echo e($v->product_title); ?>">
                                        <img src="<?php echo e(asset('uploads/default.jpg')); ?>" alt="<?php echo e($v->product_title); ?>"
                                             title="<?php echo e($v->product_title); ?>">
                                        <div class="caption" title="<?php echo e($v->product_title); ?>">
                                            <h4 title="<?php echo e($v->product_title); ?>"><?php echo e($v->product_title); ?></h4>
                                            <h5>
                                                <div class="gia" title="<?php echo e($v->product_title); ?>">
                                                <span class="ok"><?php echo e(Funclip::numberFormat($v->product_price)); ?>

                                                    đ</span><br>
                                                    <?php if($v->product_price_saleof>0): ?>
                                                        <span class="notok"><?php echo e(Funclip::numberFormat($v->product_price_saleof)); ?>

                                                            đ</span>
                                                    <?php endif; ?>
                                                </div>
                                                <button class="btn btn-default" role="button"
                                                        title="<?php echo e($v->product_title); ?>">Xem ngay
                                                </button>
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        <?php if($totalMost>CGlobal::num_record_per_page_product): ?>
                            <h4 class="loadProduct">
                                <button class="btn btn-default" id="load" data="1" page="1">còn nữa xem thêm</button>
                            </h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div id="Pcheapest" class="tab-pane fade">
                    <div id="Pfocus" class="tab-pane fade in active">
                        <div class="lisproduct">
                            <?php $__currentLoopData = $pdCheapest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-4 col-md-3 itemproduct">
                                    <a class="thumbnail"
                                       href="<?php echo e(route('home.details',['name'=>Utility::pregReplaceStringAlias($v->product_title)])); ?>"
                                       title="<?php echo e($v->product_title); ?>">
                                        <img src="<?php echo e(asset('uploads/default.jpg')); ?>" alt="<?php echo e($v->product_title); ?>"
                                             title="<?php echo e($v->product_title); ?>">
                                        <div class="caption" title="<?php echo e($v->product_title); ?>">
                                            <h4 title="<?php echo e($v->product_title); ?>"><?php echo e($v->product_title); ?></h4>
                                            <h5>
                                                <div class="gia" title="<?php echo e($v->product_title); ?>">
                                                <span class="ok"><?php echo e(Funclip::numberFormat($v->product_price)); ?>

                                                    đ</span><br>
                                                    <?php if($v->product_price_saleof>0): ?>
                                                        <span class="notok"><?php echo e(Funclip::numberFormat($v->product_price_saleof)); ?>

                                                            đ</span>
                                                    <?php endif; ?>
                                                </div>
                                                <button class="btn btn-default" role="button"
                                                        title="<?php echo e($v->product_title); ?>">Xem ngay
                                                </button>
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        <?php if($totalCheapest>CGlobal::num_record_per_page_product): ?>
                            <h4 class="loadProduct">
                                <button class="btn btn-default" id="load" data="1" page="1">còn nữa xem thêm</button>
                            </h4>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
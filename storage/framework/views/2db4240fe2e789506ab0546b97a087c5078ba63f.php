<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo e(asset('resources/assets/media/favicon.ico ')); ?>">
    <title><?php echo e(CGlobal::$title); ?></title>
<?php echo CGlobal::$extraMeta; ?>

<!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Styles -->
    <link href="<?php echo e(asset('resources/assets/focus/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('resources/assets/focus/css/reset.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('resources/assets/backend/css/home.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('resources/assets/libs/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <script type="text/javascript">
        var BASE_URL = "<?php echo e(config('app.url')); ?>";
    </script>
    <script src="<?php echo e(asset('resources/assets/focus/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('resources/assets/focus/js/reset.js')); ?>"></script>
    <script src="<?php echo e(asset('resources/assets/backend/js/home.js')); ?>"></script>
    <?php echo CGlobal::$extraHeaderCSS; ?>

    <?php echo CGlobal::$extraHeaderJS; ?>

    <?php $__currentLoopData = \App\model\Script::getAll(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item->post_header==CGlobal::status_show&&$item->script_status==CGlobal::status_show): ?>
            <?php echo $item->script_content; ?>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</head>
<body>
<div id="app">
    <div class="container-fluid">
        <div class="row logo-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="logo navbar-brand" href="<?php echo e(url('/')); ?>" title="<?php echo e(config('app.name')); ?>"></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <ul class="">
                    <li class="shopping-cart"><a href="#" title="Giỏ hàng"><i class="fa fa-shopping-cart"></i><span
                                    id="shopping-cart">(5) 500.000đ</span></a></li>
                    <li class="shape">&nbsp</li>
                    <li class="hotline"><a href="tel:<?php echo e(CGlobal::$hosline); ?>" title="host line"> <i
                                    class="fa fa-tablet"> </i> <?php echo e(CGlobal::$hosline); ?>

                        </a></li>
                </ul>
            </div>
        </div>
        <div class="row menu">
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo e(route('index')); ?>" title="<?php echo e(config('app.name')); ?>"><i
                                            class="fa fa-home"></i></a></li>
                            <?php echo CGlobal::$textMenu; ?>

                        </ul>
                        <form class="navbar-form navbar-right" method="GET" action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm đồng hồ bạn cần ...">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <?php echo $__env->yieldContent('content'); ?>
            <?php $__currentLoopData = \App\model\Script::getAll(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->post_end==CGlobal::status_show&&$item->script_status==CGlobal::status_show): ?>
                    <?php echo $item->script_content; ?>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row footer">
            <div class="container">
                <?php
                $loaidongho = \App\model\Category::getAll(['category_parent_id' => \App\model\Category::getIdByKeyword(\CGlobal::key_danh_muc_dh)], 0);
                $hdmuahang = \App\model\Category::getById(\App\model\Category::getIdByKeyword(\CGlobal::key_huong_dan_mua_hang));
                $baohanh = \App\model\Category::getById(\App\model\Category::getIdByKeyword(\CGlobal::key_bao_hanh_doi_tra));
                $lienhe = \App\model\Category::getById(\App\model\Category::getIdByKeyword(\CGlobal::key_lien_he));
                $ar = isset($lienhe['category_intro']) && $lienhe['category_intro'] != '' ? unserialize($lienhe['category_intro']) : array();
                $arPhone = array();
                $arAddress = array();
                $arTitle = array();
                if (!empty($ar)) {
                    $arPhone = $ar['phone'];
                    $arAddress = $ar['address'];
                    $arTitle = $ar['title'];
                }
                ?>
                <div class="col-md-3 col-sm-6 col">
                    <h3 class="title">Bộ sưu tập</h3>
                    <ul>
                        <?php if(!empty($loaidongho)): ?>
                            <?php $__currentLoopData = $loaidongho; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->horizontal_menu==\CGlobal::status_show&&$item->category_status==\CGlobal::status_show): ?>
                                    <li><a href="<?php echo e(route('home.category',['name'=>$item->category_keyword])); ?>"
                                           title="<?php echo e($item->category_title); ?>"><?php echo e($item->category_title); ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                    <h3 class="title">Về chúng tôi</h3>
                    <ul>
                        <?php if(!empty($hdmuahang)&&$hdmuahang->category_status==\CGlobal::status_show): ?>
                            <li><a href="<?php echo e(route('home.category',['name'=>$hdmuahang->category_keyword])); ?>"
                                   title="<?php echo e($hdmuahang->category_title); ?>"><?php echo e($hdmuahang->category_title); ?></a></li>
                        <?php endif; ?>
                        <?php if(!empty($baohanh)&&$baohanh->category_status==\CGlobal::status_show): ?>
                            <li><a href="<?php echo e(route('home.category',['name'=>$baohanh->category_keyword])); ?>"
                                   title="<?php echo e($baohanh->category_title); ?>"><?php echo e($baohanh->category_title); ?></a></li>
                        <?php endif; ?>
                        <li><a href="javascript:void(0)">Chúng tôi giúp được gì cho bạn ?</a></li>
                        <li><a href="javascript:void(0)">Vì sao bạn chọn chúng tôi ?</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col">
                    <h3 class="title">Thông tin liên hệ</h3>
                    <ul>
                        <?php if(!empty($arAddress)&&!empty($arTitle)): ?>
                            <?php $__currentLoopData = $arAddress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$adr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><b><?php echo e($arTitle[$k]); ?></b><br><span><?php echo e($adr); ?></span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                    <h3 class="title">Điện thoại</h3>
                    <?php if(!empty($arPhone)): ?>
                        <?php $__currentLoopData = $arPhone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="hostline" href="tel:<?php echo e($phone); ?>" title="hotline:<?php echo e($phone); ?>"><i
                                        class="fa fa-phone"></i><?php echo e(Funclip::formatPhonenumber($phone)); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-5 col-sm-12 col">
                    <h3 class="title">Kết nối với chúng tôi</h3>
                    <div class="contacts">
                        <img src="<?php echo e(asset('uploads/default.jpg')); ?>" width="100%">
                    </div>
                </div>
            </div>
            <div class="container-fluid editby">
                <div class="container">
                    © 3wingroup <?php echo e(date('Y',time())); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<?php echo CGlobal::$extraFooterCSS; ?>

<?php echo CGlobal::$extraFooterJS; ?>

</body>
</html>

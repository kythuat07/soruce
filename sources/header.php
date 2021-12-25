<?php

    
    ($com!='') ? $linkcom = "&langcom=".$com : $linkcom ='';
    $num_cart = 0;
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $key => $value) {
            $num_cart = $num_cart + $value['so_luong'];
        }
    }
    $camket=$d->getImg(1166);
	

	
?>
<header class="md-none xs-block container-fluid">
    <div class="row m-5">
        <div class="col-xs-4 text-center">
            <a href="<?=URLPATH?>" title="<?=$ten_cong_ty?>" class="logo">
                <img src="<?=$logo?>" alt="<?=$ten_cong_ty?>" />
            </a>
        </div>
        <div class="col-xs-8">
            <div class="item-camket text-right" style="padding: 0px;">
				<div class="content">
					<strong>Hỗ trợ 24/7</strong>
					<span><i class="glyphicon glyphicon-phone-alt"></i> 0912817117</span>
				</div>
			</div>
        </div>
    </div>
</header>
<header class="xs-none">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-8">
                <a href="<?=URLPATH?>" title="<?=$ten_cong_ty?>" class="logo">
                    <img src="<?=$logo?>" alt="<?=$ten_cong_ty?>" />
                </a>
            </div>
            <div class="md-none sm-block xs-none col-sm-6">
                <form class="navbar-form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                </form>
            </div>
            <div class="col-md-9 col-sm-3 col-xs-3">
                <div class="row m-5">
                    <?php foreach ($camket as $key => $value) {?>
                    <div class="col-sm-3 p5 sm-none">
                        <div class="item-camket">
                            <img src="<?=URLPATH?>img_data/images/<?=$value['picture']?>" alt="<?=$value['title_'.$lang]?>"/>
                            <div class="content">
                                <strong><?=$value['title_'.$lang]?></strong>
                                <span><?=$value['body_'.$lang]?></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-md-3 p5 ">
                        <div class="gio-hang">
                            <a class="xs-none" href="<?=URLPATH?>gio-hang.html">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                Giỏ hàng (<?=$num_cart?>)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= URLPATH?>"><i class="glyphicon glyphicon-home"></i></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php include 'module/menu.php'; ?>
            </ul>
            <form class="navbar-form navbar-right sm-none" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                </div>
                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
            </form>
            
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<?php include 'module/mmenu.php'; ?>
<?php 
    $product_c = $d->o_fet("select * from #_category where hien_thi = 1 AND module = 3 and menu = 1 order by so_thu_tu asc, id desc");
?>
<?php include 'module/slider.php';  ?>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-4">
            <?php include 'right.php'; ?>
        </div>
        <div class="col-md-9 col-sm-8">
            <?php foreach ($product_c as $key => $value) {
                $id_loai=$value['id'].$d->findIdSub($value['id']);
                $sanpham = $d->o_fet("select * from #_sanpham where hien_thi = 1  and FIND_IN_SET(id_loai,'$id_loai') order by so_thu_tu asc, id desc limit 0,15");
            ?>
            <h2  class="title_c">
                <a class="title-sp" href="<?=URLPATH.$value['alias_'.$lang]?>.html" title="<?=$value['ten_'.$lang]?>"><?=$value['ten_'.$lang]?></a>
                <a class="xemtatca" href="<?=URLPATH.$value['alias_'.$lang]?>.html">Xem Tất Cả</a>
            </h2>
            <div class="list-product row m-10">
                <?php foreach ($sanpham as $key => $item) {
                    $gia=$item['gia'];
                    $km = $item['khuyen_mai'];
                ?>
                <div class="col-md-3 col-sm-6 p10">
                    <div class="item-product ">
                        <a href="<?=URLPATH.$item['alias_'.$lang]?>.html" title="<?=$item['ten_'.$lang]?>">
                            <img src="<?=URLPATH?>img_data/images/<?=$item['hinh_anh']?>" alt="<?=$item['ten_'.$lang]?>" />
                        </a>
                        <h3><a href="<?=URLPATH.$item['alias_'.$lang]?>.html" title="<?=$item['ten_'.$lang]?>"><?=$item['ten_'.$lang]?></a></h3>
                        <div class="gia-ban">
                            <?php if($km>0){?>
                            Giá bán:<strong> <?=$d->vnd($km)?></strong>
                            <?php }else{?>
                                <?php if($gia==0){ ?>
                                Giá bán: <strong>Liên hệ</strong>
                                <?php }else{?>
                                    Giá bán: <strong><?=$d->vnd($gia)?></strong>
                                <?php }?>
                            <?php }?>
                        </div>
                        <div class="chitiet">
                            <a href="<?=URLPATH.$item['alias_'.$lang]?>.html">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                Mua ngay
                            </a>
                        </div>
                    </div>
                </div>             
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        
    </div>
</div>

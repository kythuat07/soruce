<?php
    $textfooter = $d->getTemplates(28);
    $nav_f   = $d->o_fet("select * from #_category where id_loai = 1113 and hien_thi=1 order by so_thu_tu asc, id desc");
    $textfooter1 = $d->getTemplates(50);
    $quydinh   = $d->o_fet("select id,ten_vn from #_category where id=1160 and hien_thi=1 order by so_thu_tu asc, id desc limit 0,1");
    $chamsoc   = $d->o_fet("select id,ten_vn from #_category where id=1167 and hien_thi=1 order by so_thu_tu asc, id desc limit 0,1");
    $listquydinh = $d->o_fet("select * from #_tintuc where id_loai=1160 and hien_thi=1 order by so_thu_tu asc, id desc");
    $listchamsoc = $d->o_fet("select * from #_tintuc where id_loai=1167 and hien_thi=1 order by so_thu_tu asc, id desc");
?>
<div class="dangky">
    <div class="container">
        <h4>Đăng ký nhận thông tin khuyến mãi</h4>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <form class="row m-5">
                    <div class=" col-sm-5 p5 form-group">
                        <input type="number"  id="sdt_dk" placeholder="Số điện thoại" name="so_dt" class="form-control"/>
                    </div>
                    <div class=" col-sm-5 p5 form-group">
                        <input type="email" id="email_dk" required placeholder="Email" name="email" class="form-control"/>
                    </div>
                    <div class=" col-sm-2 p5 form-group">
                        <button  onclick="register_email()" type="button" class="btn form-control btn-dk">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>    
</div>
<footer>
    <ul class="menu-f">
        <?php foreach ($nav_f as $key => $value) {?>
            <li><a href="<?=URLPATH.$value['alias_vn']?>.html" title="<?=$value['ten_vn']?>"><?=$value['ten_vn']?></a></li>
        <?php } ?>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="title-f"><?=$textfooter['ten_'.$lang]?></h4>
                <?= $textfooter['noi_dung_vn']?>
            </div>
            <div class="col-sm-8">
                <div class="row m-5">
                    <div class="col-sm-4 p5">
                        <h4 class="title-f"><?=$quydinh[0]['ten_'.$lang]?></h4>
                        <ul>
                            <?php foreach ($listquydinh as $key => $value) {?>
                            <li><a href="<?=URLPATH.$value['alias_'.$lang]?>.html"><?=$value['ten_'.$lang]?></a></li>  
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-sm-4 p5">
                        <h4 class="title-f"><?=$chamsoc[0]['ten_'.$lang]?></h4>
                        <ul>
                            <?php foreach ($listchamsoc as $key => $value) {?>
                            <li><a href="<?=URLPATH.$value['alias_'.$lang]?>.html"><?=$value['ten_'.$lang]?></a></li>  
                            <?php } ?> 
                        </ul>
                    </div>
                    <div class="col-sm-4 p5">
                        <h4 class="title-f"><?=$textfooter1['ten_'.$lang]?></h4>
                        <div>
                            <?= $textfooter1['noi_dung_'.$lang]?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="chantrang">
        <div class="container text-center">
            <?= $copyright ?> - <?=$backlink?>
        </div>
    </div>
</footer>
<?php include 'module/call_to_action.php';?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=350125278987106&autoLogAppEvents=1"></script>
<script language="javascript">
    function register_email(){
        if($('#email_dk').val()=="" && $('#sdt_dk').val() ==''){
            alert('Vui lòng nhập email hoặc số điện thoại');
        }else{
            $.ajax({
                url : "sources/ajax-search.php",
                type : "post",
                dataType:"text",
                data : {
                    do      	:   'register_email',
                    email   	:   $('#email_dk').val(),
					email2   	:   $('#sdt_dk').val()
                },
                success : function (result){
                    if(result == "ok"){
						$('#email_dk').val('');
						$('#sdt_dk').val('');
                        alert('Đăng ký thành công');
                    }else{
                        alert('Đăng ký không thành công'+result);
                    }
                }
            });
        }

    }
</script>
<?php
?>
<script src="<?=URLPATH?>templates/module/bootstrap/js/bootstrap.js"></script>
<link href="<?=URLPATH?>templates/module/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
<script src="<?=URLPATH?>templates/js/main.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script>
	$(function() {
		var a = $('.item-product').matchHeight();
		console.log(a);
	});
</script>
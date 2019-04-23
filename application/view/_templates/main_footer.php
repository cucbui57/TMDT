<?php
require APP . 'view/_templates/footer-copyright.php';
?>
<a href="#0" class="cd-top js-cd-top" style="z-index: 10">Top</a>
</body>

<script src="<?php echo URL ?>js/jquery-1.11.0.min.js"></script>
<script src="<?php echo URL ?>js/bootstrap.min.js"></script>
<script src="<?php echo URL ?>js/jquery.cookie.js"></script>
<script src="<?php echo URL ?>js/waypoints.min.js"></script>
<script src="<?php echo URL ?>js/bootstrap-hover-dropdown.js"></script>
<script src="<?php echo URL ?>js/owl.carousel.min.js"></script>
<script src="<?php echo URL ?>js/front.js"></script>
<script src="<?php echo URL ?>js/toTop.js"></script>
<script src="<?php echo URL ?>js/jquery-confirm.min.js"></script>
<script>
	function add(id){
		var size = $('#size').val();
		var quantity = $('#quantity').val();
		$.post('<?php echo URL."giohang/" ?>add', {'id': id, 'size': size, 'quantity': quantity}, function() {
			$.confirm({
				title: "Xác nhận",
			    content: "Thêm vào giỏ hàng thành công",
			    backgroundDismiss: true,
			    boxWidth: '20%',
				useBootstrap: false,
				autoClose: 'OK|2000',
			    buttons: {
			    	OK: {
			    		text: "OK",
			        },
			    }
		    });
		    $("#cartBtn").load("<?php echo URL ?>trangchu #cartNum");
		    $("#cartBtn-sm").load("<?php echo URL ?>trangchu #cartNum-sm");
		});
	}

	function deleteItem(id){
		$.post("<?php echo URL."giohang/" ?>deleteItem", {'id':id}, function(data) {
			$("#cartList").load("<?php echo URL ?>giohang #cartList");
			$("#cartBtn").load("<?php echo URL ?>trangchu #cartNum");
			$("#cartBtn-sm").load("<?php echo URL ?>trangchu #cartNum-sm");
			$("#checkout-cart").load("<?php echo URL ?>giohang #checkout-cart");
		});
	}

	function downItem(id){
		quantity = $("#quantity_"+id).val();
		size = $("#size_"+id).text().trim();
		quantity = parseInt(quantity) - 1;
		if (quantity < 1) {
			quantity = 1;
		}
		$("#quantity_"+id).val(quantity);
		$.post("<?php echo URL."giohang/" ?>update", {'id':id,'quantity':quantity, 'size': size}, function(data) {
			$("#cartList").load("<?php echo URL ?>giohang #cartList");
			$("#checkout-cart").load("<?php echo URL ?>giohang #checkout-cart");
		});
	}

	function upItem(id){
		quantity = $("#quantity_"+id).val();
		size = $("#size_"+id).text().trim();
		quantity = parseInt(quantity) + 1;
		$("#quantity_"+id).val(quantity);
		$.post("<?php echo URL."giohang/" ?>update", {'id':id,'quantity':quantity, 'size': size}, function(data) {
			$("#cartList").load("<?php echo URL ?>giohang #cartList");
			$("#checkout-cart").load("<?php echo URL ?>giohang #checkout-cart");
		});
	}

	function getDistrict(id, tmp){
		$("#ward_user").html('<option value="">---Chọn---</option>');
		$.post("<?php echo URL."dangki/" ?>getDistrict", {'id':id, 'tmp':tmp}, function(data) {
			$("#district_id").html(data);
		});
	}

	function getWard(id, tmp){
		$.post('<?php echo URL."dangki/" ?>getWard', {'id':id, 'tmp':tmp}, function(data) {
			$("#ward_id").html(data);
		});
	}	
</script>
</html>
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
<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebSite",
		"url": "http://dongphucvanthinh.com",
		"name": "đồng phục vân thịnh",
		"potentialAction": {
			"@type": "SearchAction",
			"target": "http://dongphucvanthinh.com/search?q={query}",
			"query-input": "required name=query"
		}
	}
</script>
<script type="application/ld+json">
	{
		"@context": 
		"https://schema.org",
		"@type": "Organization",
		"name": "đồng phục vân thịnh",
		"url": "http://dongphucvanthinh.com",
		"description": "Đồng phục Vân Thịnh chuyên sản xuất và gia công đồng phục cho các công ty, văn phòng, công nhân. Quý khách có nhu cầu may đồng phục theo số đo cũng như theo size hãy liên hệ với chúng tôi để được tư vấn trực tiếp về ưu đãi cũng như dịch vụ may đồng phục với giá hợp lý nhất.",
		"telephone": "0396787758",
		"logo": "http://dongphucvanthinh.com/public/img/logo.png",
		"image": "http://dongphucvanthinh.com/public/img/logo.png",
		"sameAs": [],
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "Thôn Nội Am, xã Liên Ninh, huyện Thanh Trì",
			"addressLocality": "Hà Nội",
			"addressRegion": "",
			"postalCode": "",
			"addressCountry": "Vietnam"
		}
	}
</script>
<?php
if(isset($this->url_active[2])){
	if($this->url_active[2] == 'chitiet'){
		?>
		<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@id": "http://dongphucvanthinh.com/sanpham/chitiet/0<?php if (isset($product->id)) echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>#product",
				"@type": "Product",
				"brand": {
					"@type": "Brand","name": "đồng phục vân thịnh"
				},
				"sku": "",
				"mpn": "",
				"description": "<?php if (isset($product->description)) echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>",
				"url": "https://galabasi.myshopify.com/products/kk",
				"name": "<?php if (isset($product->name)) echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>",
				"image": "<?php if (isset($product->image)) echo URL. htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>",
				"itemCondition": "http://schema.org/NewCondition",
				"offers": [{
					"@type": "Offer",
					"price": "Liên hệ",
					"priceCurrency": "VND",
					"itemCondition": "http://schema.org/NewCondition",
					"url": "http://dongphucvanthinh.com/sanpham/chitiet/0<?php if (isset($product->id)) echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>",
					"sku": "",
					"mpn": "",
					"availability": "https://schema.org/InStock",
					"gtin14": ""
				}]
			}
		</script>
		<?php }} ?>
		</html>
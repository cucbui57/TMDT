<div id="all">
	<div id="content">
		<div class="container">

			<div class="col-md-9 col-sm-8 pull-right" style="z-index:3">
				<div class="box info-bar">
					<div class="row">
						<div class="col-sm-12 col-md-12 products-showing">
							<h3><?php echo $title ?></h3>
						</div>

					</div>
				</div>
				<div class="row products">

					<?php
					if(isset($products)){
						foreach ($products as $product_sp) {
							?>
							<div class="col-md-3 col-sm- col-xs-6">
								<div class="product">
									<div class="flip-container">
										<div class="flipper">
											<div class="front">
												<a href="<?php if (isset($product_sp->id)) echo "chitiet/0".htmlspecialchars($product_sp->id, ENT_QUOTES, 'UTF-8');?>">
													<img src="<?php if (isset($product_sp->image)) echo URL. htmlspecialchars($product_sp->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" style = "max-width: 100%; background-size: contain;">
												</a>
											</div>
											<div class="back">
												<a href="<?php if (isset($product_sp->id)) echo "chitiet/0".htmlspecialchars($product_sp->id, ENT_QUOTES, 'UTF-8');?>">
													<img src="<?php if (isset($product_sp->image)) echo URL. htmlspecialchars($product_sp->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive">
												</a>
											</div>
										</div>
									</div>
									<a href="<?php if (isset($product_sp->id)) echo "chitiet/0".htmlspecialchars($product_sp->id, ENT_QUOTES, 'UTF-8');?>" class="invisible">
										<img src="<?php if (isset($product_sp->image)) echo URL. htmlspecialchars($product_sp->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive">
									</a>
									<div class="text">
										<h3 style="margin: 10px auto"><a href="<?php if (isset($product_sp->id)) echo "chitiet/0".htmlspecialchars($product_sp->id, ENT_QUOTES, 'UTF-8');?>"><?php if (isset($product_sp->name)) echo htmlspecialchars($product_sp->name, ENT_QUOTES, 'UTF-8'); ?></a></h3>
										<p class="price" style="margin-bottom: 10px">Mã SP: 0<?php if (isset($product_sp->id)) echo htmlspecialchars($product_sp->id, ENT_QUOTES, 'UTF-8'); ?></p>
										<p class="price" style="color: red; font-weight: bold; margin-bottom: 10px">Giá bán: Liên hệ</p>
									</div>
								</div>
							</div>
							<?php } } else{
								header('Location:'.URL.'problem');
							} ?>
						</div>
						<div class="pages">
							<ul class="pagination">
								<?php
								if(isset($total->num)){
									if($total->num > "16"){
										?>
										<li><a href="<?php echo URL.'sanpham'; 
										if(isset($this->url_active[3])) echo '/'. $this->url_active[3];
										echo '?page=1' ?>">&laquo;</a>
									</li>
									<?php
									$result = $total->num/16;
									for($page = 1; $page < $result+1; $page++){
										?>
										<li class="<?php if(isset($_GET['page'])){
											if($_GET['page'] == $page) echo 'active';
										} else {
											if($page == 1) echo 'active';
										} ?>"><a href="<?php echo URL.'sanpham'; 
										if(isset($this->url_active[3])) echo '/'. $this->url_active[3];
										echo '?page='.($page) ?>"><?php echo $page ?></a>
									</li>
									<?php } ?>
									<li><a href="<?php echo URL.'sanpham'; 
									if(isset($this->url_active[3])) echo '/'. $this->url_active[3];
									echo '?page='.((int)($result + 1)) ?>">&raquo;</a>
								</li>
								<?php } } ?>
							</ul>
						</div>

					</div>



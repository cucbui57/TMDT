<div id="all">
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <div id="main-slider">
                    <div class="item">
                        <img src="img/main-slider1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/main-slider2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/main-slider3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

         <div id="hot">
            <div class="box">
                <div class="container">
                    <div class="col-md-12">
                        <h2>sản phẩm nổi bật</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="col-md-12">
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
                                                <a href="<?php if (isset($product_sp->id)) echo "sanpham/chitiet/0".htmlspecialchars($product_sp->id, ENT_QUOTES, 'UTF-8');?>">
                                                    <img src="<?php if (isset($product_sp->image)) echo URL. htmlspecialchars($product_sp->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" style = "width: 100%; background-size: contain;">
                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="<?php if (isset($product_sp->id)) echo "sanpham/chitiet/0".htmlspecialchars($product_sp->id, ENT_QUOTES, 'UTF-8');?>">
                                                    <img src="<?php if (isset($product_sp->image)) echo URL. htmlspecialchars($product_sp->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php if (isset($product_sp->id)) echo "sanpham/chitiet/0".htmlspecialchars($product_sp->id, ENT_QUOTES, 'UTF-8');?>" class="invisible">
                                        <img src="<?php if (isset($product_sp->image)) echo URL. htmlspecialchars($product_sp->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive">
                                    </a>
                                    <div class="text">
                                        <h3 style="margin: 10px auto"><a href="<?php if (isset($product_sp->id)) echo "chitiet/0".htmlspecialchars($product_sp->id, ENT_QUOTES, 'UTF-8');?>"><?php if (isset($product_sp->name)) echo htmlspecialchars($product_sp->name, ENT_QUOTES, 'UTF-8'); ?></a></h3>
                                        <p class="price"><?php if (isset($product_sp->price)) echo htmlspecialchars($product_sp->price, ENT_QUOTES, 'UTF-8'); ?> VNĐ</p>
                                        <p class="buttons">
                                            <a href="<?php if (isset($product_sp->id)) echo "sanpham/chitiet/0".htmlspecialchars($product_sp->id, ENT_QUOTES, 'UTF-8');?>" class="btn btn-primary">Chi tiết</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <?php } } else{
                                header('Location:'.URL.'problem');
                            } ?>
                    </div>
                </div>
            </div>
            <div class="pages">
                <p class="loadMore">
                    <a href="<?php echo URL ?>sanpham/dongphuccongsovanphong" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Xem thêm</a>
                </p>
            </div>

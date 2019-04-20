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

            <div class="container">
                <div class="product-slider">
                    <?php 
                    foreach ($products as $product) {
                        ?>
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php if (isset($product->id)) echo "sanpham/chitiet/0".htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8');?>">
                                                <img src="<?php if (isset($product->image)) echo URL. htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" style = "max-width: 100%; background-size: contain;">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php if (isset($product->id)) echo "sanpham/chitiet/0".htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8');?>">
                                                <img src="<?php if (isset($product->image)) echo URL. htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php if (isset($product->id)) echo "sanpham/chitiet/0".htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8');?>" class="invisible">
                                    <img src="<?php if (isset($product->image)) echo URL. htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3 style="margin: 10px auto"><a href="<?php if (isset($product->id)) echo "sanpham/chitiet/0".htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8');?>"><?php if (isset($product->name)) echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></a></h3>
                                    <p class="price" style="margin-bottom: 10px">Mã SP: 0<?php if (isset($product->id)) echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?></p>
                                    <p class="price" style="color: red; font-weight: bold; margin-bottom: 10px">Giá bán: Liên hệ</p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>




            <div class="box text-center">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">Hướng dẫn</h3>

                        <p class="lead">Muốn tìm hiểu cách mua hàng? Đọc bài viết dưới đây!</p>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="col-md-12">

                    <div id="blog-homepage" class="row">
                        <div class="col-sm-4">
                            <div class="post">
                                <h4><a href="<?php echo URL."dichvu/huongdandathang" ?>">Hướng dẫn mua hàng</a></h4>
                                <hr>
                                <p class="intro">Chúng tôi mang đến cho khách hàng một quy trình đặt hàng vô cùng tiện lợi và nhanh chóng. Đến với Đồng Phục Vân Thịnh quý khách hàng có thể hoàn toàn yên tâm về dịch vụ sản xuất khép kín, luôn chủ động trong mọi công đoạn may sản phẩm...</p>
                                <p class="read-more"><a href="<?php echo URL."dichvu/huongdandathang" ?>" class="btn btn-primary">Đọc tiếp <i class="fa fa-angle-double-right"></i></a>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="post">
                                <h4><a href="<?php echo URL."dichvu/huongdandovachonsize" ?>">Hướng dẫn đo và chọn size</a></h4>
                                <hr>
                                <p class="intro">Một trong những nguyên tắc thành công mấu chốt trong việc triển khai may đồng phục đó là vấn đề chọn size phù hợp. Hiện nay đồng phục may size có ưu thế nhanh và rẻ hơn rất nhiều so với việc may đo, vậy nên việc chọn size phù hợp rất quan trọng...</p>
                                <p class="read-more"><a href="<?php echo URL."dichvu/huongdandovachonsize" ?>" class="btn btn-primary">Đọc tiếp <i class="fa fa-angle-double-right"></i></a>
                                </p>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <div class="post">
                                <h4><a href="<?php echo URL."dichvu/huongdanlaythongsocothe" ?>">Hướng dẫn đo thông số cơ thể</a></h4>
                                <hr>
                                <p class="intro">Đồng phục Vân Thịnh xin gửi tới quý khách hàng về hình ảnh hướng dẫn may đo, hoặc phục vụ công tác phân size đồng phục. Cách đo thông số chuẩn nhất để phục vụ may đo đồng phục. Dưới đây là chi tiết cách lấy số đo cụ thể cho quần áo nam nữ gồm...</p>
                                <p class="read-more"><a href="<?php echo URL."dichvu/huongdanlaythongsocothe" ?>" class="btn btn-primary">Đọc tiếp <i class="fa fa-angle-double-right"></i></a>
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

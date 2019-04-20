    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-9 col-sm-8 pull-right" style="z-index:3">
                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="<?php if (isset($product->image)) echo URL. htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive" style = "display: block; margin: 0 auto;">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center"><?php if (isset($product->name)) echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></h1>
                                <p class="price">Giá bán: <?php if (isset($product->price)) echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></p>
                                <div class="form-group col-sm-6">
                                    <label for="sel1">Size:</label>
                                    <select class="form-control" id="sel1">
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>2XL</option>
                                        <option>3XL</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="quantity">Số lượng:</label>
                                    <input type="number" class="form-control" id="quantity" value="1">
                                </div>
                                <p class="text-center buttons">
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a> 
                                </p>


                            </div>
                        </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h3>Chi tiết sản phẩm</h3>
                            <h4><?php if (isset($product->name)) echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></h4>
                            <blockquote>
                                <ul>
                                    <li>Mô tả: <?php if (isset($product->description)) echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></li>
                                    <li>Cung cấp kích thước sản phẩm từ size S đến XXXl</li>
                                    <li>Sản phẩm được may mẫu khi có yêu cầu</li>
                                    <li>Thời gian đáp ứng nhanh chóng</li>
                                    <li>Xem thêm sản phẩm tương tự tại: <a href="<?php if (isset($product->category)) echo URL."sanpham/". htmlspecialchars($product->category, ENT_QUOTES, 'UTF-8'); ?>">SẢN PHẨM</a></li>
                                </ul>
                            </blockquote>
                            <img src="<?php if (isset($product->image)) echo URL. htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive" style= "width: 100%; margin: 50px auto;">
                            <h4>Ưu đãi</h4>
                            <blockquote>
                                <ul>
                                    <li>May mẫu, in thêu logo</li>
                                    <li>Lấy số đo – phân loại size</li>
                                    <li>Quản lý mẫu trang phục và mẫu vải cho khách hàng cho các lần bổ sung</li>
                                    <li>Chế độ bảo hành dài hạn , giải quyết bảo hành sản phẩm nhanh chóng</li>
                                </ul>
                            </blockquote>
                            <h4>Quý khách có nhu cầu may đồng phục tại Hà Nội hãy liên hệ với Obaju</a> quý khách sẽ được cung ứng sản phẩm dịch vụ may đồng phục trọn gói nhanh nhất, tiết kiệm và uy tín cao nhất!</h4>
                            <ul>
                                <li>Điện thoại: <strong>0978.xxx.xxx</strong></li>
                                <li>Email: <strong>obaju@gmail.com</strong></li>
                                <li>Website: <strong><a href="http://www.obaju.com">www.obaju.com</a></strong></li>
                            </ul>

                        </div>

                        <div class="row box same-height-row">

                            <div class="col-12">
                                <h3>Sản phẩm tương tự</h3>
                            </div>
                            <?php 
                            foreach ($relative_products as $relative_product) {
                                ?>
                                <div class="col-md-3 col-sm- col-xs-6">
                                    <div class="product">
                                        <div class="flip-container">
                                            <div class="flipper">
                                                <div class="front">
                                                    <a href="<?php if (isset($relative_product->id)) echo URL."sanpham/chitiet/0".htmlspecialchars($relative_product->id, ENT_QUOTES, 'UTF-8');?>">
                                                        <img src="<?php if (isset($relative_product->image)) echo URL. htmlspecialchars($relative_product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" style = "max-width: 100%; background-size: contain;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="<?php if (isset($relative_product->id)) echo URL."sanpham/chitiet/0".htmlspecialchars($relative_product->id, ENT_QUOTES, 'UTF-8');?>">
                                                        <img src="<?php if (isset($relative_product->image)) echo URL. htmlspecialchars($relative_product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php if (isset($relative_product->id)) echo URL."sanpham/chitiet/0".htmlspecialchars($relative_product->id, ENT_QUOTES, 'UTF-8');?>" class="invisible">
                                            <img src="<?php if (isset($relative_product->image)) echo URL. htmlspecialchars($relative_product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive">
                                        </a>
                                        <div class="text">
                                            <h3 style="margin: 10px auto"><a href="<?php if (isset($relative_product->id)) echo URL."sanpham/chitiet/0".htmlspecialchars($relative_product->id, ENT_QUOTES, 'UTF-8');?>"><?php if (isset($relative_product->name)) echo htmlspecialchars($relative_product->name, ENT_QUOTES, 'UTF-8'); ?></a></h3>
                                            <p class="price"><?php if (isset($relative_product->price)) echo htmlspecialchars($relative_product->price, ENT_QUOTES, 'UTF-8'); ?></p>
                                            <p class="buttons">
                                                <a href="<?php if (isset($relative_product->id)) htmlspecialchars($relative_product->id, ENT_QUOTES, 'UTF-8');?>" class="btn btn-primary">Chi tiết</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                        </div>

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
                                <p class="price" style="margin-top: 10px">Mã SP: 0<?php if (isset($product->id)) echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?></p>
                                <p class="" style="color: #4fbfa8; font-weight: bold; margin-top: 10px; font-size: 2rem;">Giá bán: Gọi ngay <span style="color: red !important">0396.787.758</span> hoặc <span style="color: red !important">0979.351.576</span> để được tư vấn trực tiếp.<br/>Hoặc xem hướng dẫn đặt hàng</p>

                                <p class="text-center buttons">
                                    <a href="<?php echo URL."dichvu/huongdandathang" ?>" class="btn btn-primary">Hướng dẫn đặt hàng</a> 
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
                                    <li>Cung cấp kích thước sản phẩm từ size S đến XXXl</li>
                                    <li>Sản phẩm được may mẫu khi có yêu cầu</li>
                                    <li>Cung cấp số lượng từ 20 bộ đến 10,000 bộ</li>
                                    <li>Thời gian đáp ứng nhanh chóng</li>
                                    <li>Xem báo giá sơ bộ tại đây: <a href="<?php echo URL."baogia" ?>">BÁO GIÁ</a></li>
                                    <li>Xem thêm sản phẩm tương tự tại: <a href="<?php if (isset($product->category)) echo URL."sanpham/". htmlspecialchars($product->category, ENT_QUOTES, 'UTF-8'); ?>">SẢN PHẨM</a></li>
                                </ul>
                            </blockquote>
                            <img src="<?php if (isset($product->image)) echo URL. htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="" class="img-responsive" style= "width: 100%; margin: 50px auto;">
                            <h4>Ưu đãi khi đặt may đồng phục công sở, văn phòng tại đồng phục Vân Thịnh</h4>
                            <blockquote>
                                <ul>
                                    <li>Tư vấn thiết kế , chất liệu với đội ngũ nhân viên tư vấn giàu kinh nghiệm </li>
                                    <li>May mẫu, in thêu logo</li>
                                    <li>Lấy số đo – phân loại size</li>
                                    <li>Quản lý mẫu trang phục và mẫu vải cho khách hàng cho các lần bổ sung</li>
                                    <li>Chế độ bảo hành dài hạn , giải quyết bảo hành sản phẩm nhanh chóng</li>
                                </ul>
                            </blockquote>
                            <h4>Quý khách có nhu cầu may đồng phục tại Hà Nội hãy liên hệ với <a href="http://www.dongphucvanthinh.com">đồng phục Vân Thịnh</a> quý khách sẽ được cung ứng sản phẩm dịch vụ may đồng phục trọn gói nhanh nhất, tiết kiệm và uy tín cao nhất!</h4>
                            <ul>
                                <li>Điện thoại: <strong>01696 787 758</strong></li>
                                <li>Email: <strong>dongphucvanthinh@gmail.com</strong></li>
                                <li>Website: <strong><a href="http://www.dongphucvanthinh.com">www.dongphucvanthinh.com</a></strong></li>
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
                                            <p class="price" style="margin-bottom: 10px">Mã SP: 0<?php if (isset($relative_product->id)) echo htmlspecialchars($relative_product->id, ENT_QUOTES, 'UTF-8'); ?></p>
                                            <p class="price" style="color: red; font-weight: bold; margin-bottom: 10px">Giá bán: Liên hệ</p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                        </div>

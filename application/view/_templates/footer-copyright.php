<!-- *** FOOTER *** -->
    <div id="footer" data-animate="fadeInUp" style="opacity: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3>OBAJU</h3>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <h4>Trang</h4>

                    <ul>
                        <li><a href="<?php echo URL ?>trangchu">Trang chủ</a>
                        </li>
                        <li><a href="<?php echo URL ?>sanpham/dongphuccongsovanphong">Sản phẩm</a>
                        </li>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">

                    <h4>Danh mục sản phẩm</h4>
                    
                    <ul>
                        <?php
                        foreach ($category_parents as $category_parent) {
                        ?>
                        <li><a href="<?php echo URL ?>sanpham/<?php echo $category_parent->description ?>"><?php echo $category_parent->name ?></a>
                        </li>
                        <?php } ?>
                    </ul>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-10">

                <!-- <div class="col-md-5 col-sm-5 col-xs-5"> -->
                    <h4>Địa chỉ </h4>
                    <p><strong>CÔNG TY TNHH Đồng phục Quốc tế OBAJU</strong></p>
                    <p><strong>Văn phòng giao dịch: </strong> 10 Trần Phú - Hà Đông - Hà Nội</p>
                    <p><strong>Trụ sở chính:</strong> 37 đường An Phú Đông 10, Phường An Phú Đông, Quận 12, TP. HCM </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                
                <!-- <div class="col-md-5 col-sm-5 col-xs-5 col-md-offset-1 col-sm-offset-1 col-xs-offset-1"> -->
                    <h4>Liên hệ </h4>
                    <p><strong>Số điện thoại:  </strong> 024 435 4543 <br/><strong>Email:</strong>contact.obaju@gmail.com  <br/><strong>Website: </strong> obaju.com.vn</p>
                </div>

            </div>
        </div>

    <!-- *** FOOTER END *** -->
    </div>
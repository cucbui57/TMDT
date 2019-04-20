    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-md-3 col-sm-4 hidden-xs">
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Trang</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="<?php echo URL ?>trangchu">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL ?>sanpham">Sản phẩm</a>
                                </li>
                                <li class="<?php if($this->url_active[1] == 'dichvu') echo 'active' ?>">
                                    <a href="<?php echo URL ?>dichvu">Dịch vụ</a>
                                </li>
                                <li class="<?php if($this->url_active[1] == 'baogia') echo 'active' ?>">
                                    <a href="<?php echo URL ?>baogia">Báo giá</a>
                                </li>
                                <li class="<?php if($this->url_active[1] == 'lienhe') echo 'active' ?>">
                                    <a href="<?php echo URL ?>lienhe">Liên hệ</a>
                                </li>

                            </ul>

                        </div>
                    </div>


                    <div class="row">
                        <div class="banner col-xs-6 col-sm-12">
                            <a href="<?php echo URL."dichvu/huongdandathang" ?>">
                                <img src="<?php echo URL ?>img/banner.png" alt="Hướng dẫn đặt hàng" class="img-responsive">
                            </a>
                        </div>
                        <div class="banner col-xs-6 col-sm-12">
                            <a href="<?php echo URL."dichvu/huongdandovachonsize" ?>">
                                <img src="<?php echo URL ?>img/banner2.png" alt="Hướng dẫn đặt hàng" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xm-12" id="customer-orders" style="z-index:3; display: block">
                    <div class="box" id="text-page">
                        <h1>BÁO GIÁ MAY ĐỒNG PHỤC TẠI HÀ NỘI</h1>

                        <p class="lead"><em>(Bảng giá trọn gói : Vải + Phụ Liệu + Công may)</em></p>
                        <p><strong>Kính gửi Quý Khách hàng !<br></strong><br/>
                            <a href="http://www.dongphucvanthinh.com">ĐỒNG PHỤC VÂN THỊNH</a> cảm ơn Quý Khách hàng đã quan tâm đến dịch vụ , sản phẩm đồng phục của chúng tôi . Sau đây là bảng <a href="<?php echo URL ?>baogia">báo giá may đồng phục</a> sơ bộ , giá thành cụ thể phụ thuộc vào mẫu và số lượng yêu cầu . Quý khách hàng có thể gọi điện cho chúng tôi để nhận được sự tư vấn và báo giá tốt nhất.
                        </p>

                        <ul>
                            <li>Miễn phí tư vấn thiết kế, may mẫu theo ý tưởng của khách hàng.</li>
                            <li>Hỗ trợ cung cấp số liệu bảng Size và phân Size.</li>
                            <li>Miễn phí vận chuyển trong khu vực nội thành Hà Nội.</li>
                            <li>Đảm bảo về tiến độ , uy tín về chất lượng.</li>
                        </ul>

                        <hr>
                        
                        <h2>Bảng báo giá</h2>
                        <p><i>Bảng báo giá áp dụng từ ngày 01/08/2018.</i></p>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>TÊN SẢN PHẨM</th>
                                        <th>CHẤT LIỆU - ĐẶT MAY ĐỒNG PHỤC THEO MẪU</th>
                                        <th>ĐƠN VỊ</th>
                                        <th>ĐƠN GIÁ (VND)<br/>(Đơn giá cụ thể phụ thuộc vào số lượng)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Áo sơmi nữ</td>
                                        <td>Vải thô Nam Định, Vải Kate Anh, Lon Nhật, Mỹ, Vải KATE Ý, Mỹ</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>90.000 - 300.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Áo sơmi nam</td>
                                        <td>Vải thô Nam Định, Vải Kate Anh, Lon Nhật, Mỹ, Vải KATE Ý, Mỹ</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>95.000 - 350.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Quần tây nữ</td>
                                        <td>Vải Casimia, Vải Cashmere, Dormer (Ấn Độ, Anh, Singapore), Vải Cashmere, Dormer (Ý , Mỹ)</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>110.000 - 300.000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Quần tây nam</td>
                                        <td>Vải Casimia, Vải Cashmere, Dormer (Ấn Độ, Anh, Singapore), Vải Cashmere, Dormer (Ý , Mỹ)</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>120.000 - 350.000</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Vest nữ 1 lớp, 2 lớp</td>
                                        <td>Vải Cashmere, Dormer (Ấn Độ, Anh, Singapore), Vải Cashmere, Dormer (Ý , Mỹ)</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>350.000 - 800.000</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Áo vest nam 2 lớp</td>
                                        <td>Vải Cashmere, Dormer (Ấn Độ, Anh, Singapore), Vải Cashmere, Dormer (Ý , Mỹ)</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>800.000 - 2.500.000</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Ghile nam, nữ (1 lớp, 2 lớp)</td>
                                        <td>Vải Cashmere, Dormer (Ấn Độ, Anh, Singapore), Vải Cashmere, Dormer (Ý , Mỹ)</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>250.000 - 450.000</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Chân váy 1 lớp, 2 lớp</td>
                                        <td>Vải Cashmere, Dormer (Ấn Độ, Anh, Singapore), Vải Cashmere, Dormer (Ý , Mỹ)</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>100.000 - 270.000</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Đầm liền 1 lớp, 2 lớp</td>
                                        <td>Cooton co giãn, phi Thái Tuấn, gấm Thái Tuấn</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>180.000 - 650.000</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Cavat, khăn</td>
                                        <td>Phi Thái Tuấn</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>30.000 - 150.000</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Phí in thêu logo</td>
                                        <td>Theo mẫu khách hàng</td>
                                        <td>Cái</td>
                                        <td>Giá may từ: <br/>5.000 - 50.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        <p class="text-right" style="line-height: 3rem">
                            Báo giá trên chưa bao gồm 10% VAT <br/><em>Hà nội , ngày 01/08/2018</em><br/><strong>ĐỒNG PHỤC VÂN THỊNH</strong><br/><em>Trân trọng kính báo</em>
                        </p>
                    </div>



                </div>
                
                <!-- /.col-md-9 -->
                <div class="col-md-3 col-sm-4 visible-xs">
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Trang</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="<?php echo URL ?>trangchu">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL ?>sanpham">Sản phẩm</a>
                                </li>
                                <li class="<?php if($this->url_active[1] == 'dichvu') echo 'active' ?>">
                                    <a href="<?php echo URL ?>dichvu">Dịch vụ</a>
                                </li>
                                <li class="<?php if($this->url_active[1] == 'baogia') echo 'active' ?>">
                                    <a href="<?php echo URL ?>baogia">Báo giá</a>
                                </li>
                                <li class="<?php if($this->url_active[1] == 'lienhe') echo 'active' ?>">
                                    <a href="<?php echo URL ?>lienhe">Liên hệ</a>
                                </li>

                            </ul>

                        </div>
                    </div>


                    <div class="row">
                        <div class="banner col-xs-6 col-sm-12">
                            <a href="<?php echo URL."dichvu/huongdandathang" ?>">
                                <img src="<?php echo URL ?>img/banner.png" alt="Hướng dẫn đặt hàng" class="img-responsive">
                            </a>
                        </div>
                        <div class="banner col-xs-6 col-sm-12">
                            <a href="<?php echo URL."dichvu/huongdandovachonsize" ?>">
                                <img src="<?php echo URL ?>img/banner2.png" alt="Hướng dẫn đặt hàng" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

<div id="all">
    <div id="content">
        <div class="container">

            <div class="col-md-9 col-sm-8 pull-right" style="z-index:3">


                <div class="box" id="contact">
                    <h1>Liên hệ</h1>

                    <p class="lead">Bạn có điều thắc mắc? Bạn có một vài vấn đề với sản phẩm của chúng tôi?</p>
                    <p>Hãy liên hệ với Đồng phục Vân Thịnh, trung tâm chăm sóc khách hàng hoạt động 24/7.</p>

                    <hr>

                    <div class="row">
                        <div class="col-sm-4">
                            <h3><i class="fa fa-map-marker"></i> Địa chỉ</h3>
                            <p><strong>CÔNG TY TNHH PHÁT TRIỂN VÂN THỊNH</strong></p>
                            <p><strong>Văn phòng giao dịch:</strong> 85/56 Hạ Đình, quận Thanh Xuân, TP. Hà Nội.</p>
                            <p><strong>Trụ sở chính:</strong> Thôn Nội Am, xã Liên Ninh, huyện Thanh Trì, TP. Hà Nội</p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <h3><i class="fa fa-phone"></i> Điện thoại</h3>
                            <p class="text-muted">Đặt hàng trực tiếp, nhanh, tiện lợi? Liên hệ ngay số Hotline.</p>
                            <ul>
                                <li><p><strong>Hotline: 0396.787.758 - 0979.351.576</strong></p></li>
                                <li><p><strong>Zalo: 0396.787.758 - 0979.351.576</strong></p></li>
                            </ul>
                        </p>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <h3><i class="fa fa-envelope"></i> Hỗ trợ điện tử</h3>
                        <p class="text-muted">Không thể liên hệ trực tiếp? Hãy gửi thư điện tử cho chúng tôi.</p>
                        <p><strong>Email: dongphucvanthinh@gmail.com</strong></p>
                    </div>
                    <!-- /.col-sm-4 -->
                </div>
                <!-- /.row -->


                <hr>
                <h2>Gửi thư cho chúng tôi</h2>

                <form method="POST">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="fullname">Họ tên</label>
                                <input type="text" class="form-control" name="fullname" id="fullname">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="subject">Chủ đề</label>
                                <input type="text" class="form-control" name="subject" id="subject">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">Nội dung</label>
                                <textarea name="message" id="message" class="form-control" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary" name = "submit" id="submit"><i class="fa fa-envelope-o"></i> Gửi thư</button>

                        </div>
                    </div>
                    <!-- /.row -->
                </form>


            </div>


        </div>
        <!-- /.col-md-9 -->
        <div class="col-md-3 col-sm-4">
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
                    <a href="<?php echo URL."dichvu/huongdandathang" ?>">
                        <img src="<?php echo URL ?>img/banner2.png" alt="Hướng dẫn đặt hàng" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /#content -->


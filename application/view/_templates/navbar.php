<div id="top">
    <div class="container">
        <div class="col-md-6 offer">
        </div>
        <div class="col-md-6 pull-right">
            <ul class="menu">
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Đăng nhập</a>
                </li>
                <li><a href="register.html">Đăng kí</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="Login">Đăng nhập</h4>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.html" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email-modal" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password-modal" placeholder="Mật khẩu">
                        </div>

                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                        </p>

                    </form>

                    <p class="text-center text-muted">Chưa có tài khoản ? Đăng kí <a href="register.html"><strong>tại đây</strong></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand home" href="<?php echo URL ?>">
                <img src="<?php echo URL ?>img/logo.png" alt="Obaju logo" class="hidden-xs">
                <img src="<?php echo URL ?>img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only"></span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"></span>
                    <i class="fa fa-search"></i>
                </button>
                <a class="btn btn-default navbar-toggle" href="<?php echo URL ?>giohang">
                    <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">[3] Giỏ hàng</span>
                </a>
            </div>
        </div>

        <div class="navbar-collapse collapse" id="navigation">
            <ul class="nav navbar-nav navbar-left">
                <li class="<?php if($this->url_active[2] == "" || $this->url_active[2] == "trangchu") echo "active" ?>"><a href="<?php echo URL ?>trangchu">trang chủ</a></li>
                <li class="dropdown yamm-fw <?php if($this->url_active[2] == "sanpham") echo "active"?>">
                    <a href="<?php echo URL."sanpham" ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">sản phẩm <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5><a href="<?php echo URL ?>sanpham/dongphuccongsovanphong">Đồng phục công sở - văn phòng</a></h5>
                                        <ul>
                                            <li><a href="<?php echo URL ?>sanpham/aosominam">Áo sơ mi nam</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/aosominu">Áo sơ mi nữ</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/quanaucongsonamnu">Quần âu công sở nam nữ</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/chanvayjuypcongso">Chân váy - juyp công sở</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/dongphucvestcongsonamnu">Đồng phục vest công sở nam nữ</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/dongphucghilenamnu">Đồng phục ghile nam nữ</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5><a href="<?php echo URL ?>sanpham/dongphucnhahangkhachsan">Đồng phục nhà hàng khách sạn</a></h5>
                                        <ul>
                                            <li><a href="<?php echo URL ?>sanpham/dongphucaobep">Đồng phục áo bếp</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/dongphucphucvu">Đồng phục phục vụ</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/dongphucquanlykhachsannhahang">Đồng phục quản lý khách sạn nhà hàng</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/dongphucbellbaovekhachsan">Đồng phục bell - bảo vệ khách sạn</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/dongphucbeptapdemubep">Đồng phục bếp - tạp dề - mũ bếp</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5><a href="<?php echo URL ?>sanpham/dongphucbaohocongnhan">Đồng phục bảo hộ - công nhân</a></h5>
                                        <ul>
                                            <li><a href="<?php echo URL ?>sanpham/quanaocongnhan">Quần áo công nhân</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/dongphucbaoholaodong">Đồng phục bảo hộ lao động</a>
                                            </li>
                                        </ul>
                                        <br/>
                                        <h5><a href="<?php echo URL ?>sanpham/dongphucbenhvienyte">Đồng phục bệnh viện y tế</a></h5>
                                        <ul>
                                            <li><a href="<?php echo URL ?>sanpham/dongphucbacsibenhvien">Đồng phục bác sĩ bệnh viện</a>
                                            </li>
                                            <li><a href="<?php echo URL ?>sanpham/dongphucytabenhvien">Đồng phục y tá bệnh viện</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5 style="margin-bottom: 2rem;"><a href="<?php echo URL ?>sanpham/dongphucaogioaokhoac">Đồng phục áo gió - áo khoác</a></h5>
                                        <h5 style="margin-bottom: 2rem;"><a href="<?php echo URL ?>sanpham/dongphuctapvu">Đồng phục tạp vụ</a></h5>
                                        <h5 style="margin-bottom: 2rem;"><a href="<?php echo URL ?>sanpham/dongphucquanaobaove">Đồng phục quần áo bảo vệ</a></h5>
                                        <h5 style="margin-bottom: 2rem;"><a href="<?php echo URL ?>sanpham/dongphucaophong">Đồng phục áo phông</a></h5>
                                        <h5 style="margin-bottom: 2rem;"><a href="<?php echo URL ?>sanpham/dongphucspa">Đồng phục spa</a></h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="<?php echo URL ?>giohang" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">[3] Giỏ hàng</span></a>
                </div>

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only"></span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm">
                        <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </div>


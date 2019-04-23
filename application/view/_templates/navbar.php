<div id="top">
    <div class="container">
        <div class="col-md-6 offer">
        </div>
        <div class="col-md-6 pull-right">
            <ul class="menu">
                <?php if (isset($_SESSION['isLogin'])){ ?>
                    <li><a href="<?php echo URL ?>taikhoan">Tài khoản</a>
                    </li>
                    <li><a href="<?php echo URL ?>dangxuat">Đăng xuất</a>
                    </li>
                <?php } else { ?>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Đăng nhập</a>
                    </li>
                    <li><a href="<?php echo URL ?>dangki">Đăng kí</a>
                    </li>
                <?php } ?>
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
                    <form action="<?php echo URL ?>dangnhap" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="remember" name="remember" value="1">Ghi nhớ</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="btnLogin" class="btn btn-primary"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                        </div>
                    </form>


                    <p class="text-center text-muted">Chưa có tài khoản ? Đăng kí <a href="<?php echo URL ?>dangki"><strong>tại đây</strong></a></p>
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
                <a class="btn btn-default navbar-toggle" href="<?php echo URL ?>giohang" id = 'cartBtn-sm'>
                    <span id = 'cartNum-sm'>
                        <i class="fa fa-shopping-cart"></i>
                        
                        <?php
                            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
                                echo '[';
                                echo count($_SESSION['cart']);
                                echo ']';
                            }
                        ?>
                        <span class="hidden-sm">Giỏ hàng</span>
                    </span>
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
                    <a href="<?php echo URL ?>giohang" class="btn btn-primary navbar-btn" id = 'cartBtn'>
                        <span id = 'cartNum'>
                            <i class="fa fa-shopping-cart"></i>
                            <?php
                                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
                                    echo '[';
                                    echo count($_SESSION['cart']);
                                    echo ']';
                                }
                            ?>
                            <span class="hidden-sm">Giỏ hàng</span>
                        </span>
                    </a>
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


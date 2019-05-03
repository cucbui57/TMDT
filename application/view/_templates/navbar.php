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
                            <input type="email" class="form-control" id="email" name="email" required>
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
                                    <?php
                                        $condition = "parent_id = '0'";
                                        $category_parents = $this->model->getCategory($condition);

                                        foreach ($category_parents as $category_parent) {
                                            $condition = "parent_id = $category_parent->id";
                                            $category_childs = $this->model->getCategory($condition);
                                        ?>
                                        <div class="col-sm-3">
                                            <h5><a href="<?php echo URL ?>sanpham/<?php echo $category_parent->description ?>"><?php echo $category_parent->name ?></a></h5>
                                            <ul>
                                                <?php foreach ($category_childs as $category_child) {
                                                ?>
                                                <li><a href="<?php echo URL ?>sanpham/<?php echo $category_child->description ?>"><?php echo $category_child->name ?></a>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <?php } ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="<?php if($this->url_active[2] == "" || $this->url_active[2] == "dichvu") echo "active" ?>"><a href="<?php echo URL ?>dichvu">dịch vụ</a></li>
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

        </div>
    </div>
</div>


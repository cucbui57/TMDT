<div class="col-md-3 col-sm-4">
    <div class="panel panel-default sidebar-menu">

        <div class="panel-heading">
            <h3 class="panel-title">Danh mục sản phẩm</h3>
        </div>
        <?php 
            $caty = "";
            if(isset($product->category)){
                $caty = $product->category;
            }
        ?>
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu">
                <li class="<?php if($this->url_active[2] == 'dongphuccongsovanphong') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphuccongsovanphong">Đồng phục công sở - văn phòng</a>
                    <ul>
                        <li class="<?php if($this->url_active[2] == 'aosominam' || $caty == 'aosominam') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/aosominam">Áo sơ mi nam</a>
                        </li>
                        <li class="<?php if($this->url_active[2] == 'aosominu' || $caty == 'aosominu') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/aosominu">Áo sơ mi nữ</a>
                        </li>
                        <li  class="<?php if($this->url_active[2] == 'quanaucongsonamnu' || $caty == 'quanaucongsonamnu') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/quanaucongsonamnu">Quần âu công sở nam nữ</a>
                        </li>
                        <li  class="<?php if($this->url_active[2] == 'chanvayjuypcongso' || $caty == 'chanvayjuypcongso') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/chanvayjuypcongso">Chân váy - juyp công sở</a>
                        </li>
                        <li  class="<?php if($this->url_active[2] == 'dongphucvestcongsonamnu' || $caty == 'dongphucvestcongsonamnu') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucvestcongsonamnu">Đồng phục vest công sở nam nữ</a>
                        </li>
                        <li  class="<?php if($this->url_active[2] == 'dongphucghilenamnu' || $caty == 'dongphucghilenamnu') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucghilenamnu">Đồng phục ghile nam nữ</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php if($this->url_active[2] == 'dongphucnhahangkhachsan') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphucnhahangkhachsan">Đồng phục nhà hàng khách sạn</a>
                    <ul>
                        <li class="<?php if($this->url_active[2] == 'dongphucaobep' || $caty == 'dongphucaobep') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucaobep">Đồng phục áo bếp</a>
                        </li>
                        <li class="<?php if($this->url_active[2] == 'dongphucphucvu' || $caty == 'dongphucphucvu') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucphucvu">Đồng phục phục vụ</a>
                        </li>
                        <li class="<?php if($this->url_active[2] == 'dongphucquanlykhachsannhahang' || $caty == 'dongphucquanlykhachsannhahang') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucquanlykhachsannhahang">Đồng phục quản lý khách sạn nhà hàng</a>
                        </li>
                        <li class="<?php if($this->url_active[2] == 'dongphucbellbaovekhachsan' || $caty == 'dongphucbellbaovekhachsan') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucbellbaovekhachsan">Đồng phục bell - bảo vệ khách sạn</a>
                        </li>
                        <li class="<?php if($this->url_active[2] == 'dongphucbeptapdemubep' || $caty == 'dongphucbeptapdemubep') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucbeptapdemubep">Đồng phục bếp - tạp dề - mũ bếp</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php if($this->url_active[2] == 'dongphucbaohocongnhan') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphucbaohocongnhan">Đồng phục bảo hộ - công nhân</a>
                    <ul>
                        <li class="<?php if($this->url_active[2] == 'quanaocongnhan' || $caty == 'quanaocongnhan') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/quanaocongnhan">Quần áo công nhân</a>
                        </li>
                        <li class="<?php if($this->url_active[2] == 'dongphucbaoholaodong' || $caty == 'dongphucbaoholaodong') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucbaoholaodong">Đồng phục bảo hộ lao động</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php if($this->url_active[2] == 'dongphucbenhvienyte') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphucbenhvienyte">Đồng phục bệnh viện y tế</a>
                    <ul>
                        <li  class="<?php if($this->url_active[2] == 'dongphucbacsibenhvien' || $caty == 'dongphucbacsibenhvien') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucbacsibenhvien">Đồng phục bác sĩ bệnh viện</a>
                        </li>
                        <li  class="<?php if($this->url_active[2] == 'dongphucytabenhvien' || $caty == 'dongphucytabenhvien') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucytabenhvien">Đồng phục y tá bệnh viện</a>
                        </li>
                    </ul>
                </li>                                
                <li class="<?php if($this->url_active[2] == 'dongphucaogioaokhoac' || $caty == 'dongphucaogioaokhoac') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphucaogioaokhoac">Đồng phục áo gió - áo khoác</a>
                </li>
                <li class="<?php if($this->url_active[2] == 'dongphuctapvu' || $caty == 'dongphuctapvu') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphuctapvu">Đồng phục tạp vụ</a>
                </li>
                <li class="<?php if($this->url_active[2] == 'dongphucquanaobaove' || $caty == 'dongphucquanaobaove') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphucquanaobaove">Đồng phục quần áo bảo vệ</a>
                </li>
                <li class="<?php if($this->url_active[2] == 'dongphucaophong' || $caty == 'dongphucaophong') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphucaophong">Đồng phục áo phông</a>
                </li>
                <li class="<?php if($this->url_active[2] == 'dongphucspa' || $caty == 'dongphucspa') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphucspa">Đồng phục spa</a>
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
</div>
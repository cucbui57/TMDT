<div class="col-md-3 col-sm-4 col-xs-12">
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
                <li class="<?php if($this->url_active[3] == 'dongphuccongsovanphong') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphuccongsovanphong">Đồng phục công sở - văn phòng</a>
                    <ul>
                        <li class="<?php if($this->url_active[3] == 'aosominam' || $caty == 'aosominam') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/aosominam">Áo sơ mi nam</a>
                        </li>
                        <li class="<?php if($this->url_active[3] == 'aosominu' || $caty == 'aosominu') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/aosominu">Áo sơ mi nữ</a>
                        </li>
                        <li  class="<?php if($this->url_active[3] == 'quanaucongsonamnu' || $caty == 'quanaucongsonamnu') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/quanaucongsonamnu">Quần âu công sở nam nữ</a>
                        </li>
                        <li  class="<?php if($this->url_active[3] == 'chanvayjuypcongso' || $caty == 'chanvayjuypcongso') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/chanvayjuypcongso">Chân váy - juyp công sở</a>
                        </li>
                        <li  class="<?php if($this->url_active[3] == 'dongphucvestcongsonamnu' || $caty == 'dongphucvestcongsonamnu') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucvestcongsonamnu">Đồng phục vest công sở nam nữ</a>
                        </li>
                        <li  class="<?php if($this->url_active[3] == 'dongphucghilenamnu' || $caty == 'dongphucghilenamnu') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucghilenamnu">Đồng phục ghile nam nữ</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php if($this->url_active[3] == 'dongphucnhahangkhachsan') echo 'active' ?>">
                    <a href="<?php echo URL ?>sanpham/dongphucnhahangkhachsan">Đồng phục nhà hàng khách sạn</a>
                    <ul>
                        <li class="<?php if($this->url_active[3] == 'dongphucaobep' || $caty == 'dongphucaobep') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucaobep">Đồng phục áo bếp</a>
                        </li>
                        <li class="<?php if($this->url_active[3] == 'dongphucphucvu' || $caty == 'dongphucphucvu') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucphucvu">Đồng phục phục vụ</a>
                        </li>
                        <li class="<?php if($this->url_active[3] == 'dongphucquanlykhachsannhahang' || $caty == 'dongphucquanlykhachsannhahang') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucquanlykhachsannhahang">Đồng phục quản lý khách sạn nhà hàng</a>
                        </li>
                        <li class="<?php if($this->url_active[3] == 'dongphucbeptapdemubep' || $caty == 'dongphucbeptapdemubep') echo 'active' ?>"><a href="<?php echo URL ?>sanpham/dongphucbeptapdemubep">Đồng phục bếp - tạp dề - mũ bếp</a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</div>
</div>
</div>
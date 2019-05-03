
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo URL; ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION["isAdminLogin"][0]->mail_user;?></p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Danh mục</li>
      <li class="treeview <?php if($this->url_active[3] == "nguoidung") echo "active"; ?>">
        <a href=""><i class="fa fa-link"></i> <span>Người dùng</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>nguoidung">Danh sách</a></li>
          <li><a href="<?php echo URL; ?>nguoidung/them">Thêm mới</a></li>
        </ul>
      </li>
      <!-- <li class="treeview <?php if($this->url_active[3] == "tinhtp") echo "active"; ?>">
        <a href=""><i class="fa fa-link"></i> <span>Tỉnh/Thành phố</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>tinhtp">Danh sách</a></li>
          <li><a href="<?php echo URL; ?>tinhtp/them">Thêm mới</a></li>
        </ul>
      </li>
      <li class="treeview <?php if($this->url_active[3] == "districts") echo "active"; ?>">
        <a href=""><i class="fa fa-link"></i> <span>Quận/Huyện</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>districts">Danh sách</a></li>
          <li><a href="<?php echo URL; ?>districts/adddistrict">Thêm mới</a></li>
        </ul>
      </li>
      <li class="treeview <?php if($this->url_active[3] == "wards") echo "active"; ?>">
        <a href=""><i class="fa fa-link"></i> <span>Phường/Xã</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>wards">Danh sách</a></li>
          <li><a href="<?php echo URL; ?>wards/addward">Thêm mới</a></li>
        </ul>
      </li> -->
      <li class="treeview <?php if($this->url_active[3] == "sanpham") echo "active"; ?>">
        <a href=""><i class="fa fa-link"></i> <span>Sản phẩm</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>sanpham">Danh sách</a></li>
          <li><a href="<?php echo URL; ?>sanpham/them">Thêm mới</a></li>
        </ul>
      </li>
      <li class="treeview <?php if($this->url_active[3] == "danhmuc") echo "active"; ?>">
        <a href=""><i class="fa fa-link"></i> <span>Danh mục</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>danhmuc">Danh sách</a></li>
          <li><a href="<?php echo URL; ?>danhmuc/them">Thêm mới</a></li>
        </ul>
      </li>
      <!-- <li class="treeview <?php if($this->url_active[3] == "brands") echo "active"; ?>">
        <a href=""><i class="fa fa-link"></i> <span>Nhãn hiệu</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>brands">Danh sách</a></li>
          <li><a href="<?php echo URL; ?>brands/addbrand">Thêm mới</a></li>
        </ul>
      </li> -->
      <!-- <li class="treeview <?php if($this->url_active[3] == "images") echo "active"; ?>">
        <a href=""><i class="fa fa-link"></i> <span>Ảnh</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>images">Danh sách</a></li>
          <li><a href="<?php echo URL; ?>images/addimage">Thêm mới</a></li>
        </ul>
      </li> -->
      <li class="treeview <?php if($this->url_active[3] == "donhang") echo "active"; ?>">
        <a href=""><i class="fa fa-link"></i> <span>Đơn hàng</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>donhang">Danh sách</a></li>
          <!-- <li><a href="<?php echo URL; ?>images/addimage">Thêm mới</a></li> -->
        </ul>
      </li>

    </ul>
  </section>
</aside>
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Chỉnh sửa người dùng</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên đăng nhập</label>
            <div class="col-sm-9">
              <input class="form-control" id="name" name="name" type="text" required = "true" value="<?php echo htmlspecialchars($user[0]->name, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
              <input class="form-control" id="email" name="email" type="email" required = "true" value="<?php echo htmlspecialchars($user[0]->email, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Giới tính</label>
            <div class="col-sm-9">
              <label class="radio-inline"><input type="radio" id="male" name="gender" value="1" required = "true" <?php echo $user[0]->gender?"checked":"" ?>>Nam</label>
              <label class="radio-inline"><input type="radio" id="female" name="gender" value="0" required = "true" <?php echo $user[0]->gender?"":"checked" ?>>Nữ</label>
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Số điện thoại</label>
            <div class="col-sm-9">
              <input class="form-control" name="phone" id="phone" type="text" required = "true" value="<?php echo htmlspecialchars($user[0]->phone, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="birthday" class="col-sm-3 control-label">Ngày sinh</label>
            <div class="col-sm-9">
              <input class="form-control" name="birthday" id="birthday" type="text" required = "true" value="<?php echo htmlspecialchars($user[0]->birthday, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="address" class="col-sm-3 control-label">Địa chỉ</label>
            <div class="col-sm-9">
              <textarea input class="form-control" name="address" id="address" rows="3" style="width: 100%; resize: none;" required = "true"><?php echo htmlspecialchars($user[0]->address, ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="province_id" class="col-sm-3 control-label">Tỉnh/Thành phố</label>
            <div class="col-sm-9">
                <select class="form-control" id="province_id" name="province_id" onchange="getDistrict(this.value, 0, 'district_id')" required = "true">
                  <option value="">---Chọn---</option>
                <?php  
                  foreach ($provinces as $province) {
                    $selected = "";
                    if($province->id == $user[0]->province_id){
                        $selected = "selected";
                    }
                ?>
                  <option <?php echo $selected ?> value="<?php echo htmlspecialchars($province->id, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($province->name, ENT_QUOTES, 'UTF-8'); ?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="district_id" class="col-sm-3 control-label">Quận/Huyện</label>
            <div class="col-sm-9">
              <select class="form-control" id="district_id" name="district_id" onchange="getWard(this.value, 0, 'ward_id')"  required = "true">
                 <option value="">---Chọn---</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="ward_id" class="col-sm-3 control-label">Phường/Xã</label>
            <div class="col-sm-9">
              <select class="form-control" id="ward_id" name="ward_id" required = "true">
                <option value="">---Chọn---</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Trạng thái</label>
            <div class="col-sm-9 checkbox">
              <input class="" id="status" name="status" type="checkbox" value="0" <?php echo ($user[0]->status)?"":"checked" ?> style="margin-left: 0px;">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Vai trò</label>
            <div class="col-sm-9">
              <label class="radio-inline"><input type="radio" id="user" name="role" value="0" required = "true" <?php if($user[0]->role == "0" ) echo "checked='true'" ?>>Người dùng</label>
              <label class="radio-inline"><input type="radio" id="admin" name="role" value="1" required = "true" <?php if($user[0]->role == "1" ) echo "checked='true'" ?>>Quản trị</label>
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <div class="pull-right">
            <button type="Reset" class="btn btn-default">Đặt lại</button>
            <button type="submit" name="updateList" id="updateList" class="btn btn-info">Sửa</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
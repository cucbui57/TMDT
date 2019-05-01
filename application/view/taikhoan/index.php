<div id="all">
    <div id="content">
        <div class="container">
            <?php require APP . 'view/_templates/side-bar-user.php'; ?>
            <div class="col-md-9">
                <div class="box">
                    <h1>Tài khoản</h1>
                    <hr>

                    <h3>Thông tin cá nhân</h3>
                    <form action="" method="post">
                            <div class="form-group col-sm-6">
                                <label for="name">Họ tên</label>
                                <input type="text" class="form-control" required="true" name="name" value="<?php echo $user->name ?>">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" disabled class="form-control" required="true" name="email" value="<?php echo $user->email ?>">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="phone">Số điện thoại</label>
                                <input type="number" class="form-control" required="true" name="phone" value="<?php echo $user->phone ?>">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="birthday">Ngày sinh</label>
                                <input type="date" class="form-control" required="true" name="birthday" value="<?php echo $user->birthday ?>">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="gender">Giới tính</label>
                                <div class="radio">
                                    <label class="radio-inline">
                                      <input type="radio" id="male" name="gender" <?php if ($user->gender == '1') echo "checked"  ?> value="1">Nam
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" id="female" name="gender" <?php if ($user->gender == '0') echo "checked"  ?> value="2">Nữ
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="address">Số nhà</label>
                                <input type="text" class="form-control" required="true" name="address" value="<?php echo $user->address ?>">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="province_id">Thành phố</label>
                                <select class="form-control" id="province_id" name="province_id" onchange="getDistrict(this.value, 0)" required = "true">
                                    <option value="">---Chọn---</option>
                                    <?php  
                                      foreach ($provinces as $province) {
                                        $selected = "";
                                        if($province->id == $user->province_id){
                                            $selected = "selected";
                                        }
                                    ?>
                                    <option <?php echo $selected ?> value="<?php echo htmlspecialchars($province->id, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($province->name, ENT_QUOTES, 'UTF-8'); ?></option>
                                    <?php
                                      }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="district_id">Quận/huyện</label>
                                <select class="form-control" id="district_id" name="district_id" onchange="getWard(this.value, 0)"  required = "true">
                                    <option value="">---Chọn---</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="ward_id">Phường/xã</label>
                                <select class="form-control" required="true" name="ward_id" id="ward_id">
                                    <option value="">---Chọn---</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button name="updateList" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>


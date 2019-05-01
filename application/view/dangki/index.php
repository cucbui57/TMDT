<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-8">
                    <div class="box">
                        <h1>Đăng kí</h1>

                        <p class="lead">Bạn chưa có tài khoản? Hãy đăng kí ngay để nhận những ưu đãi của chúng tôi!</p>
                        <hr>

                        <form action="" method="post">
                            <div class="form-group col-sm-6">
                                <label for="name">Họ tên</label>
                                <input type="text" class="form-control" required="true" name="name">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" required="true" name="email">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" required="true" name="password">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="phone">Số điện thoại</label>
                                <input type="number" class="form-control" required="true" name="phone">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="birthday">Ngày sinh</label>
                                <input type="date" class="form-control" required="true" id="birthday" name="birthday">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="gender">Giới tính</label>
                                <div class="radio">
                                    <label class="radio-inline">
                                      <input type="radio" id="male" name="gender" checked value="1">Nam
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" id="female" name="gender" value="0">Nữ
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="address">Số nhà</label>
                                <input type="text" class="form-control" required="true" name="address">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="province_id">Thành phố</label>
                                <select class="form-control" required="true" name="province_id" onchange="getDistrict(this.value, 0)">
                                    <option value="">---Chọn---</option>
                                    <?php foreach ($province as $province) { ?>
                                    <option value="<?php echo $province->id ?>"><?php echo $province->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="district_id">Quận/huyện</label>
                                <select class="form-control" required="true" name="district_id" id="district_id" onchange="getWard(this.value, 0)">
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
                                <button type="submit" name="addNew" class="btn btn-primary"><i class="fa fa-user-md"></i> Đăng kí</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box">
                        <h1>Đăng nhập</h1>

                        <p class="lead">Nếu đã có tài khoản? Đăng nhập tại đây.</p>

                        <hr>

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
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
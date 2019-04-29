<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Sửa đơn hàng</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group" style="text-align: left;">
            <label for="email" class="col-sm-3 control-label">Người mua</label>
            <div class="col-sm-9">
              <input class="form-control" id="email" name="email" type="text" value="<?php echo htmlspecialchars($user[0]->email, ENT_QUOTES, 'UTF-8'); ?>" disabled>
              <input type="hidden" name="user_id" id="user_id" value="<?php echo htmlspecialchars($order[0]->user_id, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="total" class="col-sm-3 control-label">Tổng tiền</label>
            <div class="col-sm-9">
              <input class="form-control" id="total" name="total" type="text" value="<?php echo htmlspecialchars($order[0]->total, ENT_QUOTES, 'UTF-8'); ?>" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="date_order" class="col-sm-3 control-label">Ngày đặt</label>
            <div class="col-sm-9">
              <input class="form-control" id="date_order" name="date_order" type="text" value="<?php echo htmlspecialchars($order[0]->date_order, ENT_QUOTES, 'UTF-8'); ?>" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="receiver_name" class="col-sm-3 control-label">Tên người nhận</label>
            <div class="col-sm-9">
              <input class="form-control" id="receiver_name" name="receiver_name" type="text" value="<?php echo htmlspecialchars($order[0]->receiver_name, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="receiver_address" class="col-sm-3 control-label">Địa chỉ người nhận</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="receiver_address" id="receiver_address" rows="6" style="width: 100%; resize: none;"><?php echo htmlspecialchars($order[0]->receiver_address, ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="receiver_phone" class="col-sm-3 control-label">Điện thoại người nhận</label>
            <div class="col-sm-9">
              <input class="form-control" id="receiver_phone" name="receiver_phone" type="text" value="<?php echo htmlspecialchars($order[0]->receiver_phone, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
          </div>          
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Trạng thái</label>
            <div class="col-sm-9">
                <select class="form-control" id="status" name="status">
                <?php  
                        $selected = "selected";
                ?>
                  <option <?php if($order[0]->status == "0") echo $selected ?> value="0">Chờ xử lý</option>
                  <option <?php if($order[0]->status == "1") echo $selected ?> value="1">Đang vận chuyển</option>
                  <option <?php if($order[0]->status == "2") echo $selected ?> value="2">Đã xong</option>
                  <option <?php if($order[0]->status == "3") echo $selected ?> value="3">Đã hủy</option>
              </select>
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
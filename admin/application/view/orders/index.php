
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Danh sách đơn hàng</h3>
    </div>
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
               <tr role="row">
                <th>ID</th>
                <th>Người mua</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt</th>
                <th>Tên người nhận</th>
                <th>Địa chỉ người nhận</th>
                <th>Số điện thoại người nhận</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = -1;
              foreach ($orders as $order) {
                $i++;
                $temTime = strtotime($order->date_order);
                $order->date_order = date("d-m-Y",$temTime);
                ?>
                <tr>
                 <td><?php if (isset($order->id)) echo htmlspecialchars($order->id, ENT_QUOTES, 'UTF-8'); ?></td>
                 <td><?php if (isset($order->user_id)) echo htmlspecialchars($users[$i]->email, ENT_QUOTES, 'UTF-8'); ?></td>
                 <td><?php if (isset($order->total)) echo htmlspecialchars($order->total, ENT_QUOTES, 'UTF-8'); ?></td>
                 <td><?php if (isset($order->date_order)) echo htmlspecialchars($order->date_order, ENT_QUOTES, 'UTF-8'); ?></td>
                 <td><?php if (isset($order->receiver_name)) echo htmlspecialchars($order->receiver_name, ENT_QUOTES, 'UTF-8'); ?></td>
                 <td width="20%"><?php if (isset($order->receiver_address)) echo htmlspecialchars($order->receiver_address, ENT_QUOTES, 'UTF-8'); ?></td>
                 <td><?php if (isset($order->receiver_phone)) echo htmlspecialchars($order->receiver_phone, ENT_QUOTES, 'UTF-8'); ?></td>
                 <?php if($order->status == '0') { ?>
                      <td><span class="label label-warning">Chờ xử lý</span>
                      </td>
                  <?php } ?>
                  <?php if($order->status == '1') { ?>
                      <td><span class="label label-info">Đang vận chuyển</span>
                      </td>
                  <?php } ?>
                  <?php if($order->status == '2') { ?>
                      <td><span class="label label-success">Đã xong</span>
                      </td>
                  <?php } ?>
                  <?php if($order->status == '3') { ?>
                      <td><span class="label label-danger">Đã hủy</span>
                      </td>
                  <?php } ?>
                <td>
                  <a href="<?php echo URL . 'donhang/sua/' . htmlspecialchars($order->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary btn-xs">Sửa</a>
                  <a class="btn btn-info btn-xs" data-toggle="modal" href='#modal-id' id="<?php echo $order->id ?>" onclick="getDetail(this.id)" style= 'width: 50px'>Xem</a>
                  <div class="modal fade" id="modal-id">
                    <div class="modal-dialog" style="min-width: 80%;">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">CHI TIẾT ĐƠN HÀNG</h4>
                        </div>
                        <div class="modal-body" style="height: 585px">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal"">Đóng</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr> 
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
 function getDetail(id){
  $.post('<?php echo URL."donhang" ?>/chitiet', {'id': id}, function(data) {
    $(".modal-body").load("donhang/loadModal .detail");
  });
}
function cfdelete(id){
  $.confirm({
    title: "Xác nhận!",
    content: "Bạn có chắc chắn muốn xóa không?",
    backgroundDismiss: true,
    type: 'red',
    typeAnimated: false,
    buttons: {
      OK: {
        btnClass: 'btn-red',
        action: function(){
          $.post('<?php echo URL."donhang" ?>/xoa', {'id': id}, function(data) {
            $(".modal-body").load("donhang/loadModal .detail");
          });
        }
      },
      Hủy: function(){

      },
    }
  });
}
</script>
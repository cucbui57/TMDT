<div class="col-xs-12 detail">
  <div class="box">
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
               <tr role="row">
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Miêu tả</th>
                <th>Size</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Tổng</th>
                <!-- <th>Hành động</th> -->
              </tr>
            </thead>
            <tbody>
                <?php
                  $total = 0;
                  $orderDetails = $_SESSION['orderDetail'];
                  foreach ($orderDetails as $orderDetail) {
                ?>
                 <tr>
                   <td><?php if (isset($orderDetail->product_id)) echo htmlspecialchars($orderDetail->product_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a target="_blank" href="<?php echo URL ?>sanpham/sua/<?php echo $orderDetail->product_id ?>"><?php if (isset($orderDetail->name)) echo htmlspecialchars($orderDetail->name, ENT_QUOTES, 'UTF-8'); ?></a></td>
                   <td><?php if (isset($orderDetail->category_name)) echo htmlspecialchars($orderDetail->category_name, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td width="30%"><?php if (isset($orderDetail->description)) echo htmlspecialchars($orderDetail->description, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($orderDetail->size)) echo htmlspecialchars($orderDetail->size, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($orderDetail->quantity)) echo htmlspecialchars($orderDetail->quantity, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($orderDetail->price)) echo htmlspecialchars($orderDetail->price, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php echo $sub = $orderDetail->price * $orderDetail->quantity ?></td>
                    <!-- <td>
                      <button class="btn btn-danger btn-xs" onclick="cfdelete(<?php echo htmlspecialchars($orderDetail->id, ENT_QUOTES, 'UTF-8') ?>);">Xóa</button>
                    </td> -->
                </tr>
                <?php
                  $total += $sub;
                  }
                ?>
              </tbody>
              <tfoot>
                  <tr>
                      <th colspan="7" class="text-right">Tổng</th>
                      <th><?php echo $total; ?></th>
                  </tr>
                  <tr>
                      <th colspan="7" class="text-right">Phí vận chuyển</th>
                      <th>20000</th>
                  </tr>
                  <tr>
                      <th colspan="7" class="text-right">Tổng đơn</th>
                      <th><?php echo $total + 20000; ?></th>
                  </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

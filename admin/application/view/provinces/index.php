
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Danh sách tỉnh/thành phố</h3>
    </div>
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
               <tr role="row">
                <th>ID</th>
                <th>Tên tỉnh</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                  foreach ($provinces as $province) {
                    $i++;
                ?>
                 <tr>
                   <td><?php echo $i ?></td>
                   <td><?php if (isset($province->name)) echo htmlspecialchars($province->name, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($province->status)) echo $province->status?"Ẩn":"Hiện"; ?></td>
                    <td>
                      <a href="<?php echo URL . 'tinhtp/sua/' . htmlspecialchars($province->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary btn-xs">Sửa</a>
                      <button class="btn btn-danger btn-xs" onclick="cfdelete(<?php echo htmlspecialchars($province->id, ENT_QUOTES, 'UTF-8') ?>);">Xóa</button>
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
<script>
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
              window.location.href="<?php echo URL . 'tinhtp/xoa/'?>"+id;

          }
        },
        Hủy: function(){

        },
      }
    });
  }
</script>

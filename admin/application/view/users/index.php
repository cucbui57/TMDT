<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Danh sách người dùng</h3>
    </div>
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
               <tr role="row">
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th>Email</th>
                <th>Giới tính</th>
                <th>Số điện thoại</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Tỉnh/Thành phố</th>
                <th>Quận/Huyện</th>
                <th>Phường/Xã</th>
                <th>Trạng thái</th>
                <th>Vai trò</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i = -1;
                foreach ($users as $user) {
                  $i++;
                  $temTime = strtotime($user->birthday);
                  $user->birthday = date("d-m-Y",$temTime);
                ?>
                <tr>
                  <td><?php echo $i + 1 ?></td>
                  <td><?php if (isset($user->name)) echo htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->email)) echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->gender)) echo $user->gender?"Nam":"Nữ" ?></td>
                  <td><?php if (isset($user->phone)) echo htmlspecialchars($user->phone, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->birthday)) echo htmlspecialchars($user->birthday, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->address)) echo htmlspecialchars($user->address, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->province_id)) echo htmlspecialchars($provinces[$i]->name, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->district_id)) echo htmlspecialchars($districts[$i]->name, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->ward_id)) echo htmlspecialchars($wards[$i]->name, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($user->status)) echo $user->status?"Ẩn":"Hiện" ?></td>
                  <td><?php if (isset($user->status)) echo $user->role?"Quản trị":"Nguời dùng" ?></td>
                  <td>
                    <a href="<?php echo URL . 'nguoidung/sua/' . htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary btn-xs">Sửa</a>
                    <button class="btn btn-danger btn-xs" onclick="cfdelete(<?php echo htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8') ?>);">Xóa</button>
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
              window.location.href="<?php echo URL . 'nguoidung/xoa/'?>"+id;
          }
        },
        Hủy: function(){

        },
      }
    });
  }
</script>
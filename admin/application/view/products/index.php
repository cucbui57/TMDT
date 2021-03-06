
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Danh sách sản phẩm</h3>
    </div>
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
               <tr role="row">
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Ảnh</th>
                <th>Miêu tả</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  $i = -1;
                  foreach ($products as $product) {
                    $i++;
                ?>
                 <tr>
                   <td><?php if (isset($product->id)) echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><a target="blank" href="<?php echo URL . "../sanpham/chitiet/" . $product->id ?>"><?php if (isset($product->name)) echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></a>
                   </td>
                   <td><?php if (isset($product->category_id)) echo htmlspecialchars($categorys[$i]->name, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($product->price)) echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><img style="max-width: 100px;" src="<?php echo URL ?>../<?php if (isset($product->image)) echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>"></td>
                   <td width="30%"><div style="height: 150px;overflow: auto;"><?php if (isset($product->description)) echo($product->description); ?></div></td>
                   <td><?php if (isset($product->status)) echo $product->status?"Ẩn":"Hiện"; ?></td>
                    <td>
                        <a href="<?php echo URL . 'sanpham/sua/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary btn-xs">Sửa</a>
                      <button class="btn btn-danger btn-xs" onclick="cfdelete(<?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8') ?>);">Xóa</button>
                      
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

              window.location.href="<?php echo URL . 'sanpham/xoa/'?>"+id;
          }
        },
        Hủy: function(){

        },
      }
    });
  }
</script>

<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Sửa sản phẩm</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên sản phẩm</label>
            <div class="col-sm-9">
              <input class="form-control" id="name" name="name" type="text" value="<?php echo htmlspecialchars($product[0]->name, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="category_id" class="col-sm-3 control-label">Danh mục</label>
            <div class="col-sm-9">
                <select class="form-control" id="category_id" name="category_id">
                  <option>---Chọn---</option>
                <?php  
                  foreach ($categorys as $category) {
                    $selected = "";
                    if($category->id == $product[0]->category_id){
                        $selected = "selected";
                    }
                    if ($category->parent_id != '0') {
                ?>
                  <option <?php echo $selected ?> value="<?php echo htmlspecialchars($category->id, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?></option>
                <?php
                  } }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Giá</label>
            <div class="col-sm-9">
              <input class="form-control" id="price" name="price" type="text" value="<?php echo htmlspecialchars($product[0]->price, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Miêu tả</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="description" id="description" rows="6" style="width: 100%; resize: none;"><?php echo htmlspecialchars($product[0]->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Trạng thái</label>
            <div class="col-sm-9 checkbox">
              <input class="" id="status" name="status" type="checkbox" value="0" <?php echo ($product[0]->status)?"":"checked" ?> style="margin-left: 0px;">
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <div class="pull-right">
            <button type="Reset" class="btn btn-default">Đặt lại</button>
            <!-- <button type="submit" name="listU" id="listU" class="btn btn-default">List User</button> -->
            <button type="submit" name="updateList" id="updateList" class="btn btn-info">Sửa</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
CKEDITOR.replace( 'description' ,{
  filebrowserBrowseUrl : '<?php echo URL; ?>plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserUploadUrl : '<?php echo URL; ?>plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserImageBrowseUrl : '<?php echo URL; ?>plugins/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
});
</script>
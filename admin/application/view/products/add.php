<div class="row">
  <div class="col-md-12 ">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm sản phẩm</h3>
      </div>
      <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên sản phẩm</label>
            <div class="col-sm-9">
              <input class="form-control" id="name" name="name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="category_id" class="col-sm-3 control-label">Danh mục</label>
            <div class="col-sm-9">
                <select class="form-control" id="category_id" name="category_id">
                  <option value='0'>---Chọn---</option>
                <?php  
                  foreach ($categorys as $category) {
                    if ($category->parent_id != '0') {
                ?>
                  <option value="<?php echo htmlspecialchars($category->id, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?></option>
                <?php    
                  } }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Giá</label>
            <div class="col-sm-9">
              <input class="form-control" id="price" name="price" type="number">
            </div>
          </div>
          <div class="form-group">
            <label for="image" class="col-sm-3 control-label">Ảnh</label>
            <div class="col-sm-9">
              <input type="file" id="image" name="image">
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Miêu tả</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="description" id="description" style="width: 100%; resize: none;" ></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Trạng thái</label>
            <div class="col-sm-9 checkbox">
              <input class="" id="status" name="status" type="checkbox" value="0" checked style="margin-left: 0px;">
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <div class="pull-right">
            <button type="Reset" class="btn btn-default">Đặt lại</button>
            <!-- <button type="submit" name="listU" id="listU" class="btn btn-default">List User</button> -->
            <button type="submit" name="addNew" id="addNew" class="btn btn-info">Thêm</button>
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
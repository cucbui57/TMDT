<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm danh mục</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên danh mục</label>
            <div class="col-sm-9">
              <input class="form-control" id="name" name="name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="parent_id" class="col-sm-3 control-label">Danh mục cha</label>
            <div class="col-sm-9">
                <select class="form-control" id="parent_id" name="parent_id">
                  <option>---Chọn---</option>
               <?php  
                  foreach ($categorys as $category) {
                    if ($category->parent_id == '0') {
                ?>
                  <option value="<?php echo htmlspecialchars($category->id, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?></option>
                <?php
                  } }
                ?>
              </select>
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
            <button type="submit" name="addNew" id="addNew" class="btn btn-info">Thêm</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
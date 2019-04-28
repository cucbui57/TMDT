<div class="col-md-3 col-sm-4 col-xs-12">
    <div class="panel panel-default sidebar-menu">

        <div class="panel-heading">
            <h3 class="panel-title">Danh mục sản phẩm</h3>
        </div>
        <?php 
            $caty = "";
            if(isset($product->category_id)){
                $caty = $product->category_id;
            }
        ?>
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu">
                <?php
                    foreach ($category_parents as $category_parent) {
                        $condition = "parent_id = $category_parent->id";
                        $category_childs = $this->model->getCategory($condition);
                    ?>
                    
                    <li class="<?php if($this->url_active[3] == $category_parent->description) echo 'active' ?>">
                        <a href="<?php echo URL ?>sanpham/<?php echo $category_parent->description ?>"><?php echo $category_parent->name ?></a>
                        <ul>
                            <?php foreach ($category_childs as $category_child) {
                            ?>
                            <li class="<?php if($this->url_active[3] == $category_child->description || $caty == $category_child->id) echo 'active' ?>"><a href="<?php echo URL ?>sanpham/<?php echo $category_child->description ?>"><?php echo $category_child->name ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>

            </ul>

        </div>
    </div>
</div>
</div>
</div>
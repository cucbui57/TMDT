<?php
class Sanpham extends Controller
{



    public function index()
    {
    	$condition = "`status` = 0";
        $title = "Sản phẩm";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }

    public function chitiet($id){
        if(isset($id)){
            $id = (int)$id;
            $product = $this->model->getProductById($id);
            if(isset($product->id)){
                $relative_products = $this->model->getRelativeProduct($product->category_id);
                require APP . 'view/_templates/main_header.php';
                require APP . 'view/_templates/navbar.php';
                require APP . 'view/sanpham/chitiet.php';
                require APP . 'view/_templates/side-bar-menu.php';
                require APP . 'view/_templates/main_footer.php';
            } else{
                header('Location:'.URL.'problem');
            }
        }
    }

    public function danhmuc($category)
    {
        header('content-type: text/html; charset=utf-8');
        $condition = '';
        $title = $this->model->getListById('tbl_category', 'description', $category)[0];
        if ($title->parent_id == '0') {
            $condition = " c.parent_id = '$title->id' ";
        } else {
            $condition = " c.description = '$category' ";
        }
        // var_dump(urldecode($category));
        $total = $this->model->getNum($condition);
        // var_dump($total);
        $products = $this->setPagination($condition, $total->num);
        // var_dump($products);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    // private $list1 = ['dongphuccongsovanphong', 'aosominam', 'aosominu', 'quanaucongsonamnu', 'chanvayjuypcongso', 'dongphucvestcongsonamnu', 'dongphucghilenamnu'];
    // public function dongphuccongsovanphong()
    // {
    // 	$condition = " (category_id = '2' OR category_id = '3' OR category_id = '4' OR category_id = '5' OR category_id = '6' OR category_id = '7') ";
    //     $title = $this->model->getListById('tbl_category', 'id', 1)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }
    // public function aosominam(){
    //     $condition = "category_id = '2'";
    //     $title = $this->model->getListById('tbl_category', 'id', 2)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }
    // public function aosominu(){
    //     $condition = "category_id = '3'";
    //     $title = $this->model->getListById('tbl_category', 'id', 3)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }
    // public function quanaucongsonamnu(){
    //     $condition = "category_id = '4'";
    //     $title = $this->model->getListById('tbl_category', 'id', 4)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }
    // public function chanvayjuypcongso(){
    //     $condition = "category_id = '5'";
    //     $title = $this->model->getListById('tbl_category', 'id', 5)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }
    // public function dongphucvestcongsonamnu(){
    //     $condition = "category_id = '6'";
    //     $title = $this->model->getListById('tbl_category', 'id', 6)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }
    // public function dongphucghilenamnu(){
    //     $condition = "category_id = '7'";
    //     $title = $this->model->getListById('tbl_category', 'id', 7)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }

    // //-----------------------------------------
    // //private $list2 = ['dongphucnhahangkhachsan', 'dongphucaobep', 'dongphucphucvu', 'dongphucquanlykhachsannhahang', 'dongphucbellbaovekhachsan', 'dongphucbeptapdemubep']

    // public function dongphucnhahangkhachsan(){
    //     $condition = "(category_id = '9' OR category_id = '10' OR category_id = '11' OR category_id = '12')";
    //     $title = $this->model->getListById('tbl_category', 'id', 8)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }
    // public function dongphucaobep(){
    //     $condition = "category_id = '9'";
    //     $title = $this->model->getListById('tbl_category', 'id', 9)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }
    // public function dongphucphucvu(){
    //     $condition = "category_id = '10'";
    //     $title = $this->model->getListById('tbl_category', 'id', 10)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }
    // public function dongphucquanlykhachsannhahang(){
    //     $condition = "category_id = '11'";
    //     $title = $this->model->getListById('tbl_category', 'id', 12)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }
    // public function dongphucbeptapdemubep(){
    //     $condition = "category_id = '12'";
    //     $title = $this->model->getListById('tbl_category', 'id', 12)[0]->name;
    //     $total = $this->model->getNum($condition);
    //     $products = $this->setPagination($condition, $total->num);
    //     require APP . 'view/_templates/main_header.php';
    //     require APP . 'view/_templates/navbar.php';
    //     require APP . 'view/sanpham/index.php';
    //     require APP . 'view/_templates/side-bar-menu.php';
    //     require APP . 'view/_templates/main_footer.php';
    // }

    public function setPagination($category, $total){
        $products =[];
        if(!isset($_GET['page'])){
            $products = $this->model->getProductByLimit($category, 1);
        } else {
            $limit = $_GET['page'];
            $limit = (int)$limit;
            if($limit > (($total/9)+1)){
                $limit = CEIL($total/9);
                header('Location:'.URL.'sanpham/danhmuc/'.$this->url_active[2].'?page='.($limit));
            }
            if($limit < 1){
                $limit = 1;
                header('Location:'.URL.'sanpham/danhmuc/'.$this->url_active[2].'?page='.($limit));
            }
            $products = $this->model->getProductByLimit($category, $limit);
        }
        return $products;
    }
}

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
                $relative_products = $this->model->getRelativeProduct($product->category);
                require APP . 'view/_templates/main_header.php';
                require APP . 'view/_templates/navbar.php';
                require APP . 'view/chitiet/index.php';
                require APP . 'view/_templates/side-bar-menu.php';
                require APP . 'view/_templates/main_footer.php';
            } else{
                header('Location:'.URL.'problem');
            }
        }
    }


    // private $list1 = ['dongphuccongsovanphong', 'aosominam', 'aosominu', 'quanaucongsonamnu', 'chanvayjuypcongso', 'dongphucvestcongsonamnu', 'dongphucghilenamnu'];
    public function dongphuccongsovanphong()
    {
    	$condition = "category = 'aosominam' OR category = 'aosominu' OR category = 'quanaucongsonamnu' OR category = 'chanvayjuypcongso' OR category = 'dongphucvestcongsonamnu' OR category = 'dongphucghilenamnu'";
        $title = "Đồng phục công sở - văn phòng";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function aosominam(){
        $condition = "category = 'aosominam'";
        $title = "Áo sơ mi nam";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function aosominu(){
        $condition = "category = 'aosominu'";
        $title = "Áo sơ mi nữ";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function quanaucongsonamnu(){
        $condition = "category = 'quanaucongsonamnu'";
        $title = "Quần âu công sở nam nữ";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function chanvayjuypcongso(){
        $condition = "category = 'chanvayjuypcongso'";
        $title = "Chân váy - juyp công sở";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function dongphucvestcongsonamnu(){
        $condition = "category = 'dongphucvestcongsonamnu'";
        $title = "Đồng phục vest công sở nam nữ";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function dongphucghilenamnu(){
        $condition = "category = 'dongphucghilenamnu'";
        $title = "Đồng phục ghile nam nữ";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }

    //-----------------------------------------
    //private $list2 = ['dongphucnhahangkhachsan', 'dongphucaobep', 'dongphucphucvu', 'dongphucquanlykhachsannhahang', 'dongphucbellbaovekhachsan', 'dongphucbeptapdemubep']

    public function dongphucnhahangkhachsan(){
        $condition = "category = 'dongphucaobep' OR category = 'dongphucphucvu' OR category = 'dongphucquanlykhachsannhahang' OR category = 'dongphucbellbaovekhachsan' OR category = 'dongphucbeptapdemubep'";
        $title = "Đồng phục nhà hàng khách sạn";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function dongphucaobep(){
        $condition = "category = 'dongphucaobep'";
        $title = "Đồng phục áo bếp";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function dongphucphucvu(){
        $condition = "category = 'dongphucphucvu'";
        $title = "Đồng phục phục vụ";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function dongphucquanlykhachsannhahang(){
        $condition = "category = 'dongphucquanlykhachsannhahang'";
        $title = "Đồng phục quản lý khách sạn nhà hàng";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function dongphucbellbaovekhachsan(){
        $condition = "category = 'dongphucbellbaovekhachsan'";
        $title = "Đồng phục bell - bảo vệ khách sạn";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function dongphucbeptapdemubep(){
        $condition = "category = 'dongphucbeptapdemubep'";
        $title = "Đồng phục bếp - tạp dề - mũ bếp";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }

    //-----------------------------------------
    // 'dongphucbaohocongnhan', 'quanaocongnhan', 'dongphucbaoholaodong'
    public function dongphucbaohocongnhan(){
        $condition = "category = 'quanaocongnhan' OR category = 'dongphucbaoholaodong'";
        $title = "Đồng phục bảo hộ - công nhân";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function quanaocongnhan(){
        $condition = "category = 'quanaocongnhan'";
        $title = "Quần áo công nhân";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function dongphucbaoholaodong(){
        $condition = "category = 'dongphucbaoholaodong'";
        $title = "Đồng phục bảo hộ lao động";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }

    //-----------------------------------------
    // 'dongphucbenhvienyte', 'dongphucbacsibenhvien', 'dongphucytabenhvien'
    public function dongphucbenhvienyte(){
        $condition = "category = 'dongphucbacsibenhvien' OR category = 'dongphucytabenhvien'";
        $title = "Đồng phục bệnh viện y tế";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function dongphucbacsibenhvien(){
        $condition = "category = 'dongphucbacsibenhvien'";
        $title = "Đồng phục bác sĩ bệnh viện";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    public function dongphucytabenhvien(){
        $condition = "category = 'dongphucytabenhvien'";
        $title = "Đồng phục y tá bệnh viện";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }

    //-----------------------------------------
    public function dongphuctapvu(){
        $condition = "category = 'dongphuctapvu'";
        $title = "Đồng phục tạp vụ";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }

    //-----------------------------------------
    public function dongphucaogioaokhoac(){
        $condition = "category = 'dongphucaogioaokhoac'";
        $title = "Đồng phục áo gió - áo khoác";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    
    //-----------------------------------------
    public function dongphucquanaobaove(){
        $condition = "category = 'dongphucquanaobaove'";
        $title = "Đồng phục quần áo bảo vệ";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }

    //-----------------------------------------
    public function dongphucaophong(){
        $condition = "category = 'dongphucaophong'";
        $title = "Đồng phục áo phông";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    //-----------------------------------------
    public function dongphucspa(){
        $condition = "category = 'dongphucspa'";
        $title = "Đồng phục spa";
        $total = $this->model->getNum($condition);
        $products = $this->setPagination($condition, $total->num);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/sanpham/index.php';
        require APP . 'view/_templates/side-bar-menu.php';
        require APP . 'view/_templates/main_footer.php';
    }
    //---------------------------------------------------------------------------------------------------


    public function setPagination($condition, $total){
        $products =[];
        if(!isset($_GET['page'])){
            $products = $this->model->getProductByLimit($condition, 1);
        } else {
            $limit = $_GET['page'];
            $limit = (int)$limit;
            if($limit > (($total/9)+1)){
                $limit = CEIL($total/9);
                header('Location:'.URL.'sanpham/'.$this->url_active[2].'?page='.($limit));
            }
            if($limit < 1){
                $limit = 1;
                header('Location:'.URL.'sanpham/'.$this->url_active[2].'?page='.($limit));
            }
            $products = $this->model->getProductByLimit($condition, $limit);
        }
        return $products;
    }
}

<?php
class Sanpham extends Controller
{   
    protected $table_name = "tbl_product";
    protected $key_word = "id";

    public function index()
    {
        $products = $this->model->getListDesc($this->table_name);

        $categorys = array();
        $brands = array();
        foreach($products as $product){
            $category = $this->model->getListById("tbl_category", "id", $product->category_id);
            $categorys[] = $category[0];
            $brands[] = $brand[0];
        }
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function them()
    {
        $this->setAdd();
        $categorys = $this->model->getList("tbl_category");
        
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/add.php';
        require APP . 'view/_templates/footer.php';
    }

    public function setAdd(){
        if (isset($_POST["addNew"])) {
            $saveURL = explode('admin', ROOT);
            $imgURL = $saveURL[0];
            if(isset($_FILES["image"]) && $_FILES["image"]["name"] !=""){
                if($_FILES["image"]["type"] =="image/jpeg" || $_FILES["image"]["type"]=="image/jpg" || $_FILES["image"]["type"]=="image/png"){
                    if($_FILES["image"]["error"]==0){
                        $locationFile = $_FILES["image"]["tmp_name"];
                        $name = $_FILES["image"]["name"];
                        $url_image= $imgURL . "public\img";
                        if(!is_dir($url_image)) {
                            mkdir($url_image);
                        }
                        $url_image.="\\$name";
                        move_uploaded_file($locationFile, $url_image);
                        $_POST['image'] = "img/$name";
                        $this->model->addNew($this->table_name, $_POST);
                    }
                }
            }
            header('location: ' . URL . 'sanpham');
        }
    }

    public function xoa($id)
    {
        if (isset($id)) {
            $this->model->deleteById($this->table_name, $this->key_word, $id);
        }

        header('location: ' . URL . 'sanpham/index');
    }

    public function sua($id)
    {
        if (isset($id)) {
            $product = $this->model->getListById($this->table_name, $this->key_word, $id);
            $categorys = $this->model->getList("tbl_category");
            $this->setEdit($id, $product);
            
            $this->model->sessionStart();
            require APP . 'view/_templates/header.php';
            require APP . 'view/products/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'sanpham');
        }
    }

    public function setEdit($id, $product){
        if(isset($_POST["updateList"])){
            $saveURL = explode('admin', ROOT);
            $imgURL = $saveURL[0];
            $_POST['image'] = $product[0]->image;
            if(isset($_FILES["image"]) && $_FILES["image"]["name"] !=""){
                if($_FILES["image"]["type"] =="image/jpeg" || $_FILES["image"]["type"]=="image/jpg" || $_FILES["image"]["type"]=="image/png"){
                    if($_FILES["image"]["error"]==0){
                        $locationFile = $_FILES["image"]["tmp_name"];
                        $name = $_FILES["image"]["name"];
                        $url_image= $imgURL . "public\img";
                        if(!is_dir($url_image)) {
                            mkdir($url_image);
                        }
                        $url_image.="\\$name";
                        move_uploaded_file($locationFile, $url_image);
                        $_POST['image'] = "img/$name";
                    }
                }
            }
            $this->model->updateList($this->table_name, $this->key_word, $id, $_POST);
            header('location: ' . URL . 'sanpham');
        }
    }  
}
?>
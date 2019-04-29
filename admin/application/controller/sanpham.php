<?php
class Sanpham extends Controller
{   
    protected $table_name = "tbl_product";
    protected $key_word = "id";

    public function index()
    {
        $products = $this->model->getList($this->table_name);

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
        if(isset($_POST["addNew"])){
            $this->model->addNew($this->table_name, $_POST);
            header('location: ' . URL . 'sanpham/index');
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
            $this->setEdit($id);
            
            $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
            require APP . 'view/products/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'sanpham/index');
        }
    }

    public function setEdit($id){
        if(isset($_POST["updateList"])){
            $this->model->updateList($this->table_name, $this->key_word, $id, $_POST);
            header('location: ' . URL . 'sanpham/index');
        }
    }  
}
?>
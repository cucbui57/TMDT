<?php


class Danhmuc extends Controller
{   
    protected $table_name = "tbl_category";
    protected $key_word = "id";

    public function index()
    {
        $categorys = $this->model->getList($this->table_name);

        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/categorys/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function them()
    {
        $this->setAdd();
        $categorys = $this->model->getList($this->table_name);
        
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/categorys/add.php';
        require APP . 'view/_templates/footer.php';

    }
    public function setAdd(){
        if(isset($_POST["addNew"])){
            $this->model->addNew($this->table_name, $_POST);
            header('location: ' . URL . 'danhmuc');
        }
    }
    public function xoa($id)
    {
        if (isset($id)) {
            $this->model->deleteById($this->table_name, $this->key_word, $id);
        }

        header('location: ' . URL . 'danhmuc');
    }

    public function sua($id)
    {
        if (isset($id)) {
            $category = $this->model->getListById($this->table_name, $this->key_word, $id);
            $parents = $this->model->getList("tbl_category");
            $this->setEdit($id);
            
            $this->model->sessionStart();
            require APP . 'view/_templates/header.php';
            require APP . 'view/categorys/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'danhmuc');
        }
    }

    public function setEdit($id){
        if(isset($_POST["updateList"])){
            $this->model->updateList($this->table_name, $this->key_word, $id, $_POST);
            header('location: ' . URL . 'danhmuc');
        }
    } 
}
?>
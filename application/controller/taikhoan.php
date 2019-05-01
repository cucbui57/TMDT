<?php
class Taikhoan extends Controller
{

    public function index()
    {
    	$user = $_SESSION["isLogin"][0];
    	$provinces = $this->model->getAll("tbl_province");
        $this->setEdit($user->id);

        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/taikhoan/index.php';
        require APP . 'view/_templates/main_footer.php';
    }

    public function setEdit($id){
        if(isset($_POST["updateList"])){
            $temTime = strtotime($_POST["birthday"]);
            $_POST["birthday"] = date("Y-m-d",$temTime);
            $this->model->updateList('tbl_user', 'id', $id, $_POST);
            $user = $this->model->getListById('tbl_user', 'id', $id);
            $_SESSION["isLogin"] = $user;
            header('location: ' . URL . 'taikhoan');
        }
    }
    
}

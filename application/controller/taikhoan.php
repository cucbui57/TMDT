<?php
class Taikhoan extends Controller
{

    public function index()
    {   
    	$user = $_SESSION["isLogin"][0];
    	// echo "<pre>";
    	// var_dump($user);
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/taikhoan/index.php';
        require APP . 'view/_templates/main_footer.php';
    }

}

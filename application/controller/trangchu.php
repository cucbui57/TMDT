<?php
class Trangchu extends Controller
{

    public function index()
    {
    	$products = $this->model->getHotProduct();
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/trangchu/index.php';
        require APP . 'view/_templates/main_footer.php';
    }

}

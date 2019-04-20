<?php
class Baogia extends Controller
{

    public function index()
    {   
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/baogia/index.php';
        require APP . 'view/_templates/main_footer.php';
    }

}

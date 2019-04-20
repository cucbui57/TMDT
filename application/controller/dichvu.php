<?php
class Dichvu extends Controller
{

    public function index()
    {   
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/dichvu/index.php';
        require APP . 'view/_templates/main_footer.php';
    }

    public function huongdandathang()
    {   
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/dichvu/duongdandathang.php';
        require APP . 'view/_templates/main_footer.php';
    }


    public function huongdandovachonsize()
    {   
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/dichvu/huongdandovachonsize.php';
        require APP . 'view/_templates/main_footer.php';
    }

    public function huongdanlaythongsocothe()
    {   
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/dichvu/huongdanlaythongsocothe.php';
        require APP . 'view/_templates/main_footer.php';
    }

}

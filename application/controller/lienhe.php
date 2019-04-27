<?php
class Lienhe extends Controller
{

    public function index()
    {   
    	if(isset($_POST["submit"])){
			require APP . 'libs/mail/index.php';
		}
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/lienhe/index.php';
        require APP . 'view/_templates/main_footer.php';
    }

}

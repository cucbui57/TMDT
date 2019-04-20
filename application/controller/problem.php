<?php
class Problem extends Controller
{

	public function index()
	{   
		require APP . 'view/_templates/main_header.php';
		require APP . 'view/_templates/navbar.php';
		require APP . 'view/problem/index.php';
		require APP . 'view/_templates/main_footer.php';
	}
}
?>
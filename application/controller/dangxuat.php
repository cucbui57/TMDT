<?php 
class Dangxuat extends Controller{
	public function index(){
		setcookie('email', "", time() - 3600, "/");
        session_unset(); 
        session_destroy();
		header("location:".URL);
	}
}
?>
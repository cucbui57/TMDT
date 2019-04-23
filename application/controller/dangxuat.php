<?php 
class Dangxuat extends Controller{
	public function index(){
		session_start();
		session_unset();
		session_destroy();
		header("location:".URL);
	}
}
?>
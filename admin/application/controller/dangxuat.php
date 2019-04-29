<?php 
CLass Dangxuat extends Controller{
	function index(){
		$this->model->Logout();
		header("location:dangnhap");
	}
}
?>
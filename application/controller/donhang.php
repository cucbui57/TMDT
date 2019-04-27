<?php
class Donhang extends Controller
{

    public function index()
    {
    	if (isset($_SESSION['isLogin'])) {
	    	$orders = $this->model->getOrders('tbl_order', 'user_id', $_SESSION['isLogin']->id);

	        require APP . 'view/_templates/main_header.php';
	        require APP . 'view/_templates/navbar.php';
	        require APP . 'view/donhang/index.php';
	        require APP . 'view/_templates/main_footer.php';
        } else {
        	header("location:".URL."dangki");
        }
    }

	public function chitiet($id)
	{
		if(isset($id)){
			if(isset($_SESSION['isLogin'])){
				$order = $this->model->getOrders('tbl_order', 'id', $id);
				if($_SESSION['isLogin']->id == $order[0]->user_id){
				$order_details = $this->model->getDetail($id);
					require APP . 'view/_templates/main_header.php';
			        require APP . 'view/_templates/navbar.php';
			        require APP . 'view/donhang/chitiet.php';
			        require APP . 'view/_templates/main_footer.php';
			    } else {
			    	header("location:".URL."donhang");
			    }
	    	}
		}
	}

	public function huy($id)
	{
		if (isset($id)) {			
			$order = $this->model->getOrders('tbl_order', 'id', $id);
			echo "<pre>";
			$order[0]->status = '3';
			var_dump($order);
			$this->model->updateList('tbl_order', 'id', $id, (array)$order[0]);
			header('location: ' . URL . 'donhang');
		}
	}
}

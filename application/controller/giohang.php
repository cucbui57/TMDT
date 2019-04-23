<?php
class Giohang extends Controller
{

    public function index()
    {
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/giohang/index.php';
        require APP . 'view/_templates/main_footer.php';
    }

	public function add(){
		if(isset($_POST['id'])){
            $id = $_POST['id'];
            $size = $_POST['size'];
            $quantity = $_POST['quantity'];
            $item = $this->model->getProductById($id);
			if (!isset($_SESSION["cart"])) {
	            $cart[$id . $size] = [
	                'item' => $item,
	                'quantity' => $quantity,
	                'size' => $size,
	            ];
            } else {
                $cart = $_SESSION["cart"];
                if (array_key_exists($id . $size, $cart)) {
                	if ($cart[$id . $size]['size'] == $size){
	                    $cart[$id . $size] = [
	                        'item' => $item,
	                        'quantity' => $cart[$id . $size]['quantity'] + (int)$quantity,
	                        'size' => $size,
	                    ];
                    } else {
                    	$cart[$id . $size] = [
	                        'item' => $item,
	                        'quantity' => $quantity,
	                        'size' => $size,
	                    ];
                    }
                } else {
                    $cart[$id . $size] = [
                        'item' => $item,
                        'quantity' => $quantity,
                        'size' => $size,
                    ];
                }
            }
            $_SESSION["cart"] = $cart;
        }   
	}

	public function deletee(){
		session_unset('cart');
		session_destroy();
	}

    public function deleteItem(){
        if(isset($_POST["id"])){
            $cart = $_SESSION["cart"];
            $id = $_POST["id"];
            if(array_key_exists($id, $cart)){
                unset($cart[$id]);
            }
            $_SESSION["cart"] = $cart;
        }
    }

    public function update(){
        if(isset($_SESSION["cart"])){
            if(isset($_POST["id"]) && isset($_POST["quantity"])  && isset($_POST["size"])){
                $id = $_POST["id"];
                $quantity = $_POST["quantity"];
                $size = $_POST["size"];
                // var_dump($id . $quantity . $size);
                // die();
                $item = $this->model->getProductById($id);
                $cart = $_SESSION["cart"];
                if($_POST["quantity"]){
                    if(array_key_exists($id, $cart)){
                            $cart[$id] = [
                            'item'=>$item,
                            'quantity'=>$quantity,
                            'size' => $size,
                        ];
                       
                    }
                }else{
                    unset($cart[$id]);
                }
                $_SESSION["cart"] = $cart;
            }
        }
    }
}

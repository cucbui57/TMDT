<?php
class Giohang extends Controller
{

    public function index()
    {
        if(isset($_POST["checkout"])){
            require APP . 'libs/mail/index.php';
        }
        if(isset($_POST["checkout"])){
            $this->addOrder();
            $this->addOrderDetail();
            unset($_SESSION['cart']);
            echo "<script> alert('Đặt hàng thành công!');
            window.location.href = '".URL."donhang' </script>";
        }
        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/giohang/index.php';
        require APP . 'view/_templates/main_footer.php';
    }

    public function addOrder(){
        $subtotal=0;
        foreach ($_SESSION['cart'] as $key => $value) {
            $subtotal +=  $value['item']->price * $value['quantity'];
        }
        $user_id = null;
        if (isset($_SESSION['isLogin'])) {
            $user_id = $_SESSION['isLogin']->id;
        }
        $data = [
            "user_id" => $user_id,
            "total" =>  $subtotal + 20000,
            "date_order" => date("Y-m-d") ,
            "receiver_name" => $_POST['receiver_name'],
            "receiver_email" => $_POST['receiver_email'],
            "receiver_phone" => $_POST['receiver_phone'],
            "receiver_address" => $_POST['receiver_address'],
            "status" => 0,
        ];
        $result = $this->model->addNew("tbl_order",$data);
    }
        
    public function addOrderDetail(){
        $order = $this->model->getLastID('tbl_order', 'id');
        foreach ($_SESSION['cart'] as $key => $value) {
            $data = [
                "order_id" => $order->id,
                "product_id" => $value['item']->id,
                "quantity" =>  $value['quantity'],
                "price" => $value['item']->price,
                "size" => $value['size'],
                "status" => 0
            ];
            $result = $this->model->addNew("tbl_order_detail",$data);
        }
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

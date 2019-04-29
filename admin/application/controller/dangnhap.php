<?php 
CLass Dangnhap extends Controller{

	protected $table_name = "tbl_user";
    protected $key_word = "email";

	function index(){
        if(isset($_COOKIE['email'])){
            $_SESSION["isLogin"] =  $this->model->getListById($this->table_name, $this->key_word, $_COOKIE['email']);
            return header("location:".URL."trangchu");
        }
        $this->setLogin();
	  	require APP . 'view/_templates/login.php';
	}
	function setLogin(){
		if(isset($_POST["btnLogin"])){
			$email = $_POST["email"];
			$password = sha1($_POST["password"]);
			$user = $this->model->getListById($this->table_name, $this->key_word, $email);
			if(isset($user[0])){
				if($user[0]->email != ""){
					if($user[0]->password == $password){
						if($user[0]->role == "1"){
							if(isset($_POST["remember"])){
								setcookie('email', $email, time() + (86400 * 30), "/");
							}
							$_SESSION["isLogin"] = $user;
							return header("location:".URL."trangchu");
						}
					}
				}
			}
		}
	}
}
?>
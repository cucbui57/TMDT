<?php

class Dangki extends Controller
{
    
	public function index()
    {
        $this->addUser();
        $province = $this->model->getAll('tbl_province');
    	
    	require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/dangki/index.php';
        require APP . 'view/_templates/main_footer.php';
	}

    public function addUser(){
        if(isset($_POST["addNew"])){
            if (!$isReg = $this->model->getListById('tbl_user', 'email', $_POST['email'])) {
                $_POST['password'] = sha1($_POST['password']);
                $register = $this->model->addNew('tbl_user', $_POST);
                $user = $this->model->getListById('tbl_user', 'email', $_POST['email']);
                $_SESSION["isLogin"] = $user[0];
                header("Location:".URL."trangchu");
            } else {
                echo "<script> alert('Email đã tồn tại, không thể tạo tài khoản!');
                window.location.href = '".URL."dangki' </script>";
            }
        }
    }

    public function getDistrict(){
	?>
        <option value="">---Chọn---</option>
	<?php
            if (isset($_POST["id"]) && isset($_POST["tmp"])) {
                $id=$_POST["id"];
                $tmp = $_POST["tmp"];
                $districts = $this->model->getListById("tbl_district", "province_id", $id);
                foreach ($districts as $district) {
                    $selected = "";
                    if($district->id == $tmp){
                        $selected = "selected";
                    }
	?>
                <option <?php echo $selected ?> value="<?php echo htmlspecialchars($district->id, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($district->name, ENT_QUOTES, 'UTF-8'); ?></option>
	<?php       
            }       
        }
    }

    public function getWard(){
	?>
        <option value="">---Chọn---</option>
	<?php
            if (isset($_POST["id"]) && isset($_POST["tmp"])) {
                $id=$_POST["id"];
                $tmp = $_POST["tmp"];
                $wards = $this->model->getListById("tbl_ward", "district_id", $id);
                foreach ($wards as $ward) {
                    $selected = "";
                    if($ward->id == $tmp){
                        $selected = "selected";
                    }
	?>
                <option <?php echo $selected ?> value="<?php echo htmlspecialchars($ward->id, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($ward->name, ENT_QUOTES, 'UTF-8'); ?></option>
	<?php       
            }       
        }
    }   
    
}
<?php

class Nguoidung extends Controller
{   
    protected $table_name = "tbl_user";
    protected $key_word = "id";

    public function index()
    {
        $users = $this->model->getList($this->table_name);
        $provinces = array();
        $districts = array();
        $wards = array();
        foreach($users as $user){
            $province = $this->model->getListById("tbl_province", "id", $user->province_id);
            $district = $this->model->getListById("tbl_district", "id", $user->district_id);
            $ward = $this->model->getListById("tbl_ward", "id", $user->ward_id);
            $provinces[] = $province[0];
            $districts[] = $district[0];
            $wards[] = $ward[0];
        }


        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/users/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function them()
    {
        $this->setAdd();
        $provinces = $this->model->getList("tbl_province");
        
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/users/add.php';
        require APP . 'view/_templates/footer.php';

    }

    public function checkExist($email) {
        $check = $this->model->getListById('tbl_user', 'email', $email);
        if($check){
            return true;
        } else {
            return false;
        }
    }

    public function setAdd(){
        if(isset($_POST["addNew"])){
            if(!$this->checkExist($_POST['email'])){
                $_POST['password'] = sha1($_POST["password"]);
                $temTime = strtotime($_POST["birthday"]);
                $_POST["birthday"] = date("Y-m-d",$temTime);
                $this->model->addNew($this->table_name, $_POST);
                header('location: ' . URL . 'nguoidung');
            } else {
                echo "<script> alert('Email đã tồn tại, không thể tạo tài khoản!');
                window.location.href = '".URL."nguoidung/them' </script>";
            }
        }
    }

    public function sua($id)
    {
        if (isset($id)) {
            $user = $this->model->getListById($this->table_name, $this->key_word, $id);
            $provinces = $this->model->getList("tbl_province");

            $temTime = strtotime($user[0]->birthday);
            $user[0]->birthday = date("d-m-Y",$temTime);

            $this->setEdit($id);
            
            $this->model->sessionStart();
            require APP . 'view/_templates/header.php';
            require APP . 'view/users/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'nguoidung');
        }
    }

    public function setEdit($id){
        if(isset($_POST["updateList"])){
            $temTime = strtotime($_POST["birthday"]);
            $_POST["birthday"] = date("Y-m-d",$temTime);
            $this->model->updateList($this->table_name, $this->key_word, $id, $_POST);
            header('location: ' . URL . 'nguoidung');
        }
    }    
    public function xoa($id)
    {
        if (isset($id)) {
            $this->model->deleteById($this->table_name, $this->key_word, $id);
        }

        header('location: ' . URL . 'nguoidung');
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

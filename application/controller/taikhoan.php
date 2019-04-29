<?php
class Taikhoan extends Controller
{

    public function index()
    {
    	$user = $_SESSION["isLogin"][0];
    	$provinces = $this->model->getAll("tbl_province");

        require APP . 'view/_templates/main_header.php';
        require APP . 'view/_templates/navbar.php';
        require APP . 'view/taikhoan/index.php';
        require APP . 'view/_templates/main_footer.php';
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
                    if($district->id_district == $tmp){
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
                    if($ward->id_ward == $tmp){
                        $selected = "selected";
                    }
	?>
                <option <?php echo $selected ?> value="<?php echo htmlspecialchars($ward->id, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($ward->name, ENT_QUOTES, 'UTF-8'); ?></option>
	<?php       
            }       
        }
    }    
}

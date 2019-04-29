<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getList($table)
    {
        $sql = "SELECT * FROM $table";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getListDesc($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getListByLimit($table, $limit)
    {
        $limit = $limit*1000;
        $sql = "SELECT * FROM $table LIMIT $limit, 1000";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getListById($table, $key_word, $id)
    {
        $sql = "SELECT * FROM $table WHERE $key_word = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        return $query->fetchAll();
    }

    public function addNew($table, $data){
        if(is_array($data)){
            $field="";
            $val="";
            $prepare = array();
            $i = 0;
            foreach ($data as $key => $value) {
                $i++;
                if($key !="addNew"){
                    if($i==1){
                        $field .=$key;
                        $val .=" ? ";
                    }else{
                        $field .= ','.$key;
                        $val .=", ? ";
                    }
                    $prepare[] = $value;
                }
            }
            $sql = "INSERT INTO ".$table." ($field) VALUES($val)";
            $query = $this->db->prepare($sql);
            $query->execute($prepare);
            unset($prepare);
        }
    }
    public function updateList($table, $key_word, $id, $data){
        if(is_array($data)){
            $val = "";
            $i = 0;
            $tmp = 1;
            $prepare = array();
            foreach ($data as $key => $value) {
                if($key != "updateList"){
                    $i++;
                    if($key == "status"){
                        $tmp = 0;
                    }
                    if($i == 1){
                        $val .= $key." = ? ";
                    } else{
                        $val .= ", ".$key." = ? ";
                    }
                    $prepare[] = $value;
                }
            }
            if($tmp == 1){
                $val .= ", status = '1'";
            }
        }
        $prepare[] = ($id);
        $sql = "UPDATE $table";
        $sql .= " SET ".$val;
        $sql .= " WHERE ".$key_word."= ?";
        $query = $this->db->prepare($sql);
        $query->execute($prepare);
        unset($prepare);
    }
    public function deleteById($table, $key_word, $id)
    {
        $sql = "DELETE FROM $table WHERE $key_word = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
    }

    public function getDetail($id){
        $sql = "SELECT od.order_id, od.id, od.quantity, od.price, od.size, p.id as product_id, p.name, p.description, c.name as category_name FROM tbl_order_detail AS od , tbl_product AS p , tbl_category AS c WHERE od.product_id = p.id AND p.category_id = c.id AND od.order_id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        return $query->fetchAll();
    }

    public function sessionStart(){
        if(!isset($_SESSION['isLogin'])){
          header("location:".URL."dangnhap");
        }
    }
    public function Logout(){
        setcookie('mail_user', "", time() - 3600, "/");
        session_unset(); 
        session_destroy();
    }
}

<?php

class Model
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Lỗi kết nối cơ sở dữ liệu!');
        }
    }

    public function getProductByLimit($condition, $limit)
    {
        $limit = (string)((int)$limit);
        $limit = $limit - 1;
        $limit = $limit*9;
        $sql = "SELECT p.*, c.name as category_name FROM tbl_product as p, tbl_category as c WHERE $condition AND p.category_id = c.id AND p.`status` = 0 AND c.`status` = 0 ORDER BY id DESC LIMIT $limit, 9";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM tbl_product WHERE id = ? AND `status` = 0";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        return $query->fetch();
    }

    public function getNewProduct(){
        $sql = "SELECT * FROM tbl_product WHERE `status` = 0 ORDER BY id DESC LIMIT 12";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getNum($condition){
        $sql = "SELECT COUNT(*) as num FROM tbl_product as p, tbl_category as c WHERE $condition AND p.category_id = c.id AND p.`status` = 0 AND c.`status` = 0";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch();
    }

    public function getRelativeProduct($condition){
        $sql = "SELECT * FROM tbl_product WHERE category_id = ? AND `status` = 0 ORDER BY RAND() LIMIT 4";
        $query = $this->db->prepare($sql);
        $query->execute([$condition]);
        return $query->fetchAll();
    }
    
    public function getAll($table)
    {
        $sql = "SELECT * FROM $table";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getCategory($condition)
    {
        $sql = "SELECT * FROM tbl_category WHERE $condition AND `status` = 0";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getListById($table, $key_word, $id)
    {
        $sql = "SELECT * FROM $table WHERE $key_word = ? AND `status` = 0";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        return $query->fetchAll();
    }

    public function getOrders($table, $key_word, $id)
    {
        $sql = "SELECT * FROM $table WHERE $key_word = ? ORDER BY id DESC";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        return $query->fetchAll();
    }

    public function getDetail($id){
        $sql = "SELECT od.order_id, od.quantity, od.price, od.size, p.id as product_id, p.name as product_name, p.image as product_image FROM tbl_order_detail AS od , tbl_product AS p WHERE od.product_id = p.id AND od.order_id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        return $query->fetchAll();
    }

    public function addNew($table, $data){
       if(is_array($data)){
           $field="";
           $val="";
           $prepare = array();
           $i=0;
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
            $sql = "INSERT INTO ".$table. " ($field) VALUES($val)";
            $query = $this->db->prepare($sql);
            $query->execute($prepare);
            unset($prepare);
       }
   }

    public function getLastID($table, $key_word){
        $sql = "SELECT $key_word FROM $table ORDER BY $key_word DESC LIMIT 1 ";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch();
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
                $val .= ", status = '0'";
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
}
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
        $sql = "SELECT * FROM tbl_product WHERE $condition AND `status` = 0 ORDER BY id DESC LIMIT $limit, 9";
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

    public function getHotProduct(){
        $sql = "SELECT * FROM tbl_product WHERE id = ? OR id = ? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =?";
        $query = $this->db->prepare($sql);
        $query->execute(['13', '23', '32', '38', '65', '85', '109', '126', '144', '150', '154', '172', '184', '191', '198', '220', '240', '254']);
        return $query->fetchAll();
    }

    public function getNum($condition){
        $sql = "SELECT COUNT(*) as num FROM tbl_product WHERE $condition AND `status` = 0";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch();
    }

    public function getRelativeProduct($condition){
        $sql = "SELECT * FROM tbl_product WHERE category = ? AND `status` = 0 ORDER BY RAND() LIMIT 4";
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

    public function getListById($table, $key_word, $id)
    {
        $sql = "SELECT * FROM $table WHERE $key_word = ? AND `status` = 0";
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
///////
    public function updateList($table, $key_word, $id, $data){
        if(is_array($data)){
            $val = "";
            $i = 0;
            $prepare = array();
            foreach ($data as $key => $value) {
                var_dump($key);
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
///////
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
        $limit = $limit*16;
        $sql = "SELECT * FROM tbl_product WHERE $condition AND `status` = 0 ORDER BY id DESC LIMIT $limit, 16";
        //LIMIT $limit, 16
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
        $sql = "SELECT * FROM tbl_product WHERE id = ? OR id = ? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =? OR id =?";
        $query = $this->db->prepare($sql);
        $query->execute(['13', '23', '32', '38', '65', '85', '109', '126', '144', '150', '154', '172', '184', '191', '198', '220', '240', '254', '266']);
        return $query->fetchAll();
    }

    public function getNum($condition){
        $sql = "SELECT COUNT(*) as num FROM tbl_product WHERE $condition AND `status` = 0";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch();
    }

    public function getRelativeProduct($condition){
        $sql = "SELECT * FROM tbl_product WHERE category = ? ORDER BY RAND() LIMIT 4";
        $query = $this->db->prepare($sql);
        $query->execute([$condition]);
        return $query->fetchAll();
    }
}

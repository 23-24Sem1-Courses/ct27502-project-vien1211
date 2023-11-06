<?php
class categorymodel extends DModel{
    public function __construct(){
        parent::__construct();
    }
    public function category($table){
        $sql = "SELECT * FROM $table ORDER BY id_category DESC";
        return $this->db->select($sql);
        
    }
    public function categorybyid($table,$cond){
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->select($sql);
    }

    public function insertcategory($category, $data){
        return $this->db->insert($category,$data);
    }

    public function updatecategory($category,$data,$cond){
        return $this->db->update($category,$data,$cond);
    }

    public function deletecategory($category,$cond){
        return $this->db->delete($category, $cond);
    }


    //recipe
    public function insert_recipe($table, $data){
        return $this->db->insert($table, $data);
    }

}
?>



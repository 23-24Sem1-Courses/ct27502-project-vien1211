<?php
class categorymodel extends DModel{
    public function __construct(){
        parent::__construct();
    }
    public function category($table){
        $sql = "SELECT * FROM $table ORDER BY id_category DESC";
        return $this->db->select($sql); 
    }
    public function category_user($table){
        $sql = "SELECT * FROM $table ORDER BY id_category DESC";
        return $this->db->select($sql); 
    }
    public function categorybyid_user($table,$table_recipe,$id){
        $sql = "SELECT * FROM $table, $table_recipe WHERE $table.id_category = $table_recipe.id_category 
            AND $table_recipe.id_category = '$id' ORDER BY $table_recipe.id_recipe DESC";
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
    public function list_recipe_user($table_recipe){
        $sql = "SELECT * FROM $table_recipe ORDER BY $table_recipe.id_recipe DESC";
        return $this->db->select($sql);
    }
    public function list_recipe_index($table_recipe){
        $sql = "SELECT * FROM $table_recipe ORDER BY id_recipe DESC";
        return $this->db->select($sql);
    }
    public function insert_recipe($table, $data){
        return $this->db->insert($table, $data);
    }
    
    public function recipe($table_recipe, $table_category){
        $sql = "SELECT * FROM $table_recipe, $table_category WHERE $table_recipe.id_category = $table_category.id_category ORDER BY $table_recipe.id_recipe DESC";
        return $this->db->select($sql);
        
    }

    

    public function delete_recipe($table_recipe,$cond){
        return $this->db->delete($table_recipe, $cond);
    }

    public function recipebyid($table,$cond){
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->select($sql);
    }
    
    public function related_recipe_user($table,$table_recipe,$cond_related){
        $sql = "SELECT * FROM $table, $table_recipe  WHERE $cond_related";
        return $this->db->select($sql);
    }
    public function update_recipe($category,$data,$cond){
        return $this->db->update($category,$data,$cond);
    }

    public function detail_recipe_user($table,$table_recipe,$cond){
        $sql = "SELECT * FROM $table, $table_recipe WHERE $cond";
        return $this->db->select($sql);
    }

    //banner
    public function banner($table){
        $sql = "SELECT * FROM $table ORDER BY id_img_banner DESC";
        return $this->db->select($sql); 
    }
    

    public function insert_banner($table, $data){
        return $this->db->insert($table, $data);
    }

    public function delete_banner($table,$cond){
        return $this->db->delete($table, $cond);
    }
    public function bannerbyid($table,$cond){
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->select($sql);
    }

    public function updatebanner($table,$data,$cond){
        return $this->db->update($table,$data,$cond);
    }

    public function banner_index($table_banner){
        $sql = "SELECT * FROM $table_banner ORDER BY id_img_banner DESC";
        return $this->db->select($sql);
    }
    public function category_dashboard($table){
        $sql = "SELECT * FROM $table ORDER BY id_category DESC";
        return $this->db->select($sql); 
    }
    public function list_recipe_dashboard($table_recipe){
        $sql = "SELECT * FROM $table_recipe ORDER BY id_recipe DESC";
        return $this->db->select($sql);
    }
}
?>



<?php
class categorymodel extends DModel{
    public function __construct(){
        parent::__construct();
    }

    public function category($table){
        try {
            $sql = "SELECT * FROM $table ORDER BY id_category DESC";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    

    public function category_user($table){
        try {
            $sql = "SELECT * FROM $table ORDER BY id_category DESC";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    public function categorybyid_user($table, $table_recipe, $id){
        try {
            $sql = "SELECT * FROM $table, $table_recipe 
                    WHERE $table.id_category = $table_recipe.id_category 
                    AND $table_recipe.id_category = :id 
                    ORDER BY $table_recipe.id_recipe DESC";
    
            $stmt = $this->db->prepare($sql);
    
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    
    public function categorybyid($table, $cond, $params = array()) {
        try {
            $sql = "SELECT * FROM $table WHERE $cond";
            $stmt = $this->db->prepare($sql);
    
            foreach ($params as $key => $value) {
                $stmt->bindParam(":$key", $value);
            }
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    public function insertcategory($category, $data){
        try {
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));
            
            $sql = "INSERT INTO $category ($columns) VALUES ($values)";
            $stmt = $this->db->prepare($sql);
    
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
    
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
    public function updatecategory($category, $data, $cond){
        try {
            $setClause = "";
            foreach ($data as $key => $value) {
                $setClause .= "$key = :$key, ";
            }
            $setClause = rtrim($setClause, ", ");
            
            $sql = "UPDATE $category SET $setClause WHERE $cond";
            $stmt = $this->db->prepare($sql);
    
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
    
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
    public function deletecategory($category, $cond){
        try {
            $sql = "DELETE FROM $category WHERE $cond";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    

    //recipe
    public function list_recipe_user($table_recipe) {
        try {
            $sql = "SELECT * FROM $table_recipe ORDER BY $table_recipe.id_recipe DESC";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    public function list_recipe_index($table_recipe) {
        try {
            $sql = "SELECT * FROM $table_recipe ORDER BY id_recipe DESC";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    public function insert_recipe($table, $data) {
        try {
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));
    
            $sql = "INSERT INTO $table ($columns) VALUES ($values)";
            $stmt = $this->db->prepare($sql);
    
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
    
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
    public function recipe($table_recipe, $table_category) {
        try {
            $sql = "SELECT * FROM $table_recipe, $table_category WHERE $table_recipe.id_category = $table_category.id_category ORDER BY $table_recipe.id_recipe DESC";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    

    

    public function delete_recipe($table_recipe, $cond) {
        try {
            $sql = "DELETE FROM $table_recipe WHERE $cond";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
    public function recipebyid($table, $cond) {
        try {
            $sql = "SELECT * FROM $table WHERE $cond";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    public function related_recipe_user($table, $table_recipe, $cond_related) {
        try {
            $sql = "SELECT * FROM $table, $table_recipe  WHERE $cond_related";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    public function update_recipe($category, $data, $cond) {
        try {
            $setClause = "";
            foreach ($data as $key => $value) {
                $setClause .= "$key = :$key, ";
            }
            $setClause = rtrim($setClause, ", ");
            
            $sql = "UPDATE $category SET $setClause WHERE $cond";
            $stmt = $this->db->prepare($sql);
    
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
    
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
    public function detail_recipe_user($table, $table_recipe, $cond) {
        try {
            $sql = "SELECT * FROM $table, $table_recipe WHERE $cond";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    




    //banner
    public function banner($table) {
        try {
            $sql = "SELECT * FROM $table ORDER BY id_img_banner DESC";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    public function insert_banner($table, $data) {
        try {
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));
    
            $sql = "INSERT INTO $table ($columns) VALUES ($values)";
            $stmt = $this->db->prepare($sql);
    
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
    
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
    public function delete_banner($table, $cond) {
        try {
            $sql = "DELETE FROM $table WHERE $cond";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
    public function bannerbyid($table, $cond) {
        try {
            $sql = "SELECT * FROM $table WHERE $cond";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    public function updatebanner($table, $data, $cond) {
        try {
            
            $setClause = "";
            foreach ($data as $key => $value) {
                $setClause .= "$key = :$key, ";
            }
            $setClause = rtrim($setClause, ", ");
            
            $sql = "UPDATE $table SET $setClause WHERE $cond";
            $stmt = $this->db->prepare($sql);
    
            
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
    
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
    public function banner_index($table_banner) {
        try {
            $sql = "SELECT * FROM $table_banner ORDER BY id_img_banner DESC";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    public function category_dashboard($table) {
        try {
            $sql = "SELECT * FROM $table ORDER BY id_category DESC";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
    public function list_recipe_dashboard($table_recipe) {
        try {
            $sql = "SELECT * FROM $table_recipe ORDER BY id_recipe DESC";
            $stmt = $this->db->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    
}
?>



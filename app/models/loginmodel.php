
 <?php
class loginmodel extends DModel {
    public function __construct() {
        parent::__construct();
    }

    public function login($table_admin, $username, $password) {
        $query = "SELECT * FROM $table_admin WHERE username = :username AND password = :password";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->bindParam(':password', $password, PDO::PARAM_STR);
        $statement->execute();
        return $statement->rowCount(); 
    }

    public function getLogin($table_admin, $username, $password) {
        $query = "SELECT * FROM $table_admin WHERE username = :username AND password = :password";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->bindParam(':password', $password, PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>




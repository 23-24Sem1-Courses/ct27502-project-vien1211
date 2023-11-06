<?php
class DModel{
    protected $db = array();

    public function __construct(){
       $connect = 'mysql:dbname=ct275_project; host=localhost';
        $user = 'vien12';
        $pass = 'vien12';
        $this->db = new Database($connect,$user,$pass);
    }
}
?>
<?php
class account extends DController{
    public function __construct(){
        parent:: __construct();
    }
    public function index(){
        $this->account();
    }
    public function account(){
        
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/sidebar');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/account');
        $this->load->view('cpanel/footer');
    }
}
?>
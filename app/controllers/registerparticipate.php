<?php
class registerparticipate extends DController{
    public function __construct(){
        parent:: __construct();
    }
    public function index(){
        $this->registerparticipate();
    }
    public function registerparticipate(){
        
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/sidebar');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/registerparticipate');
        $this->load->view('cpanel/footer');
    }
}
?>
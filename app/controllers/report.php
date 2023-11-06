<?php
class report extends DController{
    public function __construct(){
        parent:: __construct();
    }
    public function index(){
        $this->report();
    }
    public function report(){
        
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/sidebar');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/report');
        $this->load->view('cpanel/footer');
    }
}
?>
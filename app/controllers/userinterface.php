<?php
class userinterface extends DController{
    public function __construct(){
        Session::checkSession();
        parent:: __construct();
    }

    public function index(){
        $this->userinterface();
    }

    public function banner(){
        
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/sidebar');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/userinterface/banner');
        $this->load->view('cpanel/footer');
    }

    public function upcomingact(){
        
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/sidebar');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/userinterface/upcomingact');
        $this->load->view('cpanel/footer');
    }

    public function quickreport(){
        
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/sidebar');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/userinterface/quickreport');
        $this->load->view('cpanel/footer');
    }
}
?>
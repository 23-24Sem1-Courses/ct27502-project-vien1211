<?php
class about extends DController{
    public function __construct(){
        $data = array();
        parent::__construct();
        
    }

    public function about(){
        $this->aboutus();
    }

    public function aboutus(){
        $table = 'category';
        $categorymodel = $this-> load->model('categorymodel');
        $data['category'] = $categorymodel->category_user($table);
        $this->load->view('header');
        $this->load->view('nav', $data);
        $this->load->view('aboutus');
        // $this->load->view('footer');
    }
}
?>
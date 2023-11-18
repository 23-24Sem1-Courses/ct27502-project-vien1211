<?php


class index extends DController{
    public function __construct(){
        $data = array();
        parent::__construct();
        
    }

    public function index(){
        $this->homepage();
    }

    public function homepage(){
        $table = 'category';
        $table_recipe = 'recipe';
        $table_banner = 'banner';
        $categorymodel = $this-> load->model('categorymodel');
        $data['category'] = $categorymodel->category_user($table);
        $data['recipe_sugg'] = $categorymodel->list_recipe_index($table_recipe);
        $data['banner'] = $categorymodel->banner_index($table_banner);

        $this->load->view('header');
        $this->load->view('nav', $data);
        $this->load->view('banner',$data);
        $this->load->view('home',$data);
        $this->load->view('footer');
    }
  

    public function notfound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
}
?>
<?php
class recipe extends DController{
    public function __construct(){
        $data = array();
        parent::__construct();
        
    }

    public function index(){
        $this->category();
    }
    public function allrecipe(){
        $table = 'category';
        $table_recipe = 'recipe';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_user($table);
        $data['list_recipe'] = $categorymodel->list_recipe_user($table_recipe);
       

        $this->load->view('header');
        $this->load->view('nav', $data);
        $this->load->view('list_recipe', $data);
        $this->load->view('footer');
    }

    public function allrecipe_dashboard(){
        $table = 'category';
        $table_recipe = 'recipe';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_dashboard($table);
        $data['list_recipe'] = $categorymodel->list_recipe_dashboard($table_recipe);
       

        $this->load->view('header');
        $this->load->view('nav', $data);
        $this->load->view('list_recipe', $data);
        $this->load->view('footer');
    }
    public function category($id){
        $table = 'category';
        $table_recipe = 'recipe';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_user($table);
        $data['categorybyid'] = $categorymodel->categorybyid_user($table,$table_recipe,$id);
       

        $this->load->view('header');
        $this->load->view('nav', $data);
        $this->load->view('category', $data);
        $this->load->view('footer');
    }
   
    public function detail_recipe($id){
        $table = 'category';
        $table_recipe = 'recipe';
        $cond = "$table_recipe.id_category= $table.id_category AND $table_recipe.id_recipe='$id'";
        
        $categorymodel = $this-> load->model('categorymodel');
        $data['category'] = $categorymodel->category_user($table);
        $data['detail_recipe'] = $categorymodel->detail_recipe_user($table,$table_recipe,$cond);
        
        foreach($data['detail_recipe'] as $key => $cate){
            $id_cate = $cate['id_category'];
        }
        
            $cond_related = "$table_recipe.id_category= $table.id_category AND $table.id_category='$id_cate' AND $table_recipe.id_recipe NOT IN('$id')";
        
        $data['related_recipe'] = $categorymodel->related_recipe_user($table,$table_recipe,$cond_related);

        $this->load->view('header');
        $this->load->view('nav', $data);
        // $this->load->view('banner');
        $this->load->view('detail_recipe', $data);
        $this->load->view('footer');
    }
}
?>
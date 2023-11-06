<?php
class category extends DController{
    public function __construct(){
        $data = array();
        $message = array();
        parent::__construct();
        
    }
   
    public function list_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/sidebar');
        $this->load->view('cpanel/navbar');
        $categorymodel = $this->load->model('categorymodel');
        $category = 'category';
        $data['category'] = $categorymodel->category($category);
        $this->load->view('category', $data);
        $this->load->view('cpanel/footer');
    }

    public function categoryid(){
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');
        $id = 1;
        $category = 'category';
        $data['categorybyid'] = $categorymodel->categorybyid($category, $id);
        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }

    public function addcategory(){
        $this->load->view('addcategory');
    }

    public function insertcategory(){
        
        $categorymodel = $this->load->model('categorymodel');
        $category = 'category';
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $data = array(
            'title_category' => $title,
            'desc_category' => $desc
        );
        $result = $categorymodel->insertcategory($category,$data);
        
        if($result==1){
            $message['msg'] = "Them du lieu thanh cong";
        }else{
            $message['msg'] = "Them du lieu that bai";
        }
        $this->load->view('addcategory', $message);
    }

    public function updatecategory(){
        
        $categorymodel = $this->load->model('categorymodel');
        $category = 'category';
        /*$title = $_POST['title'];
        $time = $_POST['time'];
        $place = $_POST['place'];*/
        $id =3;
        $cond = "category.id_category='$id'";
        $data = array(
            'title_category' => 'Món chiên',
            'desc_category' => 'Các công thức của món chiên'
        );
        $result = $categorymodel->updatecategory($category,$data,$cond);
        
        if($result==1){
            echo "Cap nhat du lieu thanh cong";
        }else{
            echo "Cap nhat du lieu that bai";
        }
        
    }

    public function deletecategory(){
        $categorymodel = $this->load->model('categorymodel');
        $category = 'category';
        /*$title = $_POST['title'];
        $time = $_POST['time'];
        $place = $_POST['place'];*/
        $id =4;
        $cond = "category.id_category='$id'";
        
        $result = $categorymodel->deletecategory($category,$cond);
        
        if($result==1){
            echo "Xoa du lieu thanh cong";
        }else{
            echo "Xoa du lieu that bai";
        }
    }
}
?>
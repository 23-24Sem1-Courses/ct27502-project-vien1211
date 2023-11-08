<?php
class product extends DController{
    public function __construct(){
        parent::__construct();
        
    }
    public function index(){
        $this->add_category();
    }

    public function add_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/product/add_category');
        $this->load->view('cpanel/footer');
    }

    public function add_recipe(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/navbar');
        $table = "category";
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category($table);

        $this->load->view('cpanel/product/add_recipe', $data);
        $this->load->view('cpanel/footer');
    }

    public function insert_category(){
        $title = $_POST['title_category'];
        $desc = $_POST['desc_category'];
        $table = "category";
        $data = array(
            'title_category' => $title,
            'desc_category' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insertcategory($table, $data);

        if($result==1){
            $message['msg']= "Thêm danh mục món ăn thành công";
            header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
        }else{
            $message['msg']= "Thêm danh mục món ăn thất bại";
            header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));

        }
    }

    public function insert_recipe(){
        $title = $_POST['title_recipe'];
        $desc = $_POST['desc_recipe'];

        $ingredient = $_POST['ingredient'];
        $step = $_POST['steptodo'];

        $img = $_FILES['img_recipe']['name'];
        $tmp_image = $_FILES['img_recipe']['tmp_name'];
        
        $div = explode('.', $img);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;

        $path_uploads = "public/uploads/product/".$unique_image;

        $category = $_POST['category'];

        $table = "recipe";
    
        $data = array(
            'title_recipe' => $title,
            'desc_recipe' => $desc,
            'ingredient' => $ingredient,
            'steptodo' => $step,
            'img_recipe' => $unique_image,
            'id_category' => $category
        );

        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insert_recipe($table, $data);
        if ($result==1){
            move_uploaded_file($tmp_image, $path_uploads);
            $message['msg']= "Thêm công thức thành công";
            header('Location:'.BASE_URL."/product/add_recipe?msg=".urlencode(serialize($message)));
        }else{
            $message['msg']= "Thêm công thức thất bại";
            header('Location:'.BASE_URL."/product/add_recipe?msg=".urlencode(serialize($message)));

        }
       
    }

    public function list_recipe(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/navbar');

        $table_recipe = "recipe";
        $table_category = "category";

        $categorymodel = $this->load->model('categorymodel');
        $data['recipe'] = $categorymodel->recipe($table_recipe, $table_category);


        $this->load->view('cpanel/product/list_recipe',$data);
        $this->load->view('cpanel/footer');
    }

    public function list_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/navbar');

        $table = "category";
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category($table);


        $this->load->view('cpanel/product/list_category',$data);
        $this->load->view('cpanel/footer');
    }
    public function delete_category($id){
        $table = "category";
        $cond = "id_category='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->deletecategory($table,$cond);
        if($result==1){
            $message['msg']= "Xóa danh mục món ăn thành công";
            header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
        }else{
            $message['msg']= "Xóa danh mục món ăn thất bại";
            header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));

        }
    }

    public function delete_recipe($id){
        $table = "recipe";
        $cond = "id_recipe='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->delete_recipe($table,$cond);
        if($result==1){
            $message['msg']= "Xóa công thức món ăn thành công";
            header('Location:'.BASE_URL."/product/list_recipe?msg=".urlencode(serialize($message)));
        }else{
            $message['msg']= "Xóa công thức món ăn thất bại";
            header('Location:'.BASE_URL."/product/list_recipe?msg=".urlencode(serialize($message)));

        }
    }

    public function edit_category($id){
        $table = "category";
        $cond = "id_category='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['categorybyid'] = $categorymodel->categorybyid($table,$cond);
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/product/edit_category', $data);
        $this->load->view('cpanel/footer');
    }

    public function edit_recipe($id){
        $table_recipe = "recipe";
        $table_category = "category";
        $cond = "id_recipe='$id'";
        $categorymodel = $this->load->model('categorymodel');

        $data['recipebyid'] = $categorymodel->recipebyid($table_recipe,$cond);
        $data['category'] = $categorymodel->category($table_category);
        
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/product/edit_recipe', $data);
        $this->load->view('cpanel/footer');
    }

    public function update_category($id){
        $table = "category";
        $cond = "id_category='$id'";
        $title = $_POST['title_category'];
        $desc = $_POST['desc_category'];
        $data = array(
            'title_category' => $title,
            'desc_category' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->updatecategory($table,$data,$cond);

        if($result==1){
            $message['msg']= "Cập nhật danh mục món ăn thành công";
            header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
        }else{ 
            $message['msg']= "Cập nhật danh mục món ăn thất bại";
            header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));

        }
    }

    public function update_recipe($id){
        $table = "recipe";
        $cond = "id_recipe='$id'";
        $categorymodel = $this->load->model('categorymodel');

        $title = $_POST['title_recipe'];
        $desc = $_POST['desc_recipe'];
        $ingredient = $_POST['ingredient'];
        $step = $_POST['steptodo'];
        $category = $_POST['category'];

        $img = $_FILES['img_recipe']['name'];
        $tmp_image = $_FILES['img_recipe']['tmp_name'];
        
        $div = explode('.', $img);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;

        $path_uploads = "public/uploads/product/".$unique_image;

        if($img){
            $data['recipebyid'] = $categorymodel->recipebyid($table,$cond);
            foreach($data['recipebyid'] as $key =>$value){
                
                    $path_unlink= "public/uploads/product/";
                    unlink($path_unlink.$value['img_recipe']);
            }
            
            $data = array(
                'title_recipe' => $title,
                'desc_recipe' => $desc,
                'ingredient' => $ingredient,
                'steptodo' => $step,
                'img_recipe' => $unique_image,
                'id_category' => $category
            );
            move_uploaded_file($tmp_image, $path_uploads);
        }else{
            $data = array(
                'title_recipe' => $title,
                'desc_recipe' => $desc,
                'ingredient' => $ingredient,
                'steptodo' => $step,
                //'img_recipe' => $unique_image,
                'id_category' => $category
            );
        }
        

        $result = $categorymodel->update_recipe($table, $data, $cond);
        if ($result==1){
            $message['msg']= "Cập nhật công thức thành công";
            header('Location:'.BASE_URL."/product/list_recipe?msg=".urlencode(serialize($message)));
        }else{
            $message['msg']= "Cập nhật công thức thất bại";
            header('Location:'.BASE_URL."/product/list_recipe?msg=".urlencode(serialize($message)));

        }
    }
}
   
?>
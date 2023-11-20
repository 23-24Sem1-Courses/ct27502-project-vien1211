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

    public function add_banner(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/navbar');
        $table = "banner";
        $categorymodel = $this->load->model('categorymodel');
        $data['banner'] = $categorymodel->banner($table);

        $this->load->view('cpanel/product/add_banner', $data);
        $this->load->view('cpanel/footer');
    }

    public function insert_category(){
        $title = htmlspecialchars($_POST['title_category'], ENT_QUOTES, 'UTF-8');
        $desc = htmlspecialchars($_POST['desc_category'], ENT_QUOTES, 'UTF-8');

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
        // $title = $_POST['title_recipe'];
        $title = htmlspecialchars($_POST['title_recipe'], ENT_QUOTES, 'UTF-8');
        $desc = htmlspecialchars($_POST['desc_recipe'], ENT_QUOTES, 'UTF-8');
        
        // $desc = $_POST['desc_recipe'];
        $suggest = $_POST['suggest_recipe'];

        // $ingredient = $_POST['ingredient'];
        $ingredient = htmlspecialchars($_POST['ingredient'], ENT_QUOTES, 'UTF-8');
        $step = htmlspecialchars($_POST['steptodo'], ENT_QUOTES, 'UTF-8');
        // $step = $_POST['steptodo'];
       
        $img = $_FILES['img_recipe']['name'];
        $tmp_image = $_FILES['img_recipe']['tmp_name'];
        
        $div = explode('.', $img);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;

        $path_uploads = "public/uploads/product/".$unique_image;

        $category = $_POST['category'];
        // $step_text = implode("\n", $step);
        $table = "recipe";
        
        $data = array(
            'title_recipe' => $title,
            'desc_recipe' => $desc,
            'ingredient' => $ingredient,
            'steptodo' => $step,
            'suggest_recipe' => $suggest,
            'img_recipe' => $unique_image,
            'id_category' => $category
        );
        
        $categorymodel = $this->load->model('categorymodel');
        
        $result = $categorymodel->insert_recipe($table, $data);
       
        if ($result==1){
            move_uploaded_file($tmp_image, $path_uploads);

            $message['msg']= "Thêm công thức thành công";
            header('Location:'.BASE_URL."/product/list_recipe?msg=".urlencode(serialize($message)));
        }else{
            $message['msg']= "Thêm công thức thất bại";
            header('Location:'.BASE_URL."/product/list_recipe?msg=".urlencode(serialize($message)));

        }
       
    }

    public function insert_banner(){
        $img = $_FILES['img_banner']['name'];
        $tmp_image = $_FILES['img_banner']['tmp_name'];
        
        $div = explode('.', $img);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;

        $path_uploads = "public/uploads/banner/".$unique_image;
        $table = "banner";
        
        $data = array(
            
            'img_banner' => $unique_image
            
        );
        
        $categorymodel = $this->load->model('categorymodel');
        
        $result = $categorymodel->insert_banner($table, $data);
       
        if ($result==1){
            move_uploaded_file($tmp_image, $path_uploads);

            $message['msg']= "Thêm hình ảnh thành công";
            header('Location:'.BASE_URL."/product/add_banner?msg=".urlencode(serialize($message)));
        }else{
            $message['msg']= "Thêm hình ảnh thất bại";
            header('Location:'.BASE_URL."/product/add_banner?msg=".urlencode(serialize($message)));

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

    public function list_banner(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/navbar');

        $table = "banner";

        $categorymodel = $this->load->model('categorymodel');
        $data['banner'] = $categorymodel->banner($table);


        $this->load->view('cpanel/product/list_banner',$data);
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

    public function delete_banner($id){
        $table = "banner";
        $cond = "id_img_banner='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->delete_banner($table,$cond);
        if($result==1){
            $message['msg']= "Xóa hình ảnh thành công";
            header('Location:'.BASE_URL."/product/list_banner?msg=".urlencode(serialize($message)));
        }else{
            $message['msg']= "Xóa hình ảnh thất bại";
            header('Location:'.BASE_URL."/product/list_banner?msg=".urlencode(serialize($message)));

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

    public function edit_banner($id){
        $table = "banner";
        $cond = "id_img_banner='$id'";
        $categorymodel = $this->load->model('categorymodel');

        $data['bannerbyid'] = $categorymodel->bannerbyid($table,$cond);

        
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/product/edit_banner', $data);
        $this->load->view('cpanel/footer');
    }
    public function update_banner($id){
        $table = "banner";
        $cond = "id_img_banner='$id'";
        $img = $_FILES['img_banner']['name'];
        $tmp_image = $_FILES['img_banner']['tmp_name'];
        if(!empty($img)){
             $div = explode('.', $img);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;
        }
        $div = explode('.', $img);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;

        $path_uploads = "public/uploads/banner/".$unique_image;
        $categorymodel = $this->load->model('categorymodel');
        if($img){
            $data['bannerbyid'] = $categorymodel->bannerbyid($table,$cond);
            foreach($data['bannerbyid'] as $key =>$value){
                    $path_unlink= "public/uploads/banner/";
                    unlink($path_unlink.$value['img_banner']);
            }
            
            $data = array(
                
                'img_banner' => $unique_image
                
            );
            move_uploaded_file($tmp_image, $path_uploads);
        }else{
            $data = array(
                
            //     //'img_recipe' => $unique_image,
                
            );
        }
        
        $result = $categorymodel->updatebanner($table,$data,$cond);

        if ($result==1){
            $message['msg']= "Cập nhật hình ảnh thành công";
            header('Location:'.BASE_URL."/product/list_banner?msg=".urlencode(serialize($message)));
        }else{
            $message['msg']= "Cập nhật hình ảnh thất bại";
            header('Location:'.BASE_URL."/product/list_banner?msg=".urlencode(serialize($message)));

        }
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
        $suggest = $_POST['suggest_recipe'];
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
                'suggest_recipe' => $suggest,
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
                'suggest_recipe' => $suggest,
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
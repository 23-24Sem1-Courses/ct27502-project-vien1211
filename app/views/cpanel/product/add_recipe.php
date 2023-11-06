
<div class=" container col-md-6 main">
<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<h3>Thêm công thức món ăn</h3>

    <form action="<?php echo BASE_URL ?>/product/insert_recipe" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Tên công thức món ăn</label>
            <input type="text" name="title_recipe" class="form-control">
        </div>
    

    
        <div class="form-group">
            <label for="email">Hình ảnh món ăn</label>
            <input type="file" name="img_recipe" class="form-control">
        </div>
    

    
        <div class="form-group">
            <label for="email">Danh mục món ăn</label>
            <select class="form-control" name="category">
                <?php
                foreach($category as $key => $cate){
                ?>
                <option value="<?php echo $cate['id_category'] ?>"><?php echo $cate['title_category'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    

    
        <div class="form-group">
            <label for="pwd">Mô tả món ăn</label>
            <textarea name="desc_recipe" class="form-control"></textarea>
        </div>
    

    
        <div class="form-group">
            <label for="pwd">Nguyên liệu</label>
            <textarea name="ingredient" class="form-control"></textarea>
        </div>
    
        <!--<div class="card">
        <div class="form-group" id="step">
            <label for="step">Các bước thực hiện</label>
            <ol>
                <li>
                    <textarea name="steptodo" class="form-control" placeholder="Bước 1"></textarea>
                </li>
            </ol>
            
            <button type="submit" id="add" >Thêm bước</button>
            
        </div>
        </div>-->

        <div class="form-group" id="step">
            <label for="step">Các bước thực hiện</label>
                <textarea name="steptodo" class="form-control" placeholder="Bước 1"></textarea>
                
        </div>
        
        <button type="submit" class="btn btn-default">Thêm danh mục</button>
    </div>
    
        
    </form>

</div>
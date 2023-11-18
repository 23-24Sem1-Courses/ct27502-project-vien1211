
<div class=" container col-md-6 main">
<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:#f87171;;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<h3>Cập nhật công thức món ăn</h3>
<?php 
    foreach($recipebyid as $key => $rec){
?>
    <form action="<?php echo BASE_URL ?>/product/update_recipe/<?php echo $rec['id_recipe'] ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Tên công thức món ăn</label>
            <input type="text" value="<?php echo $rec['title_recipe'] ?>" name="title_recipe" class="form-control">
        </div>
    

    
        <div class="form-group">
            <label for="img">Hình ảnh món ăn</label>
            <input type="file" name="img_recipe" class="form-control">
            <p><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $rec['img_recipe'] ?>" height="100" width="100"></p>
        </div>
   

    
        <div class="form-group">
            <label for="cate">Danh mục món ăn</label>
            <select class="form-control" name="category">
                <?php
                foreach($category as $key => $cate){
                ?>
                <option <?php if($cate['id_category']==$rec['id_category']) {echo 'selected';} ?> value="<?php echo $cate['id_category'] ?>"><?php echo $cate['title_category'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    

    
        <div class="form-group">
            <label for="desc">Mô tả món ăn</label>
            <textarea id="editor_desc" name="desc_recipe" class="form-control" rows="3"><?php echo $rec['desc_recipe'] ?></textarea>
        </div>
    

    
        <div class="form-group">
            <label for="ing">Nguyên liệu</label>
            <textarea id="editor_ingredient" name="ingredient" class="form-control" ><?php echo $rec['ingredient'] ?></textarea>
        </div>
    
        <div class="form-group" id="step">
                <label for="step">Các bước thực hiện</label>
                <textarea id="editor_step" name="steptodo"  class="form-control" placeholder="Các bước làm" rows="8"><?php echo $rec['steptodo'] ?></textarea> 
      
        </div> 

        <div class="form-group">
            <label for="email">Gợi Ý</label>
            <select class="form-control" name="suggest_recipe"> 
                <?php
                    if($rec['suggest_recipe']==0){
                ?>
                <option selected value="0">Không</option>    
                <option value="1">Có</option>
                <?php
                    }else{
                ?>
                <option value="0">Không</option>    
                <option selected value="1">Có</option>
                <?php
                    }
                    ?>
            </select>
        </div>

       
        
        <button type="submit" class="btn btn-default">Cập nhật công thức</button>
     

    
    <?php
    }
    ?>    
    </form>
    
</div>

</section>
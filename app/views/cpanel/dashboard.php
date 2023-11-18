
<div class=title-bar>
        <h1>Tất cả công thức</h1>
    </div>
<div class="row row-cols-1 row-cols-md-3 g-4">
   <?php
   foreach($list_recipe as $key => $recipe){
   ?>
        <div class="col">
            <div class="card">
                <div class="image-wrapper">
                    <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $recipe['img_recipe'] ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $recipe['title_recipe'] ?></h5>
                    <p class="card-text"><?php echo substr($recipe['desc_recipe'], 0, 100)  ?></p>
                    <a href="<?php echo BASE_URL ?>/product/delete_recipe/<?php echo $recipe['id_recipe'] ?>" class="btn">Xóa</a>
                    <a href="<?php echo BASE_URL ?>/product/edit_recipe/<?php echo $recipe['id_recipe'] ?>" class="btn">Cập nhật</a>
                </div>
            </div>

        </div>
    <?php
        }
    ?>
        
</div>


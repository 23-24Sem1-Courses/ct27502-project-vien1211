<div class="about">PVCooking
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="about-wrapper">
                    <div class="card-body">
                        <h5 class="card-title">Về chúng tôi</h5>
                        <p class="card-text">
                            PVCooking được giới thiệu với mọi người vào tháng 11 năm 2023.</br>

                        </p>

                        <p class="card-text">
                            Chúng tôi mang đến những công thức món ăn để góp phần giúp bạn hoàn thiện hơn những bửa
                            ăn của bạn.</br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="about-wrapper">
                    <div class="card-body">
                        <h5 class="card-title">Liên hệ</h5>

                        <p class="card-text">
                            <i class="fa-brands fa-facebook pe-2"></i> Facebook
                        </p>

                        <p class="card-text">
                            <i class="fa-brands fa-instagram"></i> Instagram
                        </p>

                        <p class="card-text">
                            <i class="fa-solid fa-phone pe-2"></i> 0776812012
                        </p>

                        <p class="card-text">
                            <i class="fa-solid fa-envelope pe-2"></i> pvcooking@gmail.com
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="suggest-recipe">
    <div class="row">
        <div class="col-6">
            <h1><b>GỢI Ý</b></h1>
        </div>
        <div class="col-6 text-right">
            <a class="btn" 
                href="<?php echo BASE_URL ?>/recipe/allrecipe/">Xem thêm
            </a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                foreach($recipe_sugg as $key =>$recipe){
                    if($recipe['suggest_recipe']==1){
            ?>
            <div class="col">
                <div class="card">
                    <div class="image-wrapper">
                        <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $recipe['img_recipe']?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $recipe['title_recipe'] ?></h5>
                        <p class="card-text"><?php echo substr($recipe['desc_recipe'], 0, 100)?></p>
                        <a href="<?php echo BASE_URL ?>/recipe/detail_recipe/<?php echo $recipe['id_recipe'] ?>" class="btn">Chi tiết</a>
                    </div>
                </div>
            </div>
            <?php
                    }
    }
    ?>

        </div>
    </div>
</div>


<?php
foreach($category as $key => $cate){
    
?>
<div class="suggest-cate">
    <div class="row">
        <div class="col-6">
            <h1><b><?php echo $cate['title_category'] ?></b></h1>
        </div>
        <div class="col-6 text-right">
            <a class="btn" 
                href="<?php echo BASE_URL ?>/recipe/category/<?php echo $cate['id_category'] ?>">Xem thêm
            </a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                // foreach($recipe_sugg as $key =>$recipe){
                //     if($recipe['suggest_recipe']==1){

                        foreach($recipe_sugg as $key => $rec_cate){
                            if($cate['id_category']==$rec_cate['id_category']){
            ?>
            <div class="col">
                <div class="card">
                    <div class="image-wrapper">
                        <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $rec_cate['img_recipe']?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rec_cate['title_recipe'] ?></h5>
                        <p class="card-text"><?php echo substr($rec_cate['desc_recipe'], 0, 100) ?></p>
                        <a href="<?php echo BASE_URL ?>/recipe/detail_recipe/<?php echo $rec_cate['id_recipe'] ?>" class="btn">Chi tiết</a>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
    ?>

        </div>
    </div>
</div>
<?php
            }
        
?>
</section>
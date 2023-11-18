<?php
foreach($detail_recipe as $key => $value){
    $name_recipe = $value['title_recipe'];
    $name_category = $value['title_category'];
    $id_cate = $value['id_category'];
}
?>

<?php
foreach($detail_recipe as $key => $detail){

}
?>
<div class="breadcrumbs">
    <a class="crum" href="<?php echo BASE_URL ?>">
        <span class="name">Trang chủ</span>
    </a>
    <i class="fa fa-angle-right"></i>

    <a class="crum" href="<?php echo BASE_URL ?>/recipe/category/<?php echo $id_cate ?>">
        <span class="name"><?php echo $name_category ?></span>
    </a>
    <i class="fa fa-angle-right"></i>

    <a class="crum" href="<?php echo BASE_URL ?>">
        <span class="name"><?php echo $name_recipe ?></span>
    </a>
    <i class="fa fa-angle-right"></i>

</div>
<div class="title-bar">
    <h1>
        <?php echo $name_recipe ?>
    </h1>
</div>

<div class="recipe">
    <div class="desc">
        <?php echo $detail['desc_recipe']?>
    </div>

    <div class="img_recipe">
        <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $detail['img_recipe'] ?>" height="550" width="800">
    </div>

    <div class="ingredient">
        <h2>Nguyên liệu</h2>
            <?php echo $detail['ingredient']?>
    </div>



    <div class="step">
    <h2>Hướng dẫn thực hiện</h2>
        <?php echo $detail['steptodo']?>
    </div>
</div>

<div class="col-6">
    <h1><b>Công Thức Liên Quan</b></h1>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">     
    <?php
    foreach ($related_recipe as $key => $rel) {
        ?>
        
        <div class="col">
            <div class="card">
                <div class="image-wrapper">
                    <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $rel['img_recipe'] ?>"
                        class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $rel['title_recipe'] ?>
                    </h5>
                    <p class="card-text">
                        <?php echo substr($rel['desc_recipe'], 0, 100)  ?>
                    </p>
                    <a href="<?php echo BASE_URL ?>/recipe/detail_recipe/<?php echo $table_recipe['id_recipe'] ?>"
                        class="btn">Chi tiết</a>
                </div>
            </div>

        </div>
        <?php
    }
    ?>
</div>



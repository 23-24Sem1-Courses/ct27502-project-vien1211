<?php
$name = 'Danh mục chưa có sản phẩm';
foreach ($categorybyid as $key => $rec) {
    $name = $rec['title_category'];
    $id_cate = $rec['id_category'];
}
?>
<div class="breadcrumbs">
<a class="crum" href="<?php echo BASE_URL ?>">
        <span class="name">Trang chủ</span>
    </a>
    <i class="fa fa-angle-right"></i>

    <a class="crum" href="<?php echo BASE_URL ?>/recipe/category/<?php echo $id_cate ?>">
        <span class="name"><?php echo $name ?></span>
    </a>
    <i class="fa fa-angle-right"></i>
</div>
<div class=title-bar>
    <h1>
        <?php echo $name ?>
    </h1>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach ($categorybyid as $key => $table_recipe) {
        ?>
        
        <div class="col">
            <div class="card">
                <div class="image-wrapper">
                    <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $table_recipe['img_recipe'] ?>"
                        class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $table_recipe['title_recipe'] ?>
                    </h5>
                    <p class="card-text">
                        <?php echo substr($table_recipe['desc_recipe'], 0, 100)  ?>
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
</section>
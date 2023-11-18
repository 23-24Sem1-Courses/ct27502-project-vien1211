
<div class=" container col-md-6 main">
<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:#f87171;;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<h3>Cập nhật danh mục món ăn</h3>
<?php
    foreach($categorybyid as $key => $cate){
?>
    <form action="<?php echo BASE_URL ?>/product/update_category/<?php echo $cate['id_category'] ?>" method="POST">
        <div class="form-group">
            <label for="email">Tên danh mục</label>
            <input type="text" value="<?php echo $cate['title_category'] ?>" name="title_category" class="form-control">
        </div>
        <div class="form-group">
            <label for="pwd">Mô tả danh mục</label>
            <textarea name="desc_category" style="resize: none" class="form-control"><?php echo $cate['desc_category'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-default">Cập nhật danh mục</button>
    </form>
    <?php
    }
    ?>
</div>
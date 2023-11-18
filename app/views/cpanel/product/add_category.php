
<div class=" container col-md-4 main">
<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:#f87171;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<h3>Thêm danh mục món ăn</h3>
    <form action="<?php echo BASE_URL ?>/product/insert_category" method="POST">
        <div class="form-group">
            <label for="name">Tên danh mục</label>
            <input type="text" name="title_category" class="form-control">
        </div>
        <div class="form-group">
            <label for="pwd">Mô tả danh mục</label>
            <input type="text" name="desc_category" rows="5" style="resize: none" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Thêm danh mục</button>
    </form>
</div>
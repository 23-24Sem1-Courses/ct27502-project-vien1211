
<div class=" container col-md-6 main">
<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:#f87171;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<h3>Cập nhật hình ảnh Banner</h3>
<?php 
    foreach($bannerbyid as $key => $bannid){
?>
    <form action="<?php echo BASE_URL ?>/product/update_banner/<?php echo $bannid['id_img_banner'] ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <input type="file" name="img_banner" class="form-control">
            <p><img src="<?php echo BASE_URL ?>/public/uploads/banner/<?php echo $bannid['img_banner'] ?>" height="250" width="300"></p>
    </div>
        <button type="submit" class="btn btn-default">Cập nhật hình ảnh</button>
    </form>
   <?php
    }
    ?>
</div>
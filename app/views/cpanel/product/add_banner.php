
<div class=" container col-md-6 main">
<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:#f87171;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<h3>Thêm hình ảnh Banner</h3>

    <form action="<?php echo BASE_URL ?>/product/insert_banner" method="POST" enctype="multipart/form-data">
      <div class="form-group">
            <label for="email">Hình ảnh Banner</label>
            <input type="file" name="img_banner" class="form-control">
        </div>
        <button type="submit" class="btn btn-default" >Thêm hình ảnh</button>
    </form>
   
</div>
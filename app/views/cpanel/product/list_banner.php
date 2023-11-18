<div class=" container col-md-12 main">
<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:#f87171;;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<h3>Liệt kê hình ảnh Banner</h3>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Hình ảnh</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $i = 0; 
            foreach($banner as $key => $bann){
                $i++;
        ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><img src="<?php echo BASE_URL ?>/public/uploads/banner/<?php echo $bann['img_banner'] ?>" height="350" width="500"></td>
        <td><a href="<?php echo BASE_URL ?>/product/delete_banner/<?php echo $bann['id_img_banner'] ?>">Xóa</a> || <a href="<?php echo BASE_URL ?>/product/edit_banner/<?php echo $bann['id_img_banner'] ?>">Cập nhật</a></td>
      </tr>
      <?php
            }
        ?>
    </tbody>
  </table>
</div>
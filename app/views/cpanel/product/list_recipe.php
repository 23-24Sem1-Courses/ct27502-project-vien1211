<div class=" container col-12 main">
<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:#f87171;;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<h3>Liệt kê công thức món ăn</h3>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên</th>
        <th>Hình ảnh</th>
        <th>Danh mục</th>
        <th>Gợi ý</th>
        <th>Quảnlý</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $i = 0; 
            foreach($recipe as $key => $rec){
                $i++;
        ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $rec['title_recipe'] ?></td>
        <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $rec['img_recipe'] ?>" height="100" width="150"></td>
        <td><?php echo $rec['title_category'] ?></td>
        <td><?php 
          if($rec['suggest_recipe']==0){
            echo 'Không';
          }else {
            echo 'Có';
          }
          ?></td> 
        <td><a href="<?php echo BASE_URL ?>/product/delete_recipe/<?php echo $rec['id_recipe'] ?>" class="btn">Xóa</a> <a href="<?php echo BASE_URL ?>/product/edit_recipe/<?php echo $rec['id_recipe'] ?>" class="btn">Cập nhật</a></td>
      </tr>
      <?php
            }
        ?>
    </tbody>
  </table>
</div>
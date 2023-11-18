<div class=" container col-md-9 main">
<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:#f87171;;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<h3>Liệt kê danh mục món ăn</h3>
    <table class="table table_category">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
            foreach($category as $key => $cate){
                $i++;
        ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cate['title_category'] ?></td>
        <td><?php echo $cate['desc_category'] ?></td>
        <td><a href="<?php echo BASE_URL ?>/product/delete_category/<?php echo $cate['id_category'] ?>" class="btn">Xóa</a>  <a href="<?php echo BASE_URL ?>/product/edit_category/<?php echo $cate['id_category'] ?>" class="btn">Cập nhật</a></td>
      </tr>
      <?php
            }
        ?>
    </tbody>
  </table>
</div>
<form autocomplete="off" action="<?php echo BASE_URL ?>/category/insertcategory" method="POST">
    <?php
        if(isset($msg)){
            echo'<span style="color:blue;font-weight:bold;">'.$msg.'</span>';
        }
    ?>
    <table>
        <tr>
            <td>Ten danh mục món ăn</td>
            <td><input type="text" required="1" name="title"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><input type="text" required="1" name="desc"></td>
        </tr>
        <tr>
            <td><input type="submit" name="addcategory" value="Insert"></td>
        </tr>
    </table>
</form>
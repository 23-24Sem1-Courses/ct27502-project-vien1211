<div class=" container col-md-6 main">
    <?php
    if (!empty($_GET['msg'])) {
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value) {
            echo '<span style="color:#f87171;font-weight:bold">' . $value . '</span>';
        }
    }
    ?>
    <h3>Thêm công thức món ăn</h3>

    <form action="<?php echo BASE_URL ?>/product/insert_recipe" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Tên công thức món ăn</label>
            <input type="text" name="title_recipe" class="form-control">
        </div>



        <div class="form-group">
            <label for="email">Hình ảnh món ăn</label>
            <input type="file" name="img_recipe" class="form-control">
        </div>



        <div class="form-group">
            <label for="cate">Danh mục món ăn</label>
            <select class="form-control" name="category">
                <?php
                foreach ($category as $key => $cate) {
                    ?>
                    <option value="<?php echo $cate['id_category'] ?>">
                        <?php echo $cate['title_category'] ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>



        <div class="form-group">
            <label for="desc">Mô tả món ăn</label>
            <textarea id="editor_desc" name="desc_recipe" class="form-control" rows="2"></textarea>
        </div>



        <div class="form-group">
            <label for="ing">Nguyên liệu</label>
            <textarea id="editor_ingredient" name="ingredient" class="form-control"></textarea>
        </div>


        <div class="form-group" id="step">

            <label for="step">Các bước thực hiện</label>
            <textarea id="editor_step" name="steptodo" class="form-control" placeholder="Các bước làm"
                rows="8"></textarea>

        </div>

        <div class="form-group">
            <label for="email">Gợi Ý</label>
            <select class="form-control" name="suggest_recipe">
                <option value="0">Không</option>
                <option value="1">Có</option>

            </select>
        </div>

        <button type="submit" class="btn btn-default">Thêm công thức</button>

</div>


</form>

</div>
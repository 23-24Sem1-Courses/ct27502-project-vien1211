
<div class=" container col-md-6 main">
<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
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
            <label for="email">Danh mục món ăn</label>
            <select class="form-control" name="category">
                <?php
                foreach($category as $key => $cate){
                ?>
                <option value="<?php echo $cate['id_category'] ?>"><?php echo $cate['title_category'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    

    
        <div class="form-group">
            <label for="pwd">Mô tả món ăn</label>
            <textarea name="desc_recipe" class="form-control" rows="2"></textarea>
        </div>
    

    
        <div class="form-group">
            <label for="pwd">Nguyên liệu</label>
            <textarea name="ingredient" class="form-control" ></textarea>
        </div>
    
       <!-- <?php
$stepCount = 1;
foreach ($data as $step) {
    echo '<div class="card">';
    echo '<div class="form-group" id="step">';
    echo '<label for="step">Các bước thực hiện</label>';
    echo '<ol>';
    echo '<li>';
    echo '<textarea name="step_recipe[]" class="form-control" placeholder="Bước ' . $stepCount . '">'  .$step['step_desc'].'</textarea>';
    echo '</li>';
    echo '</ol>';
    echo '<button type="button" class="btn btn-default add-step">Thêm bước</button>';
    echo '</div>';
    echo '</div>';
    $stepCount++;
}
?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    var addButton = document.querySelectorAll(".add-step");

    addButton.forEach(function (button) {
        button.addEventListener("click", function () {
            var card = this.closest(".card");
            var stepCount = card.querySelectorAll("textarea").length + 1;

            var ol = card.querySelector("ol");
            var li = document.createElement("li");
            li.innerHTML = '<textarea name="steptodo[]" class="form-control" placeholder="Bước ' + stepCount + '"></textarea>';
            ol.appendChild(li);
        });
    });
});
</script>-->
        
         
        <div class="form-group" id="step">
     
            <label for="step">Các bước thực hiện</label>
                    <textarea name="steptodo"  class="form-control" placeholder="Các bước làm" rows="8"></textarea> 
         
           <!-- <button type="submit" class="btn btn-default" id="add" >Thêm bước</button>-->
             
        </div>
        
        

        <!--<div class="form-group" id="step">
            <label for="step">Các bước thực hiện</label>
                <textarea name="steptodo" class="form-control" rows="5" placeholder="Bước 1"></textarea>
                
        </div>-->
        <button type="submit" class="btn btn-default" >Thêm công thức</button>
        <!--<input type="submit" class="btn btn-default" value="Thêm công thức">-->
    </div>
    
        
    </form>

</div>
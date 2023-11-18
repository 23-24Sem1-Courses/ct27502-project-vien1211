
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <?php
        foreach ($banner as $key => $bann) {
            $indicatorClass = ($key == 0) ? 'active' : ''; // Chỉ thêm class 'active' cho slide đầu tiên
        ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key; ?>" class="<?php echo $indicatorClass; ?>" aria-label="Slide <?php echo $key + 1; ?>"></button>
        <?php } ?>
    </div>

    <div class="carousel-inner">
        <?php
        foreach ($banner as $key => $bann) {
            $itemClass = ($key == 0) ? 'active' : ''; // Chỉ thêm class 'active' cho slide đầu tiên
        ?>
            <div class="carousel-item <?php echo $itemClass; ?>">
                <img src="<?php echo BASE_URL ?>/public/uploads/banner/<?php echo $bann['img_banner'] ?>" class="d-block w-100" alt="...">
            </div>
        <?php } ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
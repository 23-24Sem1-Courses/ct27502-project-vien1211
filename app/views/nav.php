<nav>
    <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="<?php echo BASE_URL ?>/index">PVCooking</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name">PVCooking</span>
                <i class='bx bx-x'></i>
            </div>

            <ul class="links">
                <li><a href="<?php echo BASE_URL ?>/index">Trang chủ</a></li>

                <li>
                    <a href="#"><a href="#">Danh mục món ăn</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        <?php
                            foreach($category as $key => $cate){
                        ?>
                        <li>
                            <a href="<?php echo BASE_URL ?>/recipe/category/<?php echo $cate['id_category']?>"> <?php echo $cate['title_category'] ?></a>
                        </li>

                        <?php
                        }
                        ?>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo BASE_URL ?>/recipe/allrecipe">Công thức món ăn</a>
                   
                </li>

                <li><a href="<?php echo BASE_URL ?>/about/aboutus">Về chúng tôi</a></li>

                <li>
                    <a href="#">Bạn là Admin?</a>
                    <i class='bx bxs-user bx-flip-horizontal user pe-2'></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="<?php echo BASE_URL ?>/login">Đăng nhập</a></li>
                    </ul>
                </li>

            </ul>
        </div>

        <div class="search-box">
            <i class='bx bx-search'></i>
            <div class="input-box">
                <input type="text" placeholder="Search...">
            </div>
        </div>


    </div>
</nav>

<section class="main">
    <div class="container">
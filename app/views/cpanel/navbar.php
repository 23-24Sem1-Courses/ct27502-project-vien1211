<nav>
    <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="<?php echo BASE_URL ?>/login/dashboard">PVCooking</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name">PVCooking</span>
                <i class='bx bx-x' ></i>
            </div>

            <ul class="links">
                <li><a href="<?php echo BASE_URL ?>/login/dashboard">Trang chủ</a></li>
                
                <li>
                    <a href="#">Danh mục món ăn</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        <li><a href="<?php echo BASE_URL ?>/product">Thêm</a></li>
                        <li><a href="<?php echo BASE_URL ?>/product/list_category">Liệt kê</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="#">Công thức món ăn</a>
                    <i class='bx bxs-chevron-down js-arrow arrow '></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="<?php echo BASE_URL ?>/product/add_recipe">Thêm</a></li>
                        <li><a href="<?php echo BASE_URL ?>/product/list_recipe">Liệt kê</a></li>
                    </ul>
                </li>

                

                <li>
                    <a href="#">Admin</a>
                    <i class='bx bxs-user bx-flip-horizontal user pe-2' ></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="<?php echo BASE_URL ?>/login/logout">Đăng xuất</a></li>
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
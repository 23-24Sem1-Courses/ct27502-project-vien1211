<aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                <a href="<?php echo BASE_URL ?>/login/dashboard">
                    <img src="<?php echo BASE_URL ?>/public/template/img/ĐẠI_HỌC_CẦN_THƠ_1-removebg-preview.png" alt="logo" height="70">
                </a>
                </div>

                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="<?php echo BASE_URL ?>/login/dashboard" class="sidebar-link">
                        <i class="fa-solid fa-house pe-2"></i>Trang chủ
                        </a>
                    </li>

                    <li class="sidebar-header">Quản Lý</li>
                    <li class="sidebar-item">
                        <a href="<?php echo BASE_URL ?>/activity/list_activity" class="sidebar-link"><i class="fa-solid fa-newspaper pe-2"></i>Hoạt Động</a>
                    </li>

                    <li class="sidebar-item">
                        <a href="<?php echo BASE_URL ?>/report" class="sidebar-link"><i class="fa-solid fa-pen-to-square pe-2"></i>Báo Cáo Bài Viết</a>
                    </li>

                    <li class="sidebar-item">
                        <a href="<?php echo BASE_URL ?>/registerparticipate" class="sidebar-link">
                        <i class="fa-solid fa-user-pen pe-2"></i>Đăng Ký Tham Gia
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="<?php echo BASE_URL ?>/account" class="sidebar-link">
                        <i class="fa-solid fa-user pe-2"></i>Tài Khoản
                        </a>
                    </li>
            
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#themes" aria-expanded="false"><i class="fa-solid fa-synagogue pe-2"></i>Giao Diện Người Dùng</a>
                            <ul id="themes" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="<?php echo BASE_URL ?>/userinterface/banner" class="sidebar-link">Banner</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo BASE_URL ?>/userinterface/upcomingact" class="sidebar-link">Hoạt động sắp diễn ra</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo BASE_URL ?>/userinterface/quickreport" class="sidebar-link">Báo cáo nhanh</a>
                                </li>
                            </ul>
                    </li>

                    <li class="sidebar-header">Tùy chọn</li>
                        <li class="sidebar-item">
                        <a href="<?php echo BASE_URL ?>/login/logout" class="sidebar-link"><i class="fa-solid fa-right-from-bracket pe-2"></i>Đăng xuất</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>Multi Dropdown</a>
                                <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#level-1" aria-expanded="false">level 1</a>
                                    </li>
                                    <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                                        <li class="sidebar-item">
                                            <a href="#" class="sidebar-link">Level 1.1</a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="#" class="sidebar-link">Level 1.2</a>
                                        </li>
                                    </ul>
                                </ul>
                        </li>   
                </ul>
            </div>
        </aside>
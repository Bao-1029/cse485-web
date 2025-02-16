<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <script src="./JS/jquery.min.js"></script>
    <script src="./JS/bootstrap.min.js"></script>
    <script src="./JS/custom.min.js"></script>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="./CSS/custom.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="../index.php" class="site_title"><i class="fa fa-paw"></i> <span>WEB TLU</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="img/1.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Admin !</h2>
                        </div>
                    </div>
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Giang Nam</h3>
                            <ul class="nav side-menu">
                                <li><a href="DanhSachSinhVien.php"><i class="fas fa-fw fa-cog"></i> Quản Lý Sinh Viên &emsp;&emsp;&emsp;</a>
                                </li>
                                <li><a href="DanhSachGiangVien.php"><i class="fas fa-fw fa-cog"></i> Quản Lý Giảng Viên &emsp;&emsp;&emsp;</a>
                                </li>
                                <li><a href="QLNganh.php"><i class="fas fa-fw fa-cog"></i> Quản Lý Ngành Học &emsp;&emsp;&emsp;</a>
                                </li>
                                <li><a href="QLLop.php"><i class="fas fa-fw fa-cog"></i> Quản Lý Lớp Học &emsp;&emsp;&emsp;</a>
                                </li>
                                <li><a href="QLMonHoc.php"><i class="fas fa-fw fa-cog"></i> Quản Lý Môn Học &emsp;&emsp;&emsp;</a>
                                </li>
                                <li><a href="QLTaiKhoan.php"><i class="fas fa-fw fa-cog"></i> Quản Lý Tài Khoản &emsp;&emsp;&emsp;</a>
                                </li>
                                <li><a href="CapQuyen.php"><i class="fas fa-fw fa-cog"></i> Cấp Quyền &emsp;&emsp;&emsp;</a>
                                </li>
                                <li><a href="FormPost.php"><i class="fas fa-fw fa-cog"></i> Quản Lý Bài Viết &emsp;&emsp;&emsp;</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="fas fa-cogs" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="fas fa-desktop" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="fas fa-lock" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="fas fa-sign-out-alt" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <!-- bên trái -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="img/1.jpg" alt="">Giang Nam
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;">Đổi mật khẩu</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i>Đăng xuất</a></li>
                                </ul>
                            </li>


                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-envelope"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"><img src="img/1.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="img/1.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="img/1.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="img/1.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

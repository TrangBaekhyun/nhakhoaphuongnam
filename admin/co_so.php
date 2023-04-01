<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quản trị hệ thống</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Nha khoa Phương Nam</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            </form>

            <!-- Navbar-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="dropdown dropdown-list-toggle"><a href="#" data-bs-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Hộp thoại
                    <div class="float-right">
                        <a href="#">Tất cả tin nhắn</a>
                    </div>
                    </div>
                    <div class="dropdown-list-content dropdown-list-message">
                        <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                    </div>
                        </a>
                    </div>
                    <div class="dropdown-footer text-center">
                        <a href="#">Xem tất cả <i class="fas fa-chevron-right"></i></a>
                    </div>
                    </div>
                </li>
                <li class="dropdown dropdown-list-toggle"><a href="#" data-bs-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Thông báo
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                    </div>
                    <div class="dropdown-list-content dropdown-list-icons">
                        <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                    </div>
                    <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                </div>
                <div class="dropdown-footer text-center">
                        <a href="#">Xem tất cả <i class="fas fa-chevron-right"></i></a>
                    </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>Hi, user</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Profile</a></li>
                        <li><a class="dropdown-item" href="#!">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
            </form>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Hệ thống</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSystems" aria-expanded="false" aria-controls="collapseSystems">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Bảng điều khiển
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseSystems" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../trang_chu.php">Trang chủ</a>
                                    <a class="nav-link" href="index.php">Trang quản trị</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDatlich" aria-expanded="false" aria-controls="collapseDatlich">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                                Đặt lịch
                                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                             <div class="collapse" id="collapseDatlich" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="dat_lich_kham.php">Đặt lịch khám</a>
                                    <a class="nav-link" href="dat_lich_tu_van.php">Đặt lịch tư vấn</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                Cơ sở
                            </a>
                            <a class="nav-link collapsed" href="co_so.php" data-bs-toggle="collapse" data-bs-target="#collapseKhachhang" aria-expanded="false" aria-controls="collapseKhachhang">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                Khách hàng
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseKhachhang" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                   
                                    <a class="nav-link" href="khach_hang.php">Danh sách khách hàng</a>
                                    <a class="nav-link" href="khach_hang_them_moi.php">Tạo mới</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBenhan" aria-expanded="false" aria-controls="collapseBenhan">
                                <div class="sb-nav-link-icon"><i class="fas fa-clipboard"></i></div>
                                Bệnh án
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBenhan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="benh_an.php">Danh sách bệnh án</a>
                                    <a class="nav-link" href="benh_an_them_moi.php">Tạo mới</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBacsi" aria-expanded="false" aria-controls="collapseBacsi">
                                <div class="sb-nav-link-icon"><i class="fas fa-street-view"></i></div>
                                Bác sĩ
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBacsi" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="bac_si.php">Danh sách bác sĩ</a>
                                    <a class="nav-link" href="bac_si_them_moi.php">Tạo mới</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="dich_vu.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                Dịch vụ
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBlog" aria-expanded="false" aria-controls="collapseBlog">
                                <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                                Bài viết
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBlog" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="bai_viet.php">Danh sách bài viết</a>
                                    <a class="nav-link" href="bai_viet_them_moi.php">Tạo mới</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTaikhoan" aria-expanded="false" aria-controls="collapseTaikhoan">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                                Tài khoản
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseTaikhoan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="tk_quan_tri.php">Tk Quản trị</a>
                                    <a class="nav-link" href="tk_bac_si.php">Tk Bác sĩ</a>
                                    <a class="nav-link" href="tk_benh_nhan.php">Tk Bệnh nhân</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị cơ sở</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Trang quản trị</a></li>
                            <li class="breadcrumb-item active">Quản trị cơ sở</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách cơ sở | <a href="co_so_them_moi.php"> Thêm mới</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">STT</th>
                                            <th style="text-align: center;">Địa chỉ</th>
                                            <th style="text-align: center;">Sửa</th>
                                            <th style="text-align: center;">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="text-align: center;">STT</th>
                                            <th style="text-align: center;">Địa chỉ</th>
                                            <th style="text-align: center;">Sửa</th>
                                            <th style="text-align: center;">Xóa</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        //1. Ket noi
                                        $ket_noi = mysqli_connect("localhost", "root","", "nhakhoaphuongnam_db");
                                        //2.Truy van lay du lieu
                                        $sql= "
                                                SELECT * 
                                                FROM tbl_co_so";
                                        //3.Truy van tran ve du lieu
                                        $co_so = mysqli_query($ket_noi, $sql);
                                        //4. Hien thi du lieu vua lay duoc
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($co_so))
                                        {
                                            $i++;
                                        ;?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $i;?></td>
                                            <td><?php echo $row["dia_chi"];?></td>
                                            <td style="text-align: center;"><a href="co_so_sua.php?id=<?php echo $row["id_co_so"];?>">Sửa</a></td>
                                            <td style="text-align: center;"><a href="co_so_xoa.php?id=<?php echo $row["id_co_so"];?>">Xóa</a></td>
                                        </tr>
                                         <?php
                                        }
                                    //5. Dong ket noi sau khi su dung
                                    mysqli_close($ket_noi);
                                    ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Bản quyền &copy; Nha khoa Phương Nam</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

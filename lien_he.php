<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nha khoa Phương Nam | Liên hệ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="trang_chu.php">Nha khoa <span>Phương Nam</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Tùy chọn
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="trang_chu.php" class="nav-link">Trang chủ</a></li>
            <li class="nav-item active"><a href="gioi_thieu.php" class="nav-link">Giới thiệu</a></li>
            <li class="nav-item"><a href="dich_vu.php" class="nav-link">Dịch vụ</a></li>
            <li class="nav-item"><a href="bac_si.php" class="nav-link">Bác sĩ</a></li>
            <li class="nav-item"><a href="tin_tuc.php" class="nav-link">Tin tức</a></li>
            <li class="nav-item"><a href="lien_he.php" class="nav-link">Liên hệ</a></li>
            <li class="nav-item cta"><a href="lien_he.php" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Đặt lịch khám</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Tin tức</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Hệ thống chuỗi nha khoa tiêu chuẩn Pháp</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-3 color-1 p-4">
            <h3 class="mb-4">Thông tin liên hệ</h3>
            <p><span>Hotline: </span> <a href="tel://1900.6900">1900.6900</a></p>
            <p><span>Điện thoại: </span> <a href="tel://1900.6900">02473033222</a></p>
            <p><span>Website: </span> <a href="#">http://nhakhoaphuongnam.vn</a></p>
            <p><span>Email: </span> <a href="mailto:tuvan@nhakhoaphuongnam.vn">tuvan@nhakhoaphuongnam.vn</a></p>            
          </div>
          <div class="col-md-3 color-2 p-4"></div>
          <div class="col-md-6 color-3 p-4">
            <div class="contact-form-right">
              <h3 >Đặt lịch tư vấn miễn phí</h3>                  
              <form method="POST" action="lien_he_thuc_hien.php" >
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputHoten" name = "txtHoten" placeholder="Họ tên" required data-error="Xin hãy nhập tên của bạn">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email" name = "txtEmail"  required data-error="Xin hãy nhập Email của bạn">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputSDT" placeholder="Số điện thoại" name = "txtSDT" required data-error="Xin hãy nhập số điện thoại của bạn">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <textarea name="txtNoidung" id="inputNoidung" cols="30" rows="7" class="form-control" placeholder="Nội dung tư vấn"
                      required data-error="Xin hãy nhập nội dung bạn muốn tư vấn"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Đặt lịch" class="btn btn-primary">
                    </div>
                  </div>
                </div>
              </form>
            </div>    
          </div> 
          <div class="container">        
            <div class="row block-9">
              <div class="col-md-6 pr-md-5">
                <div class="col-md-12 mb-4">
                  <h2 class="h4">Địa chỉ hệ thống Nha khoa Phương Nam</h2>
                </div>
                <span class="icon icon-map-marker"></span><span class="text"> TP. Hà Nội</span>
                  <li>Cơ sở 1: 110-112 Bà Triệu, Hoàn Kiếm, Hà Nội</li>
                  <li>Cơ sở 2: 12 Thái Thịnh, Đống Đa Hà Nội</li>
                  <li>Cơ sở 3: 212 Kim Mã, Ba Đình, Hà Nội</li>
                <span class="icon icon-map-marker"></span><span class="text"> TP. Hồ Chí Minh</span>
                  <li>Cơ sở 4: 179C, Đường 3/2, P11, Q10</li>
                  <li>Cơ sở 5: 97 Cộng Hòa, P4, Q.Tân Bình</li>
                  <li>Cơ sở 6: 87 Nguyễn Thái Học, P.Cầu Ông Lãnh, Q1</li>
                <span class="icon icon-map-marker"></span><span class="text"> TP. Hải Phòng</span>
                  <li>Cơ sở 7: 386 Tô Hiệu, Phường Hồ Nam, Lê Chân, Hải Phòng</li>
                <span class="icon icon-map-marker"></span><span class="text"> TP. Nghệ An</span>
                  <li>Cơ sở 8: 143 Nguyễn Văn Cừ, TP. Vinh, Nghệ An</li>
                <span class="icon icon-map-marker"></span><span class="text"> TP. Đà Nẵng</span>
                  <li>Cơ sở 9: 261-263 đường Hoàng Diệu, Phường Nam Dương, Q.Hải Châu, Đà Nẵng</li>
                <span class="icon icon-map-marker"></span><span class="text"> TP. Thủ Dầu Một</span>
                  <li>Cơ sở 10: Số 688A, Đường Cách Mạng Tháng 8, TP. Thủ Dầu Một, Bình Dương</li> 
                <span class="icon icon-map-marker"></span><span class="text"> TP. Hạ Long</span>
                  <li>Cơ sở 11: Shop house 6-7, KĐT Time Garden, Đường Lê Thánh Tông, Hạ Long, Quảng Ninh</li> 
                </div>
              <div class="col-md-6" id="map"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Nha khoa Phương Nam.</h2>
              <p>HỆ THỐNG CHUỖI NHA KHOA TIÊU CHUẨN PHÁP ĐẦU TIÊN TẠI VIỆT NAM</p>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Địa chỉ liên lạc</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Giới thiệu</a></li>
                <li><a href="#" class="py-2 d-block">Đặc trưng</a></li>
                <li><a href="#" class="py-2 d-block">Dự án</a></li>
                <li><a href="#" class="py-2 d-block">Tin tức</a></li>
                <li><a href="#" class="py-2 d-block">Liên hệ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tin tức liên quan</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar "></span><?php echo date( 'd-m-Y');?></a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo date( 'd-m-Y');?></a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Địa chỉ cơ sở</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">
                    <ul>TP. HÀ NỘI:
                      <li> 110-112 Bà Triệu, Hoàn Kiếm, Hà Nội</li>
                      <li> 12 Thái Thịnh, Đống Đa, Hà Nội</li>
                      <li> 212 Kim Mã, Ba Đình, Hà Nội</li>
                    </ul>
                    </ol></span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">(+84) 981 042 056</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@nhakhoaphuongnam.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
              <br>Giấy chứng nhận đăng ký doanh nghiệp số: 0107473432 do Phòng Đăng ký kinh doanh - Sở Kế hoạch và Đầu tư TP. Hà Nội cấp ngày 14/6/2016
              <br>Giấy phép hoạt động khám bệnh, chữa bệnh số: 3028/SYT - GPHĐ do Sở Y tế TP. Hà Nội cấp ngày 14/10/2016
              <br>Địa chỉ: Số 39 Quang Trung, phường Trần Hưng Đạo, quận Hoàn Kiếm, TP. Hà Nội
              <p><a href="chinh_sach_bao_mat.php">Chính sách bảo mật</a></p>
              <br>Hiệu quả phụ thuộc vào cơ địa mỗi người (*)<i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer> 
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Đặt lịch khám</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <div class="section-body">
        <div class="modal-body">
          <form method="POST" action="dat_lich_kham_thuc_hien.php" enctype="multipart/form-data">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="inputHovaten" placeholder="Họ và tên" name="txtHovaten">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="inputSodt" placeholder="Số điện thoại" name="txtSodt">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="inputEEmail" placeholder="Email" name="txtEEmail">
            </div>

            <div class="form-group">
                    <div class="select-wrap">      
                      <select id="select-box" class="form-control" name="txtCoso">
                      <div class="scrollbar" name="txtCoso">                       
                        <option value="" id="inputCoso">Cơ sở</option>
                        <option value="1" id="input1" >CS1: Số 110-112 Bà Triệu, Hoàn Kiếm, Hà Nội</option>
                        <option value="2" id="2" >CS2: Số 12 Thái Thịnh, Đống Đa, Hà Nội</option>
                        <option value="3" id="3" >CS3: Số 212 Kim Mã, Ba Đình, Hà Nội</option>
                        <option value="4" id="4" >CS4: Số 386 Tô Hiệu, Phường Hồ Nam, Lê Chân, Hải Phòng</option>
                        <option value="5" id="5" >CS5: Shop House 6-7, KĐT Times Garden, Lê Thánh Tông, Bạch Đằng, Quảng Ninh</option>
                        <option value="6" id="6" >CS6: Số 143, Nguyễn Văn Cừ, TP Vinh</option>
                        <option value="7" id="7" >CS7: Số 261-263 đường Hoàng Diệu, Phường Nam Dương, Q.Hải Châu, Đà Nẵng</option>
                        <option value="8" id="8" >CS8: 688A Đường Cách Mạng Tháng 8, Chánh Nghĩa, Bình Dương</option>
                        <option value="9" id="9" >CS9: Số 179C, Đường 3/2, P11, Q10, TP.HCM</option>
                        <option value="10" id="10" >CS10: Số 97 Cộng Hòa, P4, Q.Tân Bình,TP.HCM</option>
                        <option value="11" id="11" >CS11: 87 Nguyễn Thái Học, P. Cầu Ông Lãnh, Q. 1, TP HCM</option>
                        </div>
                      </select>
                    </div>
                  </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control" id="inputNgay" placeholder="Ngày " name="txtDate">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control appointment_time" id="inputThoigian" placeholder="Thời gian" name="txtTime">
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <input type="submit" value="Đặt lịch" class="btn btn-primary">
            </div>
          </form>
        </div>  
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
    
  </body>
</html>
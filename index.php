<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nha khoa Phương Nam | Trang chủ</title>
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
        <a class="navbar-brand" href="index.html">Phương Nam<span>Dentistry</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Danh mục
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="trang_chu.php" class="nav-link"></style>Trang chủ</a></li>
            <li class="nav-item"><a href="gioi_thieu.php" class="nav-link">Giới thiệu</a></li>
            <li class="nav-item"><a href="dich_vu.php" class="nav-link">Dịch vụ</a></li>
            <li class="nav-item"><a href="bac_si.php" class="nav-link">Bác sĩ</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Kiến thức</a></li>
            <li class="nav-item"><a href="lien_he.php" class="nav-link">Liên hệ</a></li>
            <li class="nav-item cta"><a href="lien_he.php" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Đặt lịch khám</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tiên phong ứng dụng công nghệ nha khoa tân tiến nhất trên thế giới</h1>
          
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Đội ngũ chuyên gia bác sĩ Pháp - Việt uy tín hàng đầu</h1>
            
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-3 color-1 p-4">
    				<h3 class="mb-4">Hotline</h3>
    				<p>Liên hệ ngay với chúng tôi</p>
    				<span class="icon icon-phone"></span><span class="phone-number"> 1900.6900</span>
    			</div>
    			<div class="col-md-3 color-2 p-4">
    				<h3 class="mb-4">Giờ mở cửa</h3>
    				<p class="openinghours d-flex">
    					<span>Thứ 2 - Thứ sáu</span>
    					<span>8:00 - 18:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Thứ bảy</span>
    					<span>8:30 - 17:30</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Chủ nhật</span>
    					<span>9:00 - 17:00</span>
    				</p>
    			</div>
    		 <div class="col-md-6 color-3 p-4">
            <h3 class="mb-2">Đặt lịch hẹn</h3>
            <form class="appointment-form" method="POST" action="dat_lich_kham_thuc_hien.php" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select id="select-box" class="form-control" name="txtCoso">
                      <div class="scrollbar" name="txtCoso">                       
                        <option value="" id="inputCoso">Cơ sở</option>
                        <option value="1" id="1" >CS1: Số 110-112 Bà Triệu, Hoàn Kiếm, Hà Nội</option>
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
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="icon"><span class="icon-user"></span></div>
                    <input type="text" class="form-control" id="inputHovaten" placeholder="Họ và tên" name="txtHovaten">

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="icon"><span class="icon-paper-plane"></span></div>
                    <input type="text" class="form-control" id="inputEEmail" placeholder="Email" name="txtEEmail">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="icon"><span class="ion-ios-calendar"></span></div>
                    <input type="text" " class="form-control " id="inputNgay" placeholder="yyyy/mm/dd" name="txtDate">

                  </div>  
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="icon"><span class="ion-ios-clock"></span></div>
                    <input type="text" class="form-control appointment_time" id="inputThoigian" placeholder="Thời gian" name="txtTime">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="icon"><span class="icon-phone2"></span></div>
                    <input type="text" class="form-control" id="inputSodt" placeholder="Số điện thoại" name="txtSodt">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" value="Đặt lịch hẹn" class="btn btn-primary">
              </div>
            </form> 
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Làm đẹp nụ cười – thay đổi cuộc sống</h2>
            <p>Khách hàng tới với Nha Khoa Phương Nam sẽ luôn được tận hưởng dịch vụ nha khoa 5 sao, chất lượng dịch vụ chuẩn Pháp – nơi được coi là cái nôi ngành nha khoa.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-tooth"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Bọc răng sứ</h3>
                <p>Đa dạng vật liệu sứ cao cấp, độ bền dài lâu, tự nhiên như răng thật</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-dental-care"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Tẩy trắng răng</h3>
                <p>An toàn, trắng sáng bật tông với công nghệ WhiteMax.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-tooth-with-braces"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Niềng răng - chỉnh nha</h3>
                <p>Chỉnh nha nhanh chóng, niềng răng chính xác, thời gian, kết quả điều trị rõ ràng.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-dental-care-1"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Trồng răng Implant</h3>
                <p>Cấy ghép răng Implant 4S – Giải pháp tối ưu khắc phục răng mất hoàn hảo.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
      <div class="container-wrap mt-5">
      	<div class="row d-flex no-gutters">
      		<div class="col-md-6 img" style="background-image: url(images/about-2.jpg);">
      		</div>
      		<div class="col-md-6 d-flex">
      			<div class="about-wrap">
      				<div class="heading-section heading-section-white mb-5 ftco-animate">
		            <h2 class="mb-2">Phương Nam Dentistry cam kết: </h2>
		          </div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>Đội ngũ bác sĩ giàu kinh nghiệm</h3>
	      					<p>Đội ngũ y bác sĩ 14 năm kinh nghiệm, các chuyên gia phẫu thuật hàm mặt và phẫu thuật trong miệng, có chứng chỉ chuyên sâu về implant, nha khoa thẩm mỹ trong nước và quốc tế.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>Hệ thống trang thiết bị đạt chuẩn quốc tế</h3>
	      					<p>Với mục tiêu mang đến cho khách hàng những dịch vụ y tế chất lượng cao, PHƯƠNG NAM DENTISTRY chú trọng đầu tư về hệ thống trang thiết bị y tế, cơ sở vật chất hiện đại. Phòng nội nha chuyên dụng riêng biệt, phòng phẫu thuật vô trùng tuyệt đối, đảm bảo an toàn.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>Ứng dụng công nghệ 3D thẩm mĩ răng hoàn hảo</h3>
	      					<p>Máy chụp phim CT Cone Beam công nghệ hiện đại, nhập khẩu từ Đức, cho kết quả đầy đủ và chính xác nhất, được đặt trong phòng riêng tại nha khoa, phục vụ tiện lợi cho khách hàng đến thăm khám.</p>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </section>

        <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Gặp gỡ bác sĩ nha khoa kinh nghiệm của chúng tôi</h2>
            <p>Đội ngũ bác sĩ Việt - Pháp uy tín</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
              <div class="img mb-4" style="background-image: url(images/bs1.jpg);"></div>
              <div class="info text-center">
                <h3><a href="teacher-single.html">PHILIPPE TAROT</a></h3>
                <span class="position">Cố vấn công nghệ cấp cao, Giáo sư- Bác sĩ</span>
                <div class="text">
                  <p>GS chuyên ngành RHM – ĐH Montpelier Pháp </p>
                  <ul class="ftco-social">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
              <div class="img mb-4" style="background-image: url(images/bs2.jpg);"></div>
              <div class="info text-center">
                <h3><a href="teacher-single.html">MRS. TIINA VATTO</a></h3>
                <span class="position">Cố vấn công nghệ cấp cao</span>
                <div class="text">
                  <p>Giám đốc phát triển ứng dụng lâm sàng, Mảng Công Nghệ chuẩn đoán hình ảnh nha khoa Kavo Global, Phần Lan.</p>
                  <ul class="ftco-social">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
              <div class="img mb-4" style="background-image: url(images/bs3.jpg);"></div>
              <div class="info text-center">
                <h3><a href="teacher-single.html">DR. SHERIF KANDIL</a></h3>
                <span class="position">Thạc sĩ- Bác sĩ</span>
                <div class="text">
                  <p>Người đồng sáng lập nên Hiệp hội chỉnh nha K – Line Đức</p>
                  <ul class="ftco-social">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
              <div class="img mb-4" style="background-image: url(images/bs4.jpg);"></div>
              <div class="info text-center">
                <h3><a href="teacher-single.html">ĐÀM NGỌC TRÂM</a></h3>
                <span class="position">Thạc sĩ- Bác sĩ</span>
                <div class="text">
                  <p>Thành viên Hiệp hội implant thế giới (ICOI: International Congress of Oral Implantologists)</p>
                  <ul class="ftco-social">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-3 aside-stretch py-5">
            <div class=" heading-section heading-section-white ftco-animate pr-md-4">
              <h2 class="mb-3">Thành tựu</h2>
              <p> Nha khoa Phương Nam tự hào là hệ thống chuỗi nha khoa tiêu chuẩn Pháp đầu tiên tại Việt Nam quy tụ đội ngũ bác sĩ – chuyên gia nha khoa hàng đầu, đồng thời luôn tiên phong trong việc ứng dụng công nghệ nha khoa tân tiến nhất trên thế giới.</p>
            </div>
          </div>
          <div class="col-md-9 py-5 pl-md-5">
            <div class="row">
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="20">0</strong>
                    <span>Năm kinh nghiệm</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="11">0</strong>
                    <span>Chi nhành toàn quốc</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="15000">0</strong>
                    <span>Nụ cười hài lòng mỗi năm</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="200000">0</strong>
                    <span>Khách hàng mỗi năm</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Giá cả hấp dẫn</h2>
            <p>Trải nghiệm công nghệ tân tiến, chi phi cực tốt</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <div class="pricing-entry pb-5 text-center">
              <div>
                <h3 class="mb-4">Nha khoa thẩm mỹ</h3>
                <p><span class="price">300.000VNĐ - 200.000.000VNĐ</span></p>
              </div>
              <ul>
                <li>Dịch vụ bọc răng sứ</li>
                <li>Dịch vụ chỉnh nha - Niềng răng</li>
                <li>Dịch vụ trồng răng Implant</li>
              </ul>
              <p class="button text-center"><a href="dich_vu_chi_tiet.php" class="btn btn-primary btn-outline-primary px-4 py-3">Chi tiết</a></p>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="pricing-entry pb-5 text-center">
              <div>
                <h3 class="mb-4">Nha khoa tổng quát</h3>
                <p><span class="price">100.000VNĐ - 5.000.000VNĐ</span> </p>
              </div>
              <ul>
                <li>Dịch vụ nhổ răng</li>
                <li>Dịch vụ khác</li>
                <li>Gói dịch vụ đặc biệt</li>
              </ul>
              <p class="button text-center"><a href="dich_vu_chi_tiet.php" class="btn btn-primary btn-outline-primary px-4 py-3">Chi tiết</a></p>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="pricing-entry active pb-5 text-center">
              <div>
                <h3 class="mb-4">Thẩm mĩ hàm mặt</h3>
                <p><span class="price">12.000.000VNĐ - 170.000.000VNĐ</span></p>
              </div>
              <ul>
                <li>Dịch vụ thẩm mĩ hàm</li>
                <li>Thiết kế nụ cười hoàn hảo</li>
                <li> _ </li>
              </ul>
              <p class="button text-center"><a href="dich_vu_chi_tiet.php" class="btn btn-primary btn-outline-primary px-4 py-3">Chi tiết</a></p>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="pricing-entry pb-5 text-center">
              <div>
                <h3 class="mb-4">Bệnh lý răng miệng</h3>
                <p><span class="price">100.000VNĐ - 6.000.000VNĐ</span></p>
              </div>
              <ul>
                <li>Bệnh lý răng miệng thường gặp</li>
                <li>Bệnh lý khác</li>
                <li> _ </li>
              </ul>
              <p class="button text-center"><a href="dich_vu_chi_tiet.php" class="btn btn-primary btn-outline-primary px-4 py-3">Chi tiết</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>    

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>ĐĂNG KÍ ĐỂ NHẬN TIN TỪ CHÚNG TÔI</h2>
              <p></p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Nhập email của bạn">
                      <input type="submit" value="Đăng kí" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Đánh giá</h2>
            <span class="subheading">Từ khách hàng yêu quý của chúng tôi</span>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/n2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">"Dịch vụ tại nha khoa rất hiện đại, nhân viên tận tình, chu đáo. Niềng răng được mọi người nói là rất đau và khó chịu vì có thêm vật lạ trong miệng nhưng làm tại đây mình cảm thấy cũng không hẳn như mọi người đã nói. Vì thế nếu muốn đi mọi người hãy đi niềng răng để đẹp hơn nhé."</p>
                    <p class="name">KH: Hải Vân</p>
                    <span class="position">Kế toán</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/n3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">"Tôi chưa đến 50 tuổi nhưng tình trạng răng bị mất ở cả 2 hàm, các răng xen kẽ và khập khiễng trong thời gian dài. Nhưng ekip bác sỹ nha khoa Phương Nam áp dụng kỹ thuật điều trị nha khoa tiên tiến nhất, phục hồi lại tình trạng tốt nhất cho tôi. Giờ tôi rất tự tin và ăn ngon miệng hơn sau khi có hàm răng mới."</p>
                    <p class="name">KH: Lê Chí Công</p>
                    <span class="position">Ông chủ xí nghiệp</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/n4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">"Tôi tự tin hơn cùng hàm răng mới trắng sáng, đều đẹp tăm tắp. Trước khi làm răng của tôi đã trong tình trạng bị ố vàng, nhiễm màu nặng. Điều này làm cho gương mặt mình tối hơn và dường như già hơn so với tuổi. Sau một quá trình thăm khám và sử dụng dịch vụ Răng sứ của Nha khoa Phương Nam tôi quyết định làm 16 răng sứ Bio Phương Nam. Và quyết định này chưa bao giờ khiến tôi thấy thất vọng."</p>
                    <p class="name">Ngô Bích Ngọc</p>
                    <span class="position">Nhân viên ngân hàng</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/nguoi1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">"Mình cảm thấy rất hài lòng về sự lựa chọn của mình. Niềng răng khay trong Invisalign không chỉ đem lại hiệu quả cao, tinh chỉnh dáng răng hoàn hảo mà còn rất tiện lợi, dễ dàng tháo lắp, không hề đau đớn trong quá trình niềng răng và đặc biệt, không gây mất thẩm mỹ khuôn mặt, mình vẫn thoải mái giao tiếp trong cuộc việc và cuộc sống."</p>
                    <p class="name">KH: Nhữ Ngọc Nguyên Trực</p>
                    <span class="position">Thầy giáo</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/n5.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">"Mình bị mất 1 răng cửa nên luôn cảm thấy e ngại khi giao tiếp. Đến với nha khoa Phương Nam, các bác sĩ đã tiến hành cấy 1 trụ implant Dentium đồng thời ghép xương để đảm bảo trụ được bền lâu. Kết quả mình vô cùng hài lòng về chất lượng và cả thẩm mỹ nữa."</p>
                    <p class="name">KH: Nguyễn Đình Đức Việt</p>
                    <span class="position">Chuyên viên phân tích hệ thống</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Kiến thức</h2>
            <p>Kiến thức nha khoa tổng hợp được tư vấn bởi chuyên gia</p>
          </div>
        </div>
      <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                  <h3 class="heading"><a href="#">CẤY GHÉP IMPLANT LÀ GÌ?</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="taytrang.php" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                  <h3 class="heading"><a href="#">TẨY TRẮNG RĂNG CÓ HIỆU QUẢ KHÔNG?</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="dan_rang.php" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
                  <h3 class="heading"><a href="#">KỸ THUẬT DÁN RĂNG SỨ VENEER</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-quote">
      <div class="container">
        <div class="row">
          <div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
            <div class="heading-section heading-section-white mb-5 ftco-animate">
              <h2 class="mb-2">Nha khoa PHƯƠNG NAM DENTISTRY hướng đến những giá trị mang tới trải nghiệm tốt nhất cho khách hàng:</h2>
            </div>
            <div class="ftco-animate">
              <ul class="un-styled my-5">
                <li><span class="icon-check"></span>Mang đến một địa chỉ chăm sóc sức khỏe răng miệng uy tín, chất lượng cao, khắc phục mọi vấn đề của hàm răng bằng công nghệ hiện đại</li>
                <li><span class="icon-check"></span>Lấy chất lượng và sự hài lòng của khách hàng làm trọng tâm cho mọi chiến lược phát triển.</li>
                <li><span class="icon-check"></span>Đáp ứng được những yếu tố tối quan trọng: Kết quả thẩm mỹ như mong muốn và đặc biệt mang lại cảm giác ăn nhai như răng thật, duy trì bền vững cùng thời gian</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 py-5 pl-md-5">
            <div class="heading-section mb-5 ftco-animate">
              <h2 class="mb-2">Đăng Kí Tư Vấn Miễn Phí</h2>
            </div>
            <form method="POST" action="lien_he_thuc_hien.php" >
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputHoten" name = "txtHoten" placeholder="Họ tên" required data-error="Xin hãy nhập tên của bạn">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email" name = "txtEmail"/>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputSDT" placeholder="Số điện thoại" name = "txtSDT"/>
                    </div>
                    <div class="form-group">
                      <textarea name="txtNoidung" id="inputNoidung" cols="30" rows="7" class="form-control" placeholder="Nội dung tư vấn"></textarea>
                    </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="submit" value="Đăng kí" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

	<div id="map"></div>
  <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Phương Nam Dentistry</h2>
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
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Giới thiệu</a></li>
                <li><a href="#" class="py-2 d-block">Nổi bật</a></li>
                <li><a href="#" class="py-2 d-block">Dự án</a></li>
                <li><a href="#" class="py-2 d-block">Tin tức</a></li>
                <li><a href="#" class="py-2 d-block">Liên hệ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Bài viết gần đây</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                 <div class="text">
                  <h3 class="heading"><a href="#">Cấy ghép Implant là gì?</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Tẩy trắng răng có hiệu quả không?</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Cơ sở</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">
                  Cơ sở Việt Nam: Hà Nội - Hải Phòng - Vinh - Đà Nẵng - TP.HCM - Quảng Ninh - Bình Dương
                  </span></li>
                  <li><span class="icon icon-map-marker"></span><span class="text">
                  Đối tác Pháp: Cabinet Dentaire Philippe Tarot - 9 Rue Rempart de l'Oulle, 84000 Avignon, France
                  </span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">0943.776.699</span></a></li>
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
              <input type="submit" value="Đặt lịch khám" class="btn btn-primary">
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
    
  </body>
</html>
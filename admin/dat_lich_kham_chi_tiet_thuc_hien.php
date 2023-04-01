<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cập nhật thông tin khách hàng đặt lịch khám</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn lấy, thêm, sửa, xóa DỮ LIỆU
             include("../config.php");

            // 2. Viết câu lệnh truy vấn để sửa dữ liệu trong bảng TIN TỨC trong CSDL
            $id_dat_lich = $_POST['txtID'];
            $id_co_so = $_POST['txtCoso'];
            $ho_ten = $_POST['txtHoten'];
            $sđt = $_POST['txtSDT'];            
            $email = $_POST['txtEmail'];
            $ngay = $_POST['txtNgay'];
            $thoi_gian = $_POST['txtThoigian'];

            
                $sql = "
                    UPDATE `tbl_dat_lich` 
                    SET `id_co_so` = '".$id_co_so."', `ho_ten` = '".$ho_ten."', `email` = '".$email."', `sđt` = '".$sđt."', `ngay` = '".$ngay."', `thoi_gian` = '".$thoi_gian."' 
                    WHERE `tbl_dat_lich`.`id_dat_lich` = '".$id_dat_lich."'";

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $dat_lich = mysqli_query($ket_noi, $sql);

            // 4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    //window.alert('Bạn đã cập nhật bài viết thành công');
                    window.location.href='dat_lich_kham.php';
                </script>
            ";

        ;?>

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cập nhật thông tin khách hàng</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn lấy, thêm, sửa, xóa DỮ LIỆU
             include("../config.php");

            // 2. Viết câu lệnh truy vấn để sửa dữ liệu trong bảng TIN TỨC trong CSDL
            
            $ten = $_POST['txtHoten'];
            $dienthoai = $_POST['txtSDT'];
            $ngay_sinh = $_POST['txtNgaysinh'];
            $gioi_tinh_kh = $_POST['txtGioitinh'];
            $dc_email = $_POST['txtEmail'];
           
            
                $sql = "
                    INSERT INTO `tbl_khach_hang` (`id_khach_hang`, `ten`, `gioi_tinh_kh`, `ngay_sinh`, `dienthoai`, `dc_email`) 
                    VALUES (NULL, '".$ten."', '".$gioi_tinh_kh."', '".$ngay_sinh."', '".$dienthoai."', '".$dc_email."')";

                    

                


            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $khach_hang = mysqli_query($ket_noi, $sql);

            // 4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm mới thông tin khách hàng thành công');
                    window.location.href='khach_hang.php';
                </script>
            ";

        ;?>

    </body>
</html>
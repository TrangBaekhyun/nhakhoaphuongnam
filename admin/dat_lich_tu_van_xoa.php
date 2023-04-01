
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Xóa khách hàng</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn lấy, thêm, sửa, xóa DỮ LIỆU
            include("../config.php");

            // 2. Viết câu lệnh truy vấn để xóa dữ liệu trong bảng TIN TỨC trong CSDL
            $id_lien_he = $_GET["id"];

            $sql = "DELETE FROM `tbl_lien_he` WHERE `tbl_lien_he`.`id_lien_he` = '".$id_lien_he."'";

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $lien_he = mysqli_query($ket_noi, $sql);

            // 4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã xóa bản ghi thành công');
                    window.location.href='dat_lich_tu_van.php';
                </script>
            ";

        ;?>

    </body>
</html>
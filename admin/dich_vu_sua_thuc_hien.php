<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cập nhật dịch vụ</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
                <?php
                //1. Ket noi
                $ket_noi = mysqli_connect("localhost", "root","", "nhakhoaphuongnam_db");
                //2.Lấy ra dữ liệu đăng tin
                $id_dich_vu = $_POST["txtID"];
                $ten_dich_vu = $_POST["txtTenDichVu"];
                $don_vi = $_POST["txtDonVi"];
                $chi_phi = $_POST["txtChiPhi"];

                //3.Truy van thêm mới du lieu vào bảng tin tức trong CSDL
                $sql= "
                       UPDATE `tbl_dich_vu` 
                       SET `ten_dich_vu` = '".$ten_dich_vu." ', `don_vi` = '".$don_vi."', `chi_phi` = '".$chi_phi."' WHERE `tbl_dich_vu`.`id_dich_vu` = '".$id_dich_vu."';
                    ";
              
                //4. Hien thi câu lệnh truy vấn trả vè dữ liệu mới thêm
                $dich_vu = mysqli_query($ket_noi, $sql);

                //5. Hiển thị thông báo thêm mới thành công
                echo " <script typ e='text/javascript'>
                window.alert('Bạn đã cập nhật dịch vụ thành công!'); 
                </script>" ;
                echo " <script type='text/javascript'>
                window.location.href = 'dich_vu.php';
                </script>" ;
                ;?>
    </body>
</html>

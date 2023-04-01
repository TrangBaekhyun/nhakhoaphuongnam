<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thêm mới cơ sở</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
                <?php
                //1. Ket noi
                $ket_noi = mysqli_connect("localhost", "root","", "nhakhoaphuongnam_db");
                //2.Lấy ra dữ liệu đăng tin
                $dia_chi = $_POST["txtDiaChi"];

                //3.Truy van thêm mới du lieu vào bảng tin tức trong CSDL
                 $sql= "
                        INSERT INTO `tbl_co_so` (`id_co_so`, `dia_chi`) 
                        VALUES (NULL, '".$dia_chi."');
                        ";
                //4. Hien thi câu lệnh truy vấn trả vè dữ liệu mới thêm
                $co_so = mysqli_query($ket_noi, $sql);

                //5. Hiển thị thông báo thêm mới thành công
                echo " <script typ e='text/javascript'>
                window.alert('Bạn đã thêm mới cơ sở thành công!'); 
                </script>" ;
                echo " <script type='text/javascript'>
                window.location.href = 'co_so.php';
                </script>";
                ;?>
    </body>
</html>

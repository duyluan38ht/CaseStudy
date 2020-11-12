<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quản lý Khách Sạn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    <link rel="stylesheet" href="../css/css.css">-->
</head>
<body>
<div class="contailer">
    <div class="header">
        <h1>Khách Sạn Ngàn Sao</h1>
        <p>Đặt phòng-quản lý</p>
    </div>
    <div class="topnav">
        <a href="#">Danh Sách Phòng</a>
        <a href="#">Dịch Vụ</a>
        <a href="#">Giới Thiệu</a>
        <a href="#" style="float:right">Đăng ký</a>
    </div>

    <div class="row">
        <div class="leftcolumn">

            <div>
                <table>
                    <?php foreach ($room as $key => $value): ?>
                        <td style="<?php if ($value->getStatus() == "Trống"): ?>
                                background: #007bff;
                        <?php else: ?>
                                background: #dc0d78;
                        <?php endif; ?>">
                            <?php echo $value->getRoomName(); ?></br>
                            </br>
                            <?php echo $value->getStatus(); ?></br>
                            <a href="index.php?page=bookRoom&id=<?php echo $value->getRoomCode(); ?>"
                               style="font-size: 10px;text-decoration: none; background: white;border-radius: 2px">Đặt
                                phòng</a><br>

                            <a href="index.php?page=checkRoom&id=<?php foreach ($order as $key => $value): ?><?php echo $value->getOrderCode(); ?><?php endforeach; ?>"
                               style="font-size: 10px;text-decoration: none; background: white;border-radius: 2px">Trả
                                Phòng</a>

                        </td>
                    <?php endforeach; ?>
                </table>

            </div>

        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>Giới thiệu</h2>
                <div class="fakeimg" style="height:411px;"></div>
                <p></p>
            </div>

        </div>
    </div>
</div>

<div class="footer">
    <h4>Khách Sạn Ngàn</h4>
    <p>Lien he: 098888 888</p>
</div>
</div>
<style>

    * {
        box-sizing: border-box;
    }

    .contailer {
        width: 100%;
        height: auto;
    }

    body {
        font-family: Arial;
        padding: 10px;
        background: #e9d8f4;
    }

    /* Header/Blog Title */
    .header {
        padding: 10px;
        text-align: center;
        background: white;
        color: #58257b;
    }

    .header h1 {
        font-size: 40px;
    }

    .header p {
        font-size: 20px;
    }

    /* Style the top navigation bar */
    .topnav {
        overflow: hidden;
        background-color: #58257b;
    }

    /* Định dạng link điều hướng */
    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* Thay đổi màu liên kết khi di chuột qua */
    .topnav a:hover {
        background-color: #db7093;
        color: white;
    }

    /* Tạo hai cột không bằng nhau, float cạnh nhau */
    /* Cột trái */
    .leftcolumn {
        float: left;
        width: 75%;
    }

    /* Cột phải */
    .rightcolumn {
        float: left;
        width: 25%;
        background-color: #e9d8f4;
        padding-left: 20px;
    }

    /* Hình ảnh tượng trưng */
    .fakeimg {
        background-color: #baa1cc;
        width: 100%;
        padding: 20px;
    }

    /* Thêm định dạng thẻ cho bài viết */
    .card {
        background-color: white;
        padding: 10px;
        margin-top: 10px;
    }

    /* Clear float khác sau các cột */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Footer */
    .footer {
        padding: 10px;
        text-align: center;
        background: white;
        margin-top: 10px;
    }

    /* Bố cục linh hoạt: các cột xếp chồng lên nhau thay vì cạnh nhau khi màn hình
    có chiều rộng dưới 700px */
    @media screen and (max-width: 700px) {
        .leftcolumn, .rightcolumn {
            width: 100%;
            padding: 0;
        }
    }

    /* Bố cục linh hoạt: Thanh menu điều hướng xếp chồng lên nhau thay vì cạnh nhau
    khi màn hình có chiều rộng dưới 300px  */
    @media screen and (max-width: 300px) {
        .topnav a {
            float: none;
            width: 100%;
        }

    }

    .row {
        margin-top: 10px;
    }

    .room tr, td {
        width: 400px;
        height: 200px;
        background-color: #0db9ea;
        -moz-border-radius: 10px;
        -webkit-border-radius: 20px;
        border-radius: 10px;
        text-align: center;
        color: white;
        padding: 50px;
        font-size: 30px;
        /*border-collapse: separate;*/
        /*border-spacing: 50px 0;*/
        /*word-break:break-all*/

    }

</style>

</body>
</html>
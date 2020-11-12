<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fa fa-home"></i>
                    Trang Chủ
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    </i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container" style="width: 60%">
<form class="text-center border border-light p-5" method="post">

    <p class="h4 mb-4">Chi Tiết Phòng</p>


    <input type="text" name="roomName" id="defaultContactFormName" class="form-control mb-4" value="<?php echo $room->getRoomName(); ?>" style="text-align: center" placeholder="Tên Phòng">
    <input type="text" name="roomType" id="defaultContactFormEmail" class="form-control mb-4" value="<?php echo $room->getRoomType(); ?>" style="text-align: center"placeholder="Loại Phòng">
    <input type="text" name="roomPrice" id="defaultContactFormEmail" class="form-control mb-4" value="<?php echo $room->getRoomPrice(); ?>" style="text-align: center" placeholder="Giá Phòng">
    <input type="text" name="customerName" id="defaultContactFormEmail" class="form-control mb-4" value="<?php echo $room->getCustomerName(); ?>" style="text-align: center" placeholder="Tên Khách Hàng">
    <input type="text" name="CMND" id="defaultContactFormEmail" class="form-control mb-4" value="<?php echo $room->getCMND(); ?>" style="text-align: center" placeholder="Số chứng minh thư">
    <input type="datetime-local" name="dayIn" id="defaultContactFormEmail" class="form-control mb-4" value="<?php echo $room->getDayIn(); ?>" style="text-align: center" placeholder="Ngày và giờ vào">
    <input type="text" name="note" id="defaultContactFormEmail" class="form-control mb-4" value="<?php echo $room->getNote(); ?>" style="text-align: center" placeholder="Note">



    <label>TRẠNG THÁI PHÒNG</label>
    <select class="browser-default custom-select mb-4" name="status" style="text-align: center">
        <option  selected>Có khách</option>
        <option  selected>Trống</option>
        <option  selected>Đang dọn phòng</option>
    </select>




    <button class="btn btn-info btn-block" type="submit" class="btn btn-danger" onclick="return confirm('Bạn chắc chứ?')">Đặt Phòng</button>
    <a class="btn btn-info btn-block" href="index.php?page=delete&id=<?php echo $room->getRoomCode() ?>" class="btn btn-danger" onclick="return confirm('Bạn chắc chứ?')">Tra phong</a>

</form>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;1,500&display=swap" rel="stylesheet" />
</head>
<style>
    .cungloai {
        margin-top: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .cungloai .cungloai-title {
        background-color: var(--primary-color);
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .cungloai .cungloai-title h3 {
        color: #fff;
        font-size: 25px;
        padding: 5px;
    }

    .cungloai .cungloai_content {
        padding: 30px;
        /* display: flex; */
    }

    .cungloai .cungloai_content .cungloai-items {
        display: flex;
        align-items: center;
        gap: 40px;
        border-bottom: 1px solid #ccc;
        padding: 5px;
        margin-bottom: 10px;
    }

    .cungloai .cungloai_content .cungloai-items img {
        width: 100px;
    }

    .formds_loai table td {
        /* padding: 10px 20px; */
        /* border:1px #ccc solid; */
        text-align: center;
        /* font-weight: bold; */
        /* padding:30px; */
    }

    .conment-list {
        margin-bottom: 20px;
        padding: 20px 0;
        border-bottom: 1px solid #ccc;
    }

    .box_items .box_items_img img {
        height: 200px;
        width: 80%;
        object-fit: cover;
    }
</style>

<body>
    <div class="web">
        <header class="header">
            <div class="container">
                <div class="nav-bar flex">
                    <div class="header-logo">
                        <a href="index.php">
                            <img src="img/logo1.png" alt="" width="200px" />
                        </a>
                    </div>
                    <div class="header-menu">
                        <ul class="nav flex">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                            <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                            <li><a href="index.php?act=gopy">Góp ý</a></li>
                            <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                        </ul>
                    </div>
                    <div class="header-search">
                        <form action="index.php?act=sanpham" method="POST">
                            <input type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm" />
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i></a>
                        </form>
                    </div>
                    <div class="header-info">

                    </div>
                </div>
            </div>
        </header>
        <!-- end header  -->
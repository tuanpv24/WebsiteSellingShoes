<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
include "../../model/taikhoan.php";


$idpro = $_REQUEST['idpro'];

$dsbl = loadAll_binhLuan($idpro);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .comment table {
            width: 100%;
            margin-left: 5%;
        }

        .comment table td:nth-child(1) {
            width: 50%;
        }

        .comment table td:nth-child(2) {
            width: 20%;
        }

        .comment table td:nth-child(3) {
            width: 30%;
        }
    </style>
</head>

<body>
    <div class="row mb">

        <div class="comment-title">
            <h3>Bình luận</h3>
        </div>
        <div class="comment-content">

            <?php foreach ($dsbl as $binhluan) : ?>
                <div class="conment-list">

                    <div class="comment-user">
                        <div class="user-icon"><i class="fa-solid fa-user-tie"></i></div>

                        <div class="user-infor">
                            <p><?= $binhluan['iduser'] ?></p>
                            <span><?= $binhluan['ngaybinhluan'] ?></span>
                        </div>
                    </div>
                    <div class="cmt">
                        <p><?= $binhluan['noidung'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>


            <div class="submit-cmt">
                <form action="<?php if (isset($_SESSION['user'])) {
                                    echo $_SERVER['PHP_SELF'];
                                } else {
                                    echo "";
                                } ?>" method="POST">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>" />
                    <input class="btn4" type="text" name="noidung" />
                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>
                        <input class="btn3" type="submit" name="guibinhluan" value="Gửi bình luận " />
                    <?php } else { ?>
                        <input type="submit" class="btn3" onclick="return alert('Bạn chưa đăng nhập')" name="guibinhluan" value="Gửi bình luận">
                    <?php } ?>
                </form>
            </div>
            <?php

            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                $noidung = $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['id'];
                $ngaybinhluan = date('h:i:sa d/m/Y');
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
            ?>

        </div>
        <!--  -->
</body>

</html>
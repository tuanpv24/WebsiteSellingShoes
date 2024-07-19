<div class="form">
    <form action="index.php?act=quenmk" method="post" enctype="multipart/form-data" class="login2">
        <h2>Quên mật khẩu</h2>
        <label for="">Nhập lại email</label><br />
        <input type="email" name="email" placeholder="Nhập email" /><br />

        <div class="sub">
            <!-- <button class="submit-login" type="submit" name="guiemail">
                Xác nhận
            </button> -->
            <input type="submit" value="Xác nhận" name="guiemail" class="btn">
            <div class="sub-2">
                <!-- <a href="#" class="forget">Quên mật khẩu</a> -->
                <a href="index.php" class="account">Quay lại ?</a>
            </div>

        </div>
        <p class="thongbao" style="color: red">

            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </p>
    </form>
</div>
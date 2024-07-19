<div class="container">
    <main class="main">
        <div class="box-left">

            <h2 class="items-title">Sản phẩm <strong style="color: "><?php echo $tendm ?></strong></h2>
            <!-- <div class="line"></div> -->
            <div class="items">
                <?php
                // $i=0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $img_path . $img;
                    // $if()
                    echo '
                        <div class="box_items">
                        <div class="box_items_img">
                            <img src="' . $hinh . '" alt="" />
                        </div>
                        <a href="' . $linksp . '">' . $name . '</a>
                        <div class="price">
                            <div class="price-new">
                            <p>' . number_format($price, 0, ',', ',') . ' đ</p>

                            </div>
                            <div class="price-old">
                                <del>1,900,000đ</del>
                            </div>
                        </div>
                        <button class="btn">Add to card</button>
                    </div>
                        ';
                }
                ?>

            </div>
        </div>
        <!-- end boxleft  -->
        <div class="box-right">
            <?php
            include "boxright.php";
            ?>
        </div>
        <!-- endboxright -->
    </main>
    <div class="about">
        <div class="desc">
            <span>Về chúng tôi</span>
            <h3>Pham Tuan Shoes</h3>
            <p>
                Tiền nhiệm là phamtuanshoes.com™ - Shop Uy tín lâu năm chuyên cung
                cấp giày thể thao sneaker nam, nữ hàng Replica 1:1 - Like Auth với
                chất lượng khác biệt so với thị trường và giá tốt nhất. Shop có
                sẵn hàng tại 2 cơ sở Hà Nội, tp HCM. Giao hàng nhanh toàn quốc,
                đổi trả, bảo hành linh hoạt.
            </p>
            <p>
                Bạn không đủ hầu bao để mua 1 đôi Chính Hãng? Hay bạn order quá
                lâu cũng như size của mình đã Sold Out? Bạn đang cần tìm các mẫu
                Sneaker với mong muốn chất lượng, detail chuẩn hàng Auth? Roll
                Sneaker sẽ giải quyết hết thắc mắc của bạn với chất lượng cực kỳ
                khác biệt, đa dạng mẫu mã, có sẵn hàng. Liên tục cập nhật, update,
                fix các phiên bản tiệm cận hàng Auth nhất. Các bạn có thể yên tâm
                lựa chọn trong một thị trường rất hỗn loạn về chất lượng, cũng như
                định nghĩa chuẩn về Giày Replica - Like Auth.
            </p>
        </div>
        <div class="about-img">
            <img src="./img/about.jpg" alt="" />
        </div>
    </div>
</div>
<!--  -->
<div class="container">
    <main class="main"></main>
    <div class="box-left">
        <div class="container">
            <div class="detail">
                <h2 class="items-title">Chi tiết sản phẩm</h2>
                <div class="product-details">
                    <?php
                    extract($onesp);
                    $img = $img_path . $img;
                    echo '
                <div class="details-content">
              <div class="details-img">
                <img src="' . $img . '" alt="" />
              </div>
              <div class="details-infor">
                <h3>' . $name . '</h3>
                <div class="details-price">
                  <div class="details-price-new">
                    <p>' . number_format($price, 0, ',', ',') . ' đ</p>
                  </div>
                  <div class="details-price-old">
                    <del>1,200,000đ</del>
                  </div>
                </div>
                <div class="details-size">
                  <h4>Size :</h4>
                  <div class="size">34</div>
                  <div class="size">35</div>
                  <div class="size">36</div>
                  <div class="size">37</div>
                  <div class="size">38</div>
                  <div class="size">39</div>
                  <div class="size">40</div>
                  <div class="size">41</div>
                  <div class="size">42</div>
                  <div class="size">43</div>
                  <div class="size">44</div>
                  <div class="size">45</div>
                  <div class="size">45</div>
                </div>
                <div class="details-btn">
                  <button class="btn">Add to card</button>
                  <button class="btn1">Buy now</button>
                </div>
              </div>
            </div>
            </div>
            </div>
            <div class="describe">
                <h3>Mô tả :</h3>
                <p>
                    ' . $mota . '
                </p>
            </div>
            ';
                    ?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $(".comment").load("view/binhluan/commentForm.php", {
                                idpro: <?= $id ?>
                            });
                        });
                    </script>
                    <div class="comment">

                    </div>
                    <div class="cungloai">
                        <div class="cungloai-title">
                            <h3>Sản phẩm cùng loại</h3>
                        </div>
                        <div class="cungloai_content">
                            <?php
                            foreach ($sp_cung_loai as $sp_cung_loai) {
                                extract($sp_cung_loai);
                                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                $img = $img_path . $img;

                                echo '
                                    <div class="cungloai-items">
                                <img src="' . $img . '" alt="" />
                                <a href="' . $linksp . '">' . $name . '</a>
                            </div>
                                    ';
                            }
                            ?>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

        </main>

    </div>
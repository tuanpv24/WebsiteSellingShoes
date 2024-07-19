<div class="add">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI TÀI KHOẢN</h1>
    </div>
    <div class="row2 form_content">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>

                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&idsp=" . $id;
                        $xoatk = "index.php?act=xoatk&idsp=" . $id;
                        echo '
                            <tr>
                            <td><input type="checkbox" name="" id="" /></td>
                            <td>' . $id . '</td>
                            <td>' . $user . '</td>
                            <td>' . $pass . '</td>
                            <td>' . $email . '</td>
                            <td>' . $address . '</td>
                            <td>' . $tel . '</td>
                            <td>' . $role . '</td>
                            <td>
                                <a href="' . $suatk . '">         
                                <input type="button" value="Sửa" />
                                </a>
                                <a href="' . $xoatk . '">         
                                <input type="button" value="Xóa" />
                                </a>
                                
                            </td>
                        </tr>
                            ';
                    }
                    ?>
                    <!-- <tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>001</td>
                        <td>Đồng hồ</td>
                        <td>
                            <input type="button" value="Sửa" />
                            <input type="button" value="Xóa" />
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>001</td>
                        <td>Đồng hồ</td>
                        <td>
                            <input type="button" value="Sửa" />
                            <input type="button" value="Xóa" />
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>001</td>
                        <td>Đồng hồ</td>
                        <td>
                            <input type="button" value="Sửa" />
                            <input type="button" value="Xóa" />
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>001</td>
                        <td>Đồng hồ</td>
                        <td>
                            <input type="button" value="Sửa" />
                            <input type="button" value="Xóa" />
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>001</td>
                        <td>Đồng hồ</td>
                        <td>
                            <input type="button" value="Sửa" />
                            <input type="button" value="Xóa" />
                        </td>
                    </tr> -->
                </table>
            </div>
            <div class="row mb10">
                <input class="btns" type="button" value="CHỌN TẤT CẢ" />
                <input class="btns" type="button" value="BỎ CHỌN TẤT CẢ" />
                <input class="btns" type="button" value="XÓA CHỌN TẤT CẢ" />
                <a href="index.php?act=adddm">
                    <input class="btns" type="button" value="NHẬP THÊM" /></a>
            </div>
        </form>
    </div>
</div>
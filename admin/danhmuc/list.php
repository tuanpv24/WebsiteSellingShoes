<div class="add">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>

                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=" . $id;
                        $xoadm = "index.php?act=xoadm&id=" . $id;

                        echo '
                            <tr>
                            <td><input type="checkbox" name="" id="" /></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            
                            <td>
                                <a href="' . $suadm . '">         
                                <input type="button" value="Sửa" />
                                </a>
                                <a href="' . $xoadm . '">         
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
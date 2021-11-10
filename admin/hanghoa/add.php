<div class="layout-right">
<div class="right-top">
            <div class="website-title">Trang quản trị websitie</div>
            <div class="admin-info">
              <div class="admin-name">ADMIN</div>
              <div class="admin-img">
                <img src="../content/images/home/support-online.jpg" alt="">
              </div>
            </div>
          </div>

<div class="right-bgc">
            <div class="layout-function">
            <?php
              
                if(isset($thongbao) && ($thongbao != "")) {
                echo ' <div class="thongbao"><i class="far fa-check-circle"></i> '.$thongbao.'</div>';
                }
            
            ?>
              <div class="function-title">Thêm sản phẩm</div>
              
            <div class="form-funtcion">
                <form action="index.php?act=addhh" method="post" class="form-add--product" enctype="multipart/form-data">
                    <label for="tensp">Tên sản phẩm</label>
                    <input type="text" name="tensp" id="tensp">
                    <label for="danhmuc">Danh mục sản phẩm</label>
                    <select name="danhmuc" id="danhmuc">
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$ma_danhmuc.'">'.$ten_danhmuc.'</option>';
                            }
                        ?>
                    </select>
                    <label for="hinh">Hình sản phẩm</label>
                    <input type="file" name="anhsp" id="hinh">
                    <label for="dongia">Giá sản phẩm</label>
                    <input type="text" name="dongia" id="dongia">
                    <label for="giamgia">Giảm giá ( tính theo % )</label>
                    <input type="text" name="giamgia" id="giamgia">
                    <label for="mota">Mô tả</label>
                    <textarea name="mota" id="mota" cols="30" rows="8"></textarea>
                    <!-- <input type="submit" name="themmoi" value="Thêm sản phẩm" > -->
                    <button type="submit" name="themmoi">Thêm sản phẩm</button>
                    <button type="reset">Nhập lại</button>
                    <button> <a href="index.php?act=listhh"> Danh sách </a></button>
                </form>
            </div>

            </div>
          </div>

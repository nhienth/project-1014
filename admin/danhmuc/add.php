 

<div class="layout-right">
<div class="right-top">
            <div class="website-title">Trang quản trị websitie</div>
            <div class="admin-info">
              <div class="admin-name">ADMIN</div>
              <div class="admin-img">
                <img src="../content/images/home/ec9a4c0a7f3aea8a819354a0933540ad.jpg" alt="">
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
              <div class="function-title">Thêm danh mục hàng hóa</div>
              
            <div class="form-funtcion">
                <form action="index.php?act=adddm" method="post" class="form-add--product">
                    <label for="">Mã danh mục</label>
                    <input type="text" disabled placeholder="AUTO NUMBER" >
                    <label for="">Tên danh mục</label>
                    <input type="text" name="tenloai" id="">
                    <!-- <button type="submit" name="themmoi" value="Thêm danh mục"> -->
                    <button type="submit" name="themmoi"> Thêm danh mục</button>
                    <button type="reset">Nhập lại</button>
                    <button> <a href="index.php?act=listdm"> Danh sách </a></button>
                </form>
            </div>

            </div>
          </div>

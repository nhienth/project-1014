<?php

$countPro = countAll_hanghoa();
$countCate = countAll_danhmuc();
$countAcc = countAll_khachhang();
$coungNew = countAll_tintuc();
$countCMT = countAll_binhluan();
$countBill = countAll_hoadon();

?>

<div class="layout-right">
          <div class="right-top">
            <div class="website-title">Trang quản trị websitie</div>
            <div class="admin-info">
              <?php 
                  if(isset($_SESSION['user'])) {
                    $hinh = $_SESSION['user']['hinh'];
                    echo '
                    <div class="admin-name">'.$_SESSION['user']['ten_dangnhap'].'</div>
                    <div class="admin-img"><img src="../uploads/'.$hinh.'"></div>
                    ';
                  }
              ?>
            </div>
          </div>
          <div class="right-bgc">
            <div class="right-main">
              <div class="right-main--boxed">
                <div class="main-boxed--content">
                  <div class="boxed-content--txt">Tài khoản</div>
                  <div class="boxed-content--count"><?=$countAcc?></div>
                </div>
                <div class="main-boxed--icon">
                  <i class="fas fa-user-circle"></i>
                </div>
              </div>

              <div class="right-main--boxed">
                <div class="main-boxed--content">
                  <div class="boxed-content--txt">Danh mục</div>
                  <div class="boxed-content--count"><?=$countCate?></div>
                </div>
                <div class="main-boxed--icon">
                  <i class="fas fa-copyright"></i>
                </div>
              </div>

              <div class="right-main--boxed">
                <div class="main-boxed--content">
                  <div class="boxed-content--txt">Sản phẩm</div>
                  <div class="boxed-content--count"><?=$countPro?></div>
                </div>
                <div class="main-boxed--icon">
                  <i class="fas fa-volleyball-ball"></i>
                </div>
              </div>

              <div class="right-main--boxed">
                <div class="main-boxed--content">
                  <div class="boxed-content--txt">Đơn hàng</div>
                  <div class="boxed-content--count"><?=$countBill?></div>
                </div>
                <div class="main-boxed--icon">
                  <i class="fas fa-people-carry"></i>
                </div>
              </div>

              <div class="right-main--boxed">
                <div class="main-boxed--content">
                  <div class="boxed-content--txt">Tin tức</div>
                  <div class="boxed-content--count"><?=$coungNew?></div>
                </div>
                <div class="main-boxed--icon">
                  <i class="fas fa-newspaper"></i>
                </div>
              </div>

              <div class="right-main--boxed">
                <div class="main-boxed--content">
                  <div class="boxed-content--txt">Bình luận</div>
                  <div class="boxed-content--count"><?=$countCMT?></div>
                </div>
                <div class="main-boxed--icon">
                  <i class="fas fa-comment-alt"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
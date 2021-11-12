<?php

function insert_hanghoa($tensp, $dongia, $giamgia, $hinh, $danhmuc, $ngaynhap, $mota) {
    $sql = "INSERT INTO hang_hoa(ten_hanghoa, don_gia, giam_gia, hinh, ma_danhmuc, ngay_nhap, mo_ta) VALUES('$tensp','$dongia','$giamgia','$hinh','$danhmuc','$ngaynhap','$mota')";
    pdo_execute($sql);
}

function loadAll_hanghoa(){
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hanghoa DESC";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}

function loadWhere_hanghoa($kyw, $ma_danhmuc) {
    $sql = "SELECT * FROM hang_hoa WHERE 1";
    if($kyw!="") {
        $sql.=" AND ten_hanghoa LIKE '%".$kyw."%' ";
    }
    if($ma_danhmuc>0) {
        $sql.=" AND ma_danhmuc = '".$ma_danhmuc."' ";
    }
    $sql.= " ORDER BY ma_hanghoa DESC";
    $listhoanghoa = pdo_query($sql);
    return $listhoanghoa;
}

function loadNew_hanghoa() {
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hanghoa DESC LIMIT 6";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}

function loadGiay_hanghoa() {
    $sql = "SELECT * FROM hang_hoa WHERE ma_danhmuc = 37 ORDER BY ma_hanghoa DESC LIMIT 6";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}

function loadAo_hanghoa() {
    $sql = "SELECT * FROM hang_hoa WHERE ma_danhmuc = 36 ORDER BY ma_hanghoa DESC LIMIT 6";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}

function loadPhuKien_hanghoa() {
    $sql = "SELECT * FROM hang_hoa WHERE ma_danhmuc = 35 ORDER BY ma_hanghoa DESC LIMIT 6";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}

function loadLuuNiem_hanghoa() {
    $sql = "SELECT * FROM hang_hoa WHERE ma_danhmuc = 34 ORDER BY ma_hanghoa DESC LIMIT 6";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}

function loadOne_hanghoa($ma_hanghoa){
    $sql ="SELECT * FROM hang_hoa WHERE ma_hanghoa=".$ma_hanghoa;
    $hanghoa = pdo_query_one($sql);
    return $hanghoa;
}

function  insertSL_hanghoa($masp, $size, $so_luong){
    $sql = "INSERT INTO model_hang_hoa(ma_hanghoa, size, so_luong) VALUES ('$masp','$size','$so_luong')";
    pdo_execute($sql);
}

function loadSP_by_ID($ma_hanghoa){
    $sql = "SELECT * FROM hang_hoa HH join model_hang_hoa MDHH on MDHH.ma_hanghoa = HH.ma_hanghoa WHERE HH.ma_hanghoa =".$ma_hanghoa;
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}

function loadTen_hanghoa($ma_hanghoa){
    $sql = "SELECT * FROM hang_hoa where ma_hanghoa=".$ma_hanghoa;
    $hanghoa = pdo_query_one($sql);
    extract($hanghoa);
    return $ten_hanghoa;
}

function delete_hanghoa($ma_hanghoa){
    $sql ="DELETE FROM hang_hoa WHERE ma_hanghoa=".$ma_hanghoa;
    pdo_execute($sql);
}

function deleteModel_hanghoa($ma_hanghoa){
    $sql = "DELETE FROM model_hang_hoa WHERE ma_hanghoa =".$ma_hanghoa;
    pdo_execute($sql);
}

function deletePro_by_danhmuc($ma_danhmuc){
    $sql = "DELETE FROM hang_hoa WHERE ma_danhmuc =".$ma_danhmuc;
    pdo_execute($sql);
}

function loadAll_by_danhmuc($ma_danhmuc){
    $sql = "SELECT * FROM hang_hoa WHERE ma_danhmuc =".$ma_danhmuc;
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;

}

function update_hanghoa($tensp, $dongia, $giamgia, $hinhpath, $danhmuc, $mota, $ma_hanghoa){
    if($hinhpath != ""){
        $sql = "UPDATE hang_hoa SET ten_hanghoa = '".$tensp."', don_gia = '".$dongia."', giam_gia = '".$giamgia."', hinh = '".$hinhpath."', ma_danhmuc = '".$danhmuc."', mo_ta = '".$mota."' WHERE ma_hanghoa =".$ma_hanghoa;
    }else{
        $sql = "UPDATE hang_hoa SET ten_hanghoa = '".$tensp."', don_gia = '".$dongia."', giam_gia = '".$giamgia."', ma_danhmuc = '".$danhmuc."', mo_ta = '".$mota."' WHERE ma_hanghoa =".$ma_hanghoa;
    }
    pdo_execute($sql);
}

function countAll_hanghoa(){
    $sql = "SELECT COUNT(*) FROM hang_hoa";
    $count = pdo_query_value($sql);
    return $count;
}

function loadOne_modelhh($ma_model){
    $sql = "SELECT * FROM model_hang_hoa WHERE ma_model=".$ma_model;
    $model = pdo_query_one($sql);
    return $model;
}

function update_model($ma_model, $size, $so_luong) {
    $sql = "UPDATE model_hang_hoa SET size = '".$size."', so_luong = '".$so_luong."'  WHERE ma_model =".$ma_model;
    pdo_execute($sql);
}

function delete_model($ma_model) {
    $sql = "DELETE FROM model_hang_hoa WHERE ma_model =".$ma_model;
    pdo_execute($sql);
}

function sum_soLuong($ma_hanghoa){
    $sql = "SELECT sum(so_luong) FROM model_hang_hoa WHERE ma_hanghoa=".$ma_hanghoa;
    $count = pdo_query_value($sql);
    return $count;
}

function exist_model($size,$ma_hanghoa){
    $sql = "SELECT count(*) FROM model_hang_hoa WHERE size LIKE '%".$size."%' AND ma_hanghoa =".$ma_hanghoa;
    $isExist = pdo_query_value($sql);
    return $isExist > 0;
}

function addViews_hanghoa($ma_hanghoa) {
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hanghoa =".$ma_hanghoa;
    pdo_execute($sql);
}

function selectCungloai_hanghoa($ma_danhmuc, $id) {
    $sql = "SELECT * FROM hang_hoa WHERE ma_danhmuc = ".$ma_danhmuc." AND ma_hanghoa <> ".$id." ORDER BY ma_hanghoa DESC LIMIT 5 ";
    $listhoanghoa = pdo_query($sql);
    return $listhoanghoa;
}

function loadGoiy_hanghoa() {
    $sql = "SELECT * FROM hang_hoa WHERE giam_gia > 0 ORDER BY so_luot_xem DESC LIMIT 4";
    $listGoiY = pdo_query($sql);
    return $listGoiY;
}


?>
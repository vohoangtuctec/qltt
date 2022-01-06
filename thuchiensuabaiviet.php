<?php
//bước 1: kết nối cơ sở dữ liệu
include 'conn.php';

//bước 2: lấy thông tin bài viết từ trang sưa.php
$id_sua = $_POST['f_id'];
$tieude_sua = $_POST['f_tieude'];
$hinh_sua = $_POST['f_hinh'];
$logo_sua = $_POST['f_logo'];
$thoigian_sua = $_POST['f_thoigian'];
$lienquan_sua = $_POST['f_lienquan'];

//bước 3: thục hiện cập nhật
//tạo câu truy vấn
$cautruyvan = "UPDATE baiviet SET tieude = '$tieude_sua', hinh='$hinh_sua', logo='$logo_sua',thoigian=$thoigian_sua, lienquan = $lienquan_sua WHERE id = $id_sua ";

//echo $cautruyvan;
//thực hiện câu truy vấn
$ketqua = mysqli_query($ketnoi, $cautruyvan);

echo "<script>";
    if($ketqua){
        echo "alert('Cập nhật thành công!'); ";
    }else{
        echo "alert('Cập nhật không thành công'); ";
    }
    echo "window.location = 'quantri.php'; ";
echo "</script>";
?>
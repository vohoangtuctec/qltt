<?php
    $tieude = $_POST['f_tieude'];
    $hinh = $_POST['f_hinh'];
    $logo = $_POST['f_logo'];
    $thoigian = $_POST['f_thoigian'];
    $lienquan =$_POST['f_lienquan'];

    //bước 1: kết nối cơ sở dữ liệu
    $host = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "db_news";
    $ketnoi = mysqli_connect($host,$username, $pass, $dbname);

    //Bước 2: tạo câu truy vấn
    $truyvan = "INSERT INTO baiviet(tieude, hinh, logo, thoigian, lienquan) values('$tieude','$hinh','$logo',$thoigian, $lienquan)";
    //echo $truyvan;
    //Bước 3: Thực hiện câu truy vấn
    $ketqua = mysqli_query($ketnoi, $truyvan);

    echo "<script>";
            if($ketqua){
                echo "alert('Thêm bài viết thành công!');";
            }else{
                echo "alert('Thêm bài viết không thành công!');";
            }
            echo "window.location = 'quantri.php';";
    echo "</script>";
?>
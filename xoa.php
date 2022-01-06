<?php
     //bước 1: kết nối cơ sở dữ liệu
     $host = "localhost";
     $username = "root";
     $pass = "";
     $dbname = "db_news";
     $ketnoi = mysqli_connect($host,$username, $pass, $dbname);

     $id_xoa = $_GET['id_canxoa'];

     $truyvan = "DELETE FROM baiviet WHERE id = $id_xoa";

     $ketqua = mysqli_query($ketnoi, $truyvan);

     echo "<script>";
        if($ketqua){
            echo "alert('Xóa thành công!');";
        }else{
            echo "alert('Xóa không thành công');";
        }
        echo "window.location = 'quantri.php'; ";

     echo "</script>";

?>
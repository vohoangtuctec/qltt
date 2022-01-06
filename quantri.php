<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Trang quản trị bài viết</h1>
    <a href="thembaiviet.html" class="btn btn-primary">Thêm bài viết</a>
    <?php
         //bước 1: kết nối cơ sở dữ liệu
         include 'conn.php';

         //Bước 2: tạo câu truy vấn
        $truyvan = "SELECT * FROM baiviet";

        //Bước 3: Thực hiện câu truy vấn
        $ketqua = mysqli_query($ketnoi, $truyvan);
        echo "<table class=\"table table-hover\">";
            echo "<tr>";
                echo "<td>#</td>";
                echo "<td>Hình ảnh</td>";
                echo "<td>Tiêu đề</td>";
                echo "<td>Logo</td>";
                echo "<td>Thời gian</td>";
                echo "<td>Liên quan</td>";
                echo "<td>Action</td>";
            echo "</tr>";
        //Bước 4: Thực hiện lặp để in dữ liệu trình duyệt web
        while($row = mysqli_fetch_array($ketqua)){
            echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td><img src=\"".$row['hinh']."\" alt=\"\" width=\"100\"></td>";
                echo "<td>".$row['tieude']."</td>";
                echo "<td><img src=\"".$row['logo']."\" alt=\"\" width=\"100\"></td>";
                echo "<td>".$row['thoigian']."</td>";
                echo "<td>".$row['lienquan']."</td>";
                echo "<td>
                    <a href=\"sua.php?id_cansua=".$row['id']."\" class=\"btn btn-info\">Sửa</a>
                    <a href=\"xoa.php?id_canxoa=".$row['id']."\" class=\"btn btn-danger\" onclick = \"return confirm('Bạn có thật sự muốn xóa bài viết này không?')\">Xóa</a>
                </td>";
            echo "</tr>";
        }

        echo "</table>";
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
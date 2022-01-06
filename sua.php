<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa bài viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    //bước 1: kết nối cơ sở dữ liệu
    include 'conn.php';

    //Bước 2: lấy id của bài viết cần sửa
    //http://localhost/tintuc/sua.php?id_cansua=1
    $id_sua = $_GET['id_cansua'];

    //Bước 3: lấy thông của bài viết cần sửa
    $cautruyvan = "SELECT * FROM baiviet WHERE id = $id_sua";
    //thực hiện câu truy vấn
    $ketqua = mysqli_query($ketnoi, $cautruyvan);

    $row = mysqli_fetch_array($ketqua);

    ?>

<div class="container">
    <h1>Sửa bài viết</h1>
    <form action="thuchiensuabaiviet.php" method="post">
        <table>
            <tr>
                <td>ID bài viết</td>
                <td><input type="text" name="f_id"  value ="<?php echo $row['id']; ?>" placeholder="Tiêu đề bài viết..." required size="10"></td>
            </tr>
            <tr>
                <td>Tiêu đề bài viết</td>
                <td><input type="text" name="f_tieude"  value ="<?php echo $row['tieude']; ?>" placeholder="Tiêu đề bài viết..." required size="100"></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" required name="f_hinh"></td>
            </tr>
            <tr>
                <td>Logo</td>
                <td><input type="file" required name="f_logo"></td>
            </tr>
            <tr>
                <td>Thời gian</td>
                <td><input type="number" name="f_thoigian" value="<?php echo $row['thoigian']; ?>" placeholder="Thời gian ..."></td>
            </tr>
            <tr>
                <td>Liên quan</td>
                <td><input type="number" name="f_lienquan" value="<?php echo $row['lienquan']; ?>" placeholder="Liên quan .."></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Sửa bài viết"></td>
            </tr>
        </table>
    </form>
</div>


</body>
</html>
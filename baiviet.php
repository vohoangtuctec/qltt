 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="baiviet.css">
</head>
<body>
    <?php
        function post($hinh, $tieude, $logo, $thoigian, $lienquan){
            echo "<div class=\"post\">
                    <div class=\"post_img\">
                        <img src=\"".$hinh."\" alt=\"\">
                    </div>
                    <div class=\"post_content\">
                        <a href=\"\" class=\"post_content_title\">".$tieude."</a>
                        <img src=\"".$logo."\" alt=\"\" class=\"post_content_logo\">
                        <a href=\"\" class=\"post_content_time\">".$thoigian." giờ</a>
                        <a href=\"\" class=\"post_content_link\">".$lienquan." liên quan</a>
                        <a href=\"\" class=\"post_content_icon\"><i class=\"bi bi-alarm\"></i></a>
                    </div>
                </div>";
        }

        //bước 1: kết nối cơ sở dữ liệu
        include 'conn.php';

        //Bước 2: tạo câu truy vấn
        $truyvan = "SELECT * FROM baiviet";

        //Bước 3: Thực hiện câu truy vấn
        $ketqua = mysqli_query($ketnoi, $truyvan);

        //Bước 4: Thực hiện lặp để in dữ liệu trình duyệt web

        while($row = mysqli_fetch_array($ketqua)){
            //echo $row["tieude"];echo "<br>";
            $hinh = $row["hinh"];
            $tieude = $row["tieude"];
            $logo = $row["logo"];
            $thoigian = $row["thoigian"];
            $lienquan = $row["lienquan"];
            post($hinh, $tieude, $logo, $thoigian, $lienquan);
        }


    ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
</body>
</html>
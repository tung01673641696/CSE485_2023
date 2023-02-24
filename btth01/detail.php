<?php
    include "./connect.php"
?>

<?php
    if(isset($_GET["ma_bviet"])) {
        $ma_bviet = $_GET["ma_bviet"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include "./layout/header.php"
    ?>

    <main class="container mt-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
       
        <?php
            $sql = "SELECT * FROM baiviet WHERE ma_bviet = $ma_bviet";
            $qr = mysqli_query($connect, $sql);
            $rows = mysqli_fetch_array($qr);
        ?>

        <?php
            $sql_theloai = "SELECT * FROM theloai,baiviet
                            WHERE theloai.ma_tloai = baiviet.ma_tloai
                            AND ma_bviet = $ma_bviet 
                           ";
            $qr_theloai = mysqli_query($connect, $sql_theloai);
            $rows_theloai = mysqli_fetch_array($qr_theloai);
        ?>


            <div class="row mb-5">
                <div class="col-sm-4">
                    <img src="images/songs/cayvagio.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col-sm-8">
                    <h5 class="card-title mb-2">
                        <a href="" class="text-decoration-none"><?php echo $rows["tieude"] ?></a>
                    </h5>
                    <p class="card-text"><span class=" fw-bold">Bài hát: </span> <?php echo $rows["ten_bhat"] ?></p>
                    <p class="card-text"><span class=" fw-bold">Thể loại: </span><?php echo $rows_theloai["ten_tloai"] ?></p>
                    <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?php echo $rows["tomtat"] ?></p>
                    <p class="card-text"><span class=" fw-bold">Nội dung: </span><?php echo $rows["noidung"] ?></p>
                    <p class="card-text"><span class=" fw-bold">Tác giả: </span></p>

                </div> 
            </div>
    </main>
    <?php
        include "./layout/footer.php"
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
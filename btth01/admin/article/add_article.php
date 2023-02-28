<?php
    include "../../connect.php";

    if(isset($_POST['add'])) {
        echo "hehe";

        $nameCategory = $_POST['nameCategory'];
        $titleCategory= $_POST['titleCategory'];
        $nameSong= $_POST['nameSong'];
        $nameCate= $_POST['name'];
        $summary= $_POST['summary'];
        $content= $_POST['content']; 
        $nameAuthor= $_POST['nameAuthor']; 
        $date= $_POST['date'];
        $image= $_POST['image'];

        $sql = "INSERT INTO baiviet(ten_tloai,tieude,ten_bhat,ma_tloai,tomtat,noidung,ma_tgia,ngayviet,hinhanh) 
        VALUES('$nameCategory','$titleCategory','$nameSong','$nameCate','$summary','$content','$nameAuthor','$date','$image')";
        $qr = mysqli_query($connect,$sql);
        header("location: article.php");
    }

    else echo "thất bạkkkkkki"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
        <div class="container-fluid">
            <div class="h3">
                <a class="navbar-brand" href="#">Administration</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" aria-current="page" href="./">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Trang ngoài</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../category/category.php">Thể loại</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../author/author.php">Tác giả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="article.php">Bài viết</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm Bài Viết</h3>

            <form method="post">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên bài viết</span>
                    <input type="text" class="form-control" name="nameCategory"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tiêu đề</span>
                    <input type="text" class="form-control" name="titleCategory"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                    <input type="text" class="form-control" name="nameSong"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Mã thể loại</span>
                    <select name="theloai">
                        <?php

                            $sql_tl = "SELECT * FROM theloai";
                            $qr_tl = mysqli_query($connect,$sql_tl);
                            while($rows=mysqli_fetch_assoc($qr_tl)){
                        ?>
                            <option name="<?php echo $rows["ma_tloai"] ?>"><?php echo $rows["ten_tloai"] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                    <input type="text" class="form-control" name="summary"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Nội dung</span>
                    <input type="text" class="form-control" name="content"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Mã tác giả</span>
                    <select name="tacgia">
                        <?php

                            $sql_tg = "SELECT * FROM tacgia";
                            $qr_tg = mysqli_query($connect,$sql_tg);
                            while($rows=mysqli_fetch_assoc($qr_tg)){
                        ?>
                            <option nameAuthor="<?php echo $rows["ma_tgia"] ?>"><?php echo $rows["ten_tgia"] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Ngày viết</span>
                    <input type="date" class="form-control" name="date"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Hình ảnh</span>
                    <input type="file" class="form-control" name="image"/>
                </div>

                <div class="form-group float-end ">
                    <button name="add" class="btn btn-primary">Add</button>
                    <a href="category.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
    include "../layout/footerAdmin.php";
?>
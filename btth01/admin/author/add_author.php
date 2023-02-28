<?php
    include "../../connect.php";

    if(isset($_POST['add'])) {

        $nameAuthor = $_POST['nameAuthor'];
        $sql = "INSERT INTO tacgia(ten_tgia) VALUES('$nameAuthor')";
        $qr = mysqli_query($connect,$sql);
        header("location: author.php");
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
                    <a class="nav-link" href="author.php">Tác giả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../article/article.php">Bài viết</a>
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
            <h3 class="text-center text-uppercase fw-bold">Thêm Tác Giả</h3>

            <form method="post">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                    <input type="text" class="form-control" name="nameAuthor"/>
                </div>

                <div class="form-group float-end ">
                    <button type="submit" name="add" class="btn btn-primary">Add</button>
                    <a href="author.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
    include "../layout/footerAdmin.php";
?>
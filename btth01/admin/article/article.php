
<?php
        include "../../connect.php";
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
                <a href="add_article.php" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên bài viết</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Tên bài hát</th>
                            <th scope="col">Mã thể loại</th>
                            <th scope="col">Tóm tắt</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Mã tác giả</th>
                            <th scope="col">Ngày viết</th>
                            <th scope="col">Hình ảnh</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM baiviet";
                            $qr = mysqli_query($connect,$sql);
                            while($rows = mysqli_fetch_array($qr)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $rows["ma_bviet"] ?></th>
                                <th scope="row"><?php echo $rows["ten_bviet"] ?></th>
                                <th scope="row"><?php echo $rows["tieude"] ?></th>
                                <th scope="row"><?php echo $rows["ten_bhat"] ?></th>
                                <th scope="row"><?php echo $rows["ma_tloai"] ?></th>
                                <th scope="row"><?php echo $rows["tomtat"] ?></th>
                                <th scope="row"><?php echo $rows["noidung"] ?></th>
                                <th scope="row"><?php echo $rows["ma_tgia"] ?></th>
                                <th scope="row"><?php echo $rows["ngayviet"] ?></th>
                                <th scope="row"><img src="../../images/songs/<?php echo $rows["hinhanh"] ?>" style="width: 100px"/></th>
                                <td>
                                    <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                       <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php
        include "../layout/footerAdmin.php";
    ?>

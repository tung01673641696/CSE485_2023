<?php
    include "../../connect.php";

    if(isset($_POST['add'])) {
        echo "hahaa";
        $nameCategory = $_POST['nameCategory'];
        $sql = "INSERT INTO theloai(ten_tloai) VALUES('$nameCategory')";
        $qr = mysqli_query($connect,$sql);
        header("location: category.php");
    }

    else echo "éo hiểu"
?>


<?php
    include "../layout/headerAdmin.php";
?>

    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
                <form action="category.php" method="POST">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                        <input type="text" class="form-control" name="nameCategory"/>
                    </div>

                    <div class="form-group float-end ">
                        <button type="submit" name="add" class="btn btn-primary">Thêm</button>
                        <a href="category.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
        include "../layout/footerAdmin.php";
    ?>
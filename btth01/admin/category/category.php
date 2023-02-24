
    <?php
        include "../layout/headerAdmin.php";
    ?>

    <?php
        include "../../connect.php";
    ?>


    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="add_category.php" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM theloai";
                            $qr = mysqli_query($connect,$sql);
                            while($rows = mysqli_fetch_array($qr)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $rows["ma_tloai"] ?></th>
                                <td><?php echo $rows["ten_tloai"] ?></td>
                                <td>
                                    <a href="edit_category.php?id=1"><i class="fa-solid fa-pen-to-square"></i></a>
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

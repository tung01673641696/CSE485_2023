<?php
  include "../../connect.php";

  if(isset($_GET["ma_tloai"])) {
    $ma_tloai = $_GET["ma_tloai"];
  }

  $sql_bv = "DELETE FROM baiviet WHERE ma_tloai = $ma_tloai";
  $qr_bv = mysqli_query($connect,$sql_bv);

  $sql_tl= "DELETE FROM theloai WHERE ma_tloai = $ma_tloai";
  $qr_tl = mysqli_query($connect,$sql_tl);
  header("location: category.php");
?>
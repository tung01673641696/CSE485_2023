<?php
  include "../../connect.php";

  if(isset($_GET["ma_tgia"])) {
    $ma_tgia = $_GET["ma_tgia"];
  };

  $sql_bv = "DELETE FROM baiviet WHERE ma_tgia=$ma_tgia";
  $qr_bv = mysqli_query($connect,$sql_bv);

  $sql_tg = "DELETE FROM tacgia WHERE ma_tgia=$ma_tgia";
  $qr_tg = mysqli_query($connect,$sql_tg);
  header("location:author.php");
?>


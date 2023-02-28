<?php
  include "../../connect.php";

  if(isset($_GET["ma_bviet"])) {
    $ma_bviet = $_GET["ma_bviet"];
  }

  $sql = "DELETE FROM baiviet WHERE ma_bviet = $ma_bviet";
  $qr = mysqli_query($connect,$sql);
  header("location: article.php");

?>
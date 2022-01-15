<?php
include("sqlconn.php");
if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $query = "delete from data1 where id = $id";
   $result = mysqli_query($conn,$query);
   if(!$result){
       die("刪除失敗") ;
   }
   echo '刪除成功';
   header("Location: home.php");
} 
?>
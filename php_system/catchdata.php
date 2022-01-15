<?php
include("sqlconn.php");

if(isset($_POST['newdata'])){
    $title =  $_POST['title'];
    $content = $_POST['content'];
    $query = "INSERT INTO `data1` (`title`, `content`) VALUES ('$title', '$content')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("寫入失敗") ;
    }
    echo '寫入成功';
    header("Location: home.php");
}


?>
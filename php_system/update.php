<?php
include("sqlconn.php");
if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $query = "select title,content from data1 where id = $id";
   $result = mysqli_query($conn,$query);
   if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $content = $row['content'];
   }
}

if(isset($_POST['updatedone'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $query = "update data1 set title='$title',content='$content' where id = $id";
    $result = mysqli_query($conn,$query);
    header("Location: home.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <div class="col-6 ms-5 mt-5 w-25">
            <form action="update.php?id=<?php echo $_GET['id'];?>" method="POST" class="d-grid gap-3">
                <input type="text" class="form-control" name="title" value="<?php echo $title;?>">
                <textarea class="form-control" name="content" rows="2"><?php echo $content;?></textarea>
                <button type="submit" class="btn btn-danger"  name="updatedone">編輯</button>
            </form>
        </div>
    </div>
</body>
</html>
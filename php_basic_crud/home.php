<?php include("sqlconn.php"); ?>

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
            <form action="catchdata.php" method="POST" class="d-grid gap-3">
                <input type="text" class="form-control" name="title">
                <textarea class="form-control" name="content" rows="2"></textarea>
                <button type="submit" class="btn btn-primary"  name="newdata">送出</button>
            </form>
        </div>
        <div class="col-6">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>標題</th>
                        <th>內容</th>
                        <th>日期</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "select * from data1";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_array($result)){?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo $row['content'];?></td>
                        <td><?php echo $row['addtime'];?></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['id'];?>">修改</a>
                            <a href="delete.php?id=<?php echo $row['id'];?>">刪除</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
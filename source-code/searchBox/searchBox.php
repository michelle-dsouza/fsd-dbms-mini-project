<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="searchBox.css">
</head>
<body>

    <div class="text">
        <h4>Products</h4>
    </div>

 <div class="container">
        <form action="" class="searchbox">
            <input type="text" placeholder="Type to search" name="search">
            <button type="submit" id="mybtn" onclick="myfunction()">
                <img width="15px" src="images/bg11.png" alt="">
            </button>
        </form>
            </div>

            <script src="searchBox.js"></script>
</body>
</html>

<?php
$con =new PDO("mysql:host=localhost;dbname=fsdmini",'root','Mysql@123');
if(isset($_POST["submit"])){
    $str=$_POST["search"];
    $sth=$con->prepare("SELECT*FROM `search` WHERE Name=`$str`");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $STH->execute();

    if($row=$sth->fetch())
    {
        ?>
        <br>
        <br>
        <table>
        <tr>
            <th>Paintings</th>
            <th>candles</th>
            <th>embroidery</th>
        </tr>
        <tr>
            <td><?php echo $row->Paintings; ?></td>
            <td><?php echo $row->candles; ?></td>
            <td><?php echo $row->embroidery; ?></td>
        </tr>
        </table>
        <?php     
    }
    else{
        echo "Sorry";
    }
}
?>
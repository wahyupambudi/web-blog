<?php require '../func.php' ?>
<?php
if(isset($_GET['delete'])) {
$id = $_GET['delete'];
$query = mysqli_query($con, "DELETE FROM t_artikel WHERE id='$id'");
header("Location: admin.php");
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Admin</title>
    <style>
    textarea,
    select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
    input[type=text],
    select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
    input[type=file],
    select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: white;
    }
    input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }
    input[type=submit]:hover {
    background-color: #45a049;
    }
    div {
    border-radius: 5px;
    /*background: linear-gradient(to right, #45a049, #1cb5e0);*/
    padding: 20px;
    }
    </style>
  </head>
  <body>
    <?php
    $page = @$_GET['page'];
    if($page == "add") {
    include 'add.php';
    }
    ?>
    <div class="container">
      <hr>
      <h3 align="center" class="text-dark">Admin Page Awonapa Bonsai</h3>
      <hr><br>
      <a href="../index.php"><button class="button">Kembali</button></a>
      <a href="?page=add"><button class="btn-info">Add Article</button></a><br>
      <div>
        <h3>List Article</h3>
        <?php
        $sql = "select id, judul from t_artikel order by id asc";
        $res = mysqli_query($con, $sql);
        while ($data = mysqli_fetch_array($res)) {
        ?>
        <div align="justify">
          <span><?php echo $data["judul"]; ?></span>
          <a href="admin.php?delete=<?php echo $data["id"] ?>"><button class="button">Delete</button></a><hr>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
    
  </body>
</html>
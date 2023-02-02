<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
            {
            display:flex;
            justify-content:center;
            padding: 50px;
            flex-direction:column;
        }
        
        .display-song{
            display:flex;
            justify-content:center;
            flex-direction:column;
        }
  .song-container {
    display:flex;
    justify-content:space-between;
    background-color: #f2f2f2;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
  }
  .song-name {
    font-size: 20px;
    font-weight: bold;
  }
  a {
    color: red;
    text-decoration: none;
    margin-left: 10px;
  }
</style>

</head>
<body >
    <h2>MENTORS LIST</h2>

<div class="display-song">
        <?php
$con=mysqli_connect('localhost','root','','collage');
        $sql = "SELECT `sid`,`sname` FROM `student`";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <div style="width:600px" class="song-container">

            <span class="song-name">
              <?= $row['sname'] ?>
            </span>
            <span style="color:blue">
            <a href="delete.php?id=<?= $row['sid'] ?>">delete</a>
            </span>
          
          </div>
        <?php
        }
        ?>
</div>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','collage');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$usn = mysqli_real_escape_string($con, $_GET['id']);

$sql = "DELETE FROM `student` WHERE `sid`= ?";

$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "i", $usn);
$result = mysqli_stmt_execute($stmt);

if($result){
    echo "<script>alert('Record Deleted Successfully')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL = ./index.php">
    <?php
}
?>

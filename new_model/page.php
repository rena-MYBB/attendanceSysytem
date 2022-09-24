<?php
session_start();
if(isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <hr>

    <form class="form-control">
    <label></label>
    </form>

</body>
</html>
<?php
}
else
{
    echo'
                <script>
                alert("please login");
                window.location="index.php";
                </script>
                ';
}
?>
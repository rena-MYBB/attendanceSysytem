<?php

include("header.php");
include("db.php");

if(isset($_POST['submit']))
{
$result=mysqli_query($con,"insert into students(student_name,student_hostelgroup,student_gender)values('$_POST[name]','$_POST[hostelgroup]','$_POST[gender]')");

if($result)
{
}
}

?>

<div class="panel panel-default">
    <div class="alert alert-success">
    <strong>!success </strong>attendance data successfully inserted;
    </div>

    <div class="panel-heading">
    <h2>
    <a class="btn btn-sucess" href="add.php">Add Student</a>
    <a class="btn btn-info pull-right" href="index.php">Back</a>
    </h2>
    </div>

    <div class="panel-body">
    <form action="add.php" method="post">

    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" required>

    </div>

    <div class="form-group">
    <label for="name">Hostelgroup</label>
    <input type="text" name="hostelgroup" id="hostelgroup" class="form-control" required>

    </div>

    <div class="form-group">
    <label for="name">Gender</label>
    <input type="text" name="gender" id="gender" class="form-control" required>

    </div>

    <div class="form-group">
    <input type="submit" name="submit" value="submit" class="btn btn-primary" required>

    </div>


    </form>


    </div>

</div>
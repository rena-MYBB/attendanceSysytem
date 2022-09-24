<?php
include("db.php");
include("header.php");


?>

<div class="panel panel-default">

    <div class="panel panel-heading">
    <h2>
    <a class="btn btn-success" href="add.php"> Add Students</a>
    <a class="btn btn-info pull-right" href="view all.php"> Back</a>
    </h2>
    

    <div class="panel panel-body">

    <form action="index.php" method="Post">

    <table class="table table-striped">
    <tr>
    <th>Serial Number</th> <th>Dates</th> <th>Show Attendance</th>

    </tr>

    <?php  $result=mysqli_query($con,"select distinct date from attendance_records" );
    $serialnumber=('');
    while($row=mysqli_fetch_array($result))
    {
    $serialnumber++;


    ?>

    <tr>
    <td> <?php echo $serialnumber; ?> </td>
    <td> <?php echo $row['date']; ?> 
    </td>
    <td>
    <form action="show_attendance.php">

    <input type="hidden" value="<?php echo$row['date'] ?>" name="date">
    <input type="submit" value="Show Attendance" class="btn btn-primary">

    </td>

    </tr>
    
    <?php
    }

    ?>

    </table>

    </form>

    </div>


</div>
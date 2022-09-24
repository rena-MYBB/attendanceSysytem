<?php
include("db.php");
include("header.php");

    if(isset($_POST['submit']))
    {
        foreach($_POST['attendance_status'] as $id=>$attendance_status)
        {
            $student_name=$_POST['student_name'][$id];
            $student_hostelgroup=$_POST['student_hostelgroup'][$id];
            $student_gender=$_POST['student_gender'][$id];
            $date=date("Y-m-d H:i:s");

            mysqli_query($con,"insert into attendance_records(student_name, student_hostelgroup, student_gender, attendance_status,date)values('$student_name','$student_hostelgroup','$student_gender','$date')");
        }
    }
   
?>

<div class="panel panel-default">

    <div class="panel panel-heading">
    <h2>
    <a class="btn btn-success" href="add.php"> Add Students</a>
    <a class="btn btn-info pull-right" href="view_all.php"> View All</a>
    </h2>

    <div class="alert alert-sucess">
    Attendance Data Insert Successfully
    </div>
    <H3><div class="well text-center">Date:<?php echo date("y-m-d") ?> </div></H3>

    <div class="panel panel-body">

    <form action="index.php" method="Post">

    <table class="table table-striped">
    <tr>
    <th>#serial Number</th><th>Student Name</th><th>Hostelgroup</th><th>Gender</th><th>Attendance Status</th>
    </tr>

    <?php  $result=mysqli_query($con,"select * from attendance" );
    $serialnumber=('');
    $counter=('');
    while($row=mysqli_fetch_array($result))
    {
    $serialnumber++;


    ?>

    <tr>
    <td> <?php echo $serialnumber; ?> </td>
    <td> <?php echo $row['student_name']; ?> 
    <input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]">
    </td>
    <td> <?php echo $row['student_hostelgroup']; ?> 
    <input type="hidden" value="<?php echo $row['student_hostelgroup']; ?>" name="student_group[]">

    </td>
    <td> <?php echo $row['student_gender']; ?>
    <input type="hidden" value="<?php echo $row['student_gender']; ?>" name="student_gender[]">

    </td>
    <td> 
        <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Present">Present
        <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Absent">Absent 
 
    </td>
    </tr>
    
    <?php
    $counter++;
    }

    ?>

    </table>

    <input type="submit" name="submit" value="submit" class="btn btn-primary">

    </form>

    </div>

</div>


</div>

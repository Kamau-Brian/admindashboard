<!DOCTYPE html>
<html>

<body>
    <!-- All our code. write here   -->
    
    <!-- sidebar here -->
    <?php
    require_once('includes/links.php');
    require_once('includes/header.php');
    require_once('includes/sidebar.php');

    require_once('dbconnection.php');
    // fetch student records using where
    $fetchStudentRecords = mysqli_query($Conn,"SELECT * FROM enrollments WHERE id='".$_GET['id']."' ");
    while($row = mysqli_fetch_array($fetchStudentRecords)){
        $studentId= $row['id'];
        $studentName= $row['name'];
        $studentPhone= $row['phone'];
        $studentEmail= $row['email'];
        $studentRegNumber= $row['reg_number'];
        $studentCourse= $row['course'];
        $studentEnrolledOn= $row['created_at'];
       
    }

   
    ?>


    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span> Student Info</span>
                            <span class="float-left">
                                <i class="fa fa-user fa-lg"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Name: <span><?php echo $studentName ?></span>
                                </li>
                                <li class="list-group-item">
                                    Registration No: <span><?php echo $studentRegNumber ?></span>
                                </li>
                                <li class="list-group-item">
                                    Phone: <span><?php echo $studentPhone ?></span>
                                </li>
                                <li class="list-group-item">
                                    Email: <span><?php echo $studentEmail ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span> Course Details</span>
                            <span class="float-left">
                                <i class="fa fa-folder-open fa-lg"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Course Name: <span><?php echo $studentCourse ?></span>
                                </li>
                                <li class="list-group-item">
                                    Enrolled On: <span><?php echo $studentEnrolledOn ?></span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

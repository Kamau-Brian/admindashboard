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
    $fetchMessages = mysqli_query($Conn,"SELECT * FROM messages WHERE id='".$_GET['id']."' ");
    while($row = mysqli_fetch_array($fetchMessages)){
        $studentId= $row['id'];
        $studentName= $row['name'];
        $studentEmail= $row['email'];
        $studentPhone= $row['phone'];
        $studentSubject= $row['subject'];
        $studentMessage= $row['message'];
        
       
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
                            <span> Message Details</span>
                            <span class="float-left">
                                <i class="fa fa-folder-open fa-lg"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Subject: <span><?php echo $studentSubject ?></span>
                                </li>
                                <li class="list-group-item">
                                    Message: <span><?php echo $studentMessage ?></span>
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

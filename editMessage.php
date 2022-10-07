<!DOCTYPE html>
<html>

<body>
    <!-- All our code. write here   -->
    
    <!-- sidebar here -->
    <?php
    require_once('includes/links.php');
    require_once('includes/header.php');
    require_once('includes/sidebar.php');
    // database connection
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

    <?php
    // isset function
    if(isset($_POST['updateMessage'])){

        // fetch data
        $name=$_POST["name"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];
        // sql to update
        $updateMessage = mysqli_query($Conn,"UPDATE messages SET name='$name',phone='$phone',email=' $email',subject=' $subject',message='$message' WHERE id='".$_GET['id']."' ");
        if($updateMessage){
            echo 'data changed succesfully';
        }
        else{
            echo 'error ';
        }
    }

    ?>

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Update Message</span>
                        </div>
                        <div class="card-body">
                            <form action="editMessage.php?id=<?php echo $studentId ?>" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="" value="<?php echo $studentName?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="" value="<?php echo $studentEmail?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="tel" class="form-control" name="phone" id="" value="<?php echo $studentPhone?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" name="subject" id="" value="<?php echo $studentSubject?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                            <label for="message">Message</label>
                                            <input type="text" class="form-control" name="message" id="" value="<?php echo $studentMessage?>">
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row col-lg-3">
                                    <button type="submit" class="btn btn-success" name="updateMessage">update message</button>
                                </div>
                            </form>  
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


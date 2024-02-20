<?php
     $a=array("name","email","subject","contact","massage");
    //  global $subject;
    //  global $name;
    //  global $email;
    //  global $subject;
    //  global $contact;
     global $massage;
    $insert = false;
    $host = "localhost";
    $user = "root";
    $password ="";
    $db_name ="jewel_webnet";
  
    
   
    $conn = mysqli_connect($host, $user, $password, $db_name);
   
    if(mysqli_connect_errno()){
        die("Failed to connect with MySQL:". mysqli_connect_errno());
    }
    else{
        if(isset($_POST['name']))
        {
        $sql ="INSERT INTO contact_us(Name, Email, Subject, Contact, Massage)
        VALUES ('".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['subject']."','".$_REQUEST['contact']."','".$_REQUEST['massage']."')";

        if($conn->query($sql)=== TRUE){
            // echo "Record Submitted Successfully";
            $insert = true;
        }
        else{
            echo "Error:".$sql. "<br>" .$conn->error;
        }
        $conn->close();

        // header("location:contactus.php ?");
    }
}
?>
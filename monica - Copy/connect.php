<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

if(!empty($firstname)){
    if(!empty($email)){
        $host = "localhost";
        $dbusername = "root";
        $dbemail = "";
        $dbname ="greenindia";
        $conn = new mysqli($host,$dbusername, $dbemail, $dbname);
        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')' .mysqli_connect_error());
        }
        else{
            $sql = "insert into form(firstname,email) value('$firstname','$email')";
            if($conn->query($sql)){
                echo "new record is inserted sucessfully";
            }
            else{
                echo "error:".$sql."<br>".$conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo "email should not be empty";
        die();
    }
}
else{
    echo "firstname should not be empty";
    die();
}
?>
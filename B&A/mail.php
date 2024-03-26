<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $servername="localhost";
    $username="root";
    $password="";
    $database="bachwani";
    $con=mysqli_connect($servername,$username,$password,$database);
    /*if($con)
    {
      echo("Connection Successfull");
    }
    else
    {
      echo("Not connected");
    }*/
    $name = $_POST['name'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        //echo($name);
        //echo($phone);
        //echo($subject);
        //echo($email);
        //echo($message);
        if((empty($email)) || (empty($name)))
        header('location:Contact.html');
      else
      {
        $sql="INSERT INTO touch  VALUES ('$name','$phone','$subject','$email','$message');";
        mysqli_query($con,$sql);
      }
      header("location:index.html?email=$email");

}
?>
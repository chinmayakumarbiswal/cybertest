<?php
    $conn =mysqli_connect('localhost','root','','domainproject');
    if(isset($_POST['submit']))
        {
            $user=$_POST['username'];
            $pwd=$_POST['password'];
            $query="SELECT * FROM users WHERE username='$user' && password='$pwd'";
            $data=mysqli_query($conn, $query);
            $total=mysqli_num_rows($data);
            if($total==1)
            {
                header('location:video.html');
            }
            else
            {
                header('location:error.html');
            }
        }
    if(isset($_POST['entry']))
    {
        $mail=$_POST['email'];
        $mess=$_POST['message'];
        $query= " insert into userinput (email,message) values('$mail', '$mess')";
        mysqli_query($conn,$query);
        
    }
?>
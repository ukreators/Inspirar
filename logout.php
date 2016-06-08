<?php

if(isset($_POST['logout']))
{
    
    if(isset($_SESSION['enrollno']))
    {
    session_destroy();
    unset($_SESSION['enrollno']);
    unset($_SESSION['password']);
    //Logout msg
    
    echo '<center><script>alert("You are now logged out")</script></center>';
    header("location:home.php");
    }
    else
    {echo '<center><script>alert("You are now logged out")</script></center>';
     header("location:home.php");
       
    }

}
?>

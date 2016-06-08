<!DOCTYPE html>
<html>
    <head>
        <title>Contact Ust</title>
       	<link href="CSS/style.css" type="text/css" rel="stylesheet"/>
        <link href="CSS/demo.css" type="text/css" rel="stylesheet"/>
        
    </head>
    <body style="margin-top: 5px;">
         <!-- start header here-->
         
    	<div class="container" >
             <header>
                <!--navbar-->
                <?php include_once ('nav.php') ?>
                
             <br /><br /><br />
    
 
            <section>
            <table style="margin-left: auto;margin-right: auto;">
                <tr>
                    <td style="width: 400px;background-color: #E9E9E9;color: black;margin-right: auto;margin-left: auto;padding: 20px;margin-top: 10px;height: auto;">
                    
                    <qoute style="font-family:Blackadder ITC;font-size: 2.4em;"><i>"Sharing and helping are the source of eternal happiness"</i></qoute><br /><br />
                    <br /><p style="font-family:Franklin Gothic;">We are a team of two students from MAIT and we wish to help you ease through your engineering by providing atmost help we can.<br />
                    You may send us a message related to our website or other stuff.
                    </p>
                    
                    </td>
                    <td style="width:30px"></td>
                    
                    <td style="float: left;width: 400px;background-color: #E9E9E9;padding: 10px;">
                        <form method="post">
                            <table style="text-align: left;">
                                <tr><td>Your Name:</td><td><input type="text" name="name" required="flag"/></td></tr>
                                <tr><td>Your email:</td><td><input type="text" name="email" required=""/></td></tr>
                                <tr><td>Mobile No.</td><td><input type="number" name="mobile"/></td></tr>
                                <tr><td><br />Feedback</td></tr>
                                <tr><td colspan="2"><textarea name="text" cols="45" rows="25">Thanks for creating this helpful website...</textarea></td></tr>
                                <tr ><td colspan="2"><br /><br /><input type="submit" name="send" value="Send" style="height:40px;width: 375px;background-color: #E0E0E0;color: #000000;text-decoration: none;border: none;outline: none;border-bottom-style: outset;margin-left: auto;margin-right: auto;"/></td></tr>
                            </table>
                        </form>
                    </td>
                </tr>
            </table>
            
            <!-- Entering feecback in database -->
            
            </section>
        
        
          <!--footer-->
                   <div style="clear: both;margin-top: 80px;">
                     <?php include_once ('foot.php') ?>
                    
              </div>
        
         
         
        </div>
</body>
</html>

<?php

if(isset($_POST['send']))
{
   $t=$_POST['name']." with email ";
   $t.=$_POST['email']." has given feedback ";
    $t.=$_POST['text'];

if(!empty($t))
{
    
require_once ('config.php');
 
$query="INSERT INTO feedback (feedback) VALUES ('$t')";

if(mysqli_query($connection,$query))
{
    echo '<script> alert("Feedback Send.\nPage will be refreshed")</script>';
}
echo '<script>window.location.assign("contactus.php")</script>';
}

else
{
  echo '<script> alert("Blank Feedback")</script>';

echo '<script>window.location.assign("contactus.php")</script>';  
}

}

?>
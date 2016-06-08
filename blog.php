<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	
        <link href="CSS/blogstylev2.css" type="text/css" rel="stylesheet"/>
    	<title>Blogv2</title>
            <script type="text/javascript">
            fucntion func()
            {
                top.location="logout.php";
            }
        </script> 
    </head>
    <body>
        <?php
            session_start(); 
        ?>
        <?php 


            if(@$_SESSION['enrollno']!="")
            {}
            else
            {
                echo "Guest";
            }
        ?>
         <!--logout code starts-->



<?php
if(isset($_SESSION['enrollno']) && isset($_SESSION['password']))
{
    
}
else
{
header("location:register2.php");    
}

require('logout.php')

?>

        <div class="top"><img src="images/blogimg2.png" style="float: left;height: 100px;width: 100px;margin-left: 10%;">
            <form method="post">
                <!--<a href="home.php"><img src="images/bloglogout.png" style="float: right;margin-right: 3%;height: 100px;width: 100px;"></a>--> 
                <input type='submit' name='logout' value='' style='background: url(images/bloglogout.png);height: 100px;width: 100px;float: right;margin-right: 3%;' onclick='func()'/>
            </form>
            <a href="home.php"><img src="images/bloghome.png" style="float: right;height: 100px;width: 100px;margin-right: 5px;"></a>  
        </div>
        <form method="post">
        <div class="box"><table align="center">
            <tbody >
                <tr>
                    <td><h3 style="font-size:30px;">PHP Workshop</h3></td>
                </tr>
                <tr>
                    <td>
                    <p>PHP workshop has been organized for 1st year students.
                    HTML5, CSS3 and MySql will also be discussed among students.</p>
                    <p>Venue : MAIT (LAB NO : 833)</p>
                    <p>Date : 20 September 2015</p>
                    <p>Time : 4-5:30pm</p>
                    <a href="#">For Registration - CLICK HERE</a>
                    
                    </td>
                </tr>
                <tr>
                    <td><hr style="width: 75%;margin-left: 0px;margin-right: auto;" /><b>COMMENTS </b><br /><br /></td>
                </tr>
                
                
                <!-- Retrieve COmments from database-->
                
                <?php
                
                @ require_once ('config.php');
                 
                
                
                $query="SELECT * FROM comments";
                
                $result=mysqli_query($connection,$query);
                
                $var1=2;
                while($row=mysqli_fetch_assoc($result))
                {
                    if($var1%2){
                        $style="color2";
                    }
                    else{
                        $style="white";
                    }
                    echo "<tr class=".$style.">
                <td>
                <div style='width:300px;height:auto;'>
                ".$row["text"]."
                <br/><span class='posttime'>on  ".$row["post_time"]."</span><br/>
                </div>
                </td>
                </tr>";
                ;
                
                $var1++;
                }
                
                ?>
                
                <tr>
                    <td>
                        <br />
                        <textarea style="background-color: white;" name="text" rows="7" cols="70"></textarea>
                        <br />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input style="background-color: white;padding: 4px;font-size: 0.9em;width: 100px;" type="submit" name="sub1" value="Post"/>
                    </td>
                </tr>
            </tbody>
            </table>
            
            </form>
            </div>
        
        </body>
</html>
        
        
        <!-- Entering comment in database -->
        <?php
        
        if(isset($_POST['sub1']))
        {
           
           @ $t=$_POST['text'];
        
        if(!empty($t)){
            
        require_once ('config.php');
         
        
        
        $query="INSERT INTO comments (text) VALUES ('$t')";
        
        if(mysqli_query($connection,$query))
        {
            echo '<script> alert("Comment Posted.\nPage will be refreshed")</script>';
        }
        echo '<script>window.location.assign("blog.php")</script>';
        
        }
        
        else
        {
          echo '<script> alert("Blank Comment.Try Again")</script>';
        
        echo '<script>window.location.assign("blog.php")</script>';  
        }
        
        }
        
        ?>
        
        
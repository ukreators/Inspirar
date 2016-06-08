
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Ust</title>
       	<link href="CSS/style.css" type="text/css" rel="stylesheet"/>
        <link href="CSS/demo.css" type="text/css" rel="stylesheet"/>
        
        <script type="text/javascript">
            fucntion func()
            {
                top.location="logout.php";
            }
        </script> 
 
</head>
<body>
 <h1 style="color: #ED1B10;font-size: 40px;text-align:center;">HELPING HAND</h1>
  <!--logout code starts-->
<form method="post">
&nbsp;&nbsp;&nbsp;&nbsp;
<input type='submit' name='logout' value='' style='background: url(images/logout.png);height: 57px;width: 57px;float:right;' onclick='func()'/>
</form>
<div style="height: 20px;"></div>
     <!--navbar-->
                <?php include_once ('nav.php') ?>
                
<?php
session_start(); 
?>

<?php 


if(@$_SESSION['enrollno']!="")
{

}
else
{
    echo "Guest";
}
 ?>
 

        
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
      
                    
		</div><!-- end fdw -->
	</header><!-- end header -->
  
  
    
    <table align="center">
    <tbody>
    <div style="background-color: aliceblue;;height:auto;width:960px;">
    <form method="post" enctype="multipart/form-data"> 
   
    <tr>
<td>
<input style="width: 200px;"type="file" name="myfile"/>
&nbsp;&nbsp;&nbsp;
<input style="width: 100px; height: 28px;" type="submit" name="sub2" value="Upload File"/>
<br />
<input type="text" name="filename" />
<br /><hr /></td>
</tr>
    <tr>
    <td>
 <?php
 ?>   
<!-- Retrieve COmments from database-->

<?php

@ require_once ('config.php');

if(isset($_POST['sub2']))
{
    $t=$_POST['filename'];
 if(!empty($t))
 {
    
    $str=$_FILES['myfile']['type'];
    $arr=str_split($str);
    $flag= 0;
    $ext="";
        foreach($arr as $v)
        {         
            if($flag==1)
            {
                $ext.=$v;
            }
            if($v=="/")
            {
            $flag=1;
            }
        }      
        
        $s=$_FILES['myfile']['tmp_name'];
        @ $d=$_SERVER['DOCUMENT _ROOT']."upload/".$_POST['filename'].".".$ext;
 
    if(move_uploaded_file($s,$d))
    {
        echo "File Succesfully Uploaded"."<br>";
    }
    
    else
    {
        echo"<font color='red'>Try Again</font>";
    }
}


    else
    {
    $s=$_FILES['myfile']['tmp_name'];
   @$d=$_SERVER['DOCUMENT _ROOT']."upload/".$_FILES['myfile']['name'];
    if(move_uploaded_file($s,$d))
    {
        echo "File Succesfully Uploaded"."<br>";
    }
    else
    {
        echo"<font color='red'>Try Again</font>";
    }
    
    }
}    
if(true)
{

@ $link=opendir("./upload/");
    while(@$filename=readdir($link))
    {
        if($filename=="." || $filename=="..")
        {
            continue;
        }
        
        else
        {
            echo"<a href='download.php?name=$filename'>$filename</a><br/>";
        }
    }
@ closedir($link);
}

?>
<tr><td><b><hr />Comments:</b></td></tr>
<?php
$query="SELECT * FROM hhcomments";

$result=mysqli_query($connection,$query);

//$row=mysqli_fetch_assoc($result);
$var1=2;
while($row=mysqli_fetch_assoc($result))
{
    if($var1%2){
        $style="orange";
    }
    else{
        $style="white";
    }
    echo "<tr class=".$style.">
<td><br />
<div style='width:500px;height:auto;'>
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
<textarea style="background-color:white;" name="text" rows="7" cols="70"></textarea>
<br />
</td>
</tr>

<tr>
<td>
<input style="width: 100px;" type="submit" name="sub1" value="Post Comment"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</td>

</tr>
</tbody>
</table>

</form>

</body>
</html>

<?php
/*if(isset($_POST['sub2']))
{
    $s=$_FILES['myfile']['tmp_name'];
   @ $d=$_SERVER['DOCUMENT _ROOT']."upload/".$_FILES['myfile']['name'];
    if(move_uploaded_file($s,$d))
    {
        echo "File Succesfully Uploaded"."<br>";
    }
    else
    {
        echo"<font color='red'>Try Again</font>";
    }
}


closedir($link);
*/

?>
</center>
<!-- Entering comment in database -->
<?php

if(isset($_POST['sub1']))
{
   
   @ $t=$_POST['text'];

if(!empty($t)){
    
require_once ('config.php');
 


$query="INSERT INTO hhcomments (text) VALUES ('$t')";

if(mysqli_query($connection,$query))
{
    echo '<script> alert("Comment Posted.\nPage will be refreshed")</script>';
}
echo '<script>window.location.assign("hh.php")</script>';

}
else{
  echo '<script> alert("Blank Comment.Try Again")</script>';

echo '<script>window.location.assign("hh.php")</script>';  
}

}

?>

    </div>
    </td>
    </tr>
    </tbody>
    </table>
    
      <!--footer-->
                   <div style="clear: both;margin-top: 80px;">
                     <?php include_once ('foot.php') ?>
                    
              </div>
        
    
</div>
</body>
</html>

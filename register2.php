<html>
<head>
<title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="CSS/demo.css"/>
       <style>
    table,th,td{
        padding:5px;
        border-spacing: 5px;
        
    }
    </style>
</head>

<table align="center" style="border-spacing:5px">
 <tbody align="center">

<tr>
<td colspan="3">
<h1 style="color: #ED1B10;font-size: 64px;text-align:center;">INSPIRAR<br /></h1>
<h6>LIFE IN MAIT</h6>	
</td>
</tr>
 
 <tr>
 <td style="width: 650px;height: 600px;">
 
 
 
 <!--Main SECTION Follows NOw -->

<form method="POST">


<center>
<table>
<tbody>
<tr>
<td>
<fieldset>
<h1 style="font-size: 24px;"><b>New User</b></h1>
</td>
</tr>
<tr><td>Enrollment No.<span style="color:red;" >*</span></td>  <td><input type="number" name="enrollno" required=""/></td></tr>

<tr>
<td colspan="2" >Batch(<span style="font-size: small;">Year Enrolled</span>):
<select name="year" required="">
    <option value="-1">--Year--</option>
        <?php
        $j=date("Y");
        for($i=2012;$i<=$j;$i++){
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>&nbsp;&nbsp;&nbsp;&nbsp;Branch:
<select name="branch">
    <option value="-1">--Branch--</option>
        <?php
        $options="CSE IT EEE ECE MAE";
        
        $option=explode(' ',$options);
        
        foreach($option as $i){
        echo "<option value='$i'>$i</option>";
        }
        ?>
    </select></td></tr>
    

<tr><td>Name:</td> <td><input type="text" name="name"  required=""/></td></tr>

<td>Sex:</td><td><input type="radio" name="sex" value="Male" />Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="Female" />Female</td></tr>


<tr><td>Mobile No.:</td><td><input type="number" name="mobile" maxlength="10"/></td></tr>

<tr><td>Email:</td><td><input type="email" name="email"/></td></tr>



<!--<tr><td>Date of Birth</td><td><input type="date" name="dob" /></td></tr>-->


    
    <tr><td>Password: </td><td>Confirm Password: </td></tr>
<tr><td><input type="password" name="password"/></td><td><input type="password" name="password2"/></td></tr>


<tr style="height: 15px;"></tr>
<tr><td colspan="2"><input type="checkbox" name="condn1" /><span style="color:red;" >*</span>I acknowledge my Enrollment No. is my Username for Login</td></tr>

<tr><td colspan="2"><input type="checkbox" name="condn2" checked=""/>I have read <a href="tc.html" target="_blank" style="text-decoration: none;">Terms and Conditions</a> and accept them</td></tr>

</tbody>
</table>

<input type="submit" value="Register" name="register" />
</fieldset>
<?php

if(isset($_POST['register']))
{
   
    
    function password_check()
    {
        if(($password=$_POST['password'])==($_POST['password2'])){
            return 1;
        }
        else{ 
            echo '<span style="color:red;" ><br />Password mis-match</span>';
            return 0;}
    }
    
    function condition_check()
    {
        if(isset($_POST['condn1']) && isset($_POST['condn2'])){
        return 1;
    }else{echo('<span style="color:red;" ><br />Check the Checkboxes</span>');
     return 0;
    }
    }
    
    function enrollno_check()
    {
        
        $enrollno=$_POST['enrollno'];
        $year=$_POST['year'];
      
        $i=$enrollno;
        $temp=($i-floor($i/100)*100);
        $temp2=$year%100;
        if($temp==$temp2){
            return 1;;
        }
        else{echo('<span style="color:red;" ><br />Check Details again</span>');
        return 0;
        }
    
    }
    
    
    //Checking conditions
   if( enrollno_check() && condition_check() && password_check())
   {
    
    //Databsae connecting
    require_once('config.php');
    
    
    //$query='INSERT INTO login (enroll_no,year,branch,name,sex,mobile,email,password) VALUES ('.$_POST["enrollno"].','.$_POST["year"].','.$_POST["branch"].','.$_POST["name"].','.$_POST["sex"].','.
   // $_POST["mobile"].','.$_POST["email"].','.$_POST["password"].');';
   $year=$_POST["year"];
   $branch=$_POST["branch"];
   $sex=$_POST["sex"];
   $mobile=$_POST["mobile"];
   $email=$_POST["email"];
   $password=$_POST["password"];
   $name=$_POST["name"];
   $enrollno=$_POST["enrollno"];
    
   $query="INSERT INTO login1 (enroll_no,year,branch,name,sex,mobile,email,password) VALUES ('$enrollno','$year','$branch','$name','$sex','$mobile','$email','$password' )";
    
    if(mysqli_query($connection,$query))
    {
    echo '<center><script> alert("Registration Successfull \nRedirecting to Homepage...")</script></center>';
    echo '<script>window.location.assign("home.php")</script>';
    }
    else{
      echo "Error in saving details to database".mysqli_error($connection);
    }
    
   }
  
}



?>



</form>
</center>


 </td>

<center>
<form method="post">
<td>
<br /><br />
<div style="float: left;width: 450px;height: 350px;">
<h1 style="font-size: 64px;">LOGIN</h1><br /><br />
Enrollment No.<span style="color:red;" >*</span><input type="number" name="enrollno" required=""/><br /><br />
Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="passwor"/><br /><br />
<input type="submit" name="sub1" value="LOGIN"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="btn2" value="RESET"/>
<?php
if(isset($_POST["sub1"])){
$username=$_POST["enrollno"];
$passwor=$_POST["passwor"];
$passworddb="";
$name="";


function password_check($passworddb)
    {    $passwor=$_POST["passwor"];
        if(($passwor==$passworddb))
        {   
            SESSION_start();
            $_SESSION['enrollno']=$_POST["enrollno"];
            $_SESSION['password']=$passworddb;
            header("location:home.php");
            return 1;
        }
        else{ 
            echo '<center><span style="color:red;" ><br />Check Username and Password</span></center>';
            return 0;}
    }
    

require_once('config.php');
    
$query="SELECT password,name FROM login1 WHERE enroll_no='$username';";

$result=mysqli_query($connection,$query);

if(mysqli_affected_rows($connection)==1){
    
    while($row=mysqli_fetch_array($result)){
        $passworddb=$row["password"];
        $name=$row["name"];
      password_check($passworddb);  
    }
}
else{
  echo '<center><span style="color:red;" ><br />User Not Registered.</span></center>';
}



}

?>

</div>
</td>
</form>



</center>
 
 <!--footer-->
                   <div style="clear: both;margin-top: 80px;">
                     <?php include_once ('foot.php') ?>
                    
              </div>
        
 

</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link href="CSS/demo.css" type="text/css" rel="stylesheet"/>
        <link href="CSS/style.css" type="text/css" rel="stylesheet"/>
        
    </head>
    <body >
        <table align="center">
            <tbody>
            <tr>
            <td style="width: 950px;"></td>
            <td style="width: auto;"><b><i>Welcome</i></b>
            <?php
            session_start();
            
            if (@$_SESSION['enrollno'] != "") {
                echo $_SESSION['enrollno'];
            } else {
                echo "Guest";
            }
            ?>

            </td>
            
            <td>


            </td>
            </tr>
            </tbody>
        </table>
        
        <div class="container">
            <header>
	        
	
                <!--nav-->                
                <?php include_once ('nav.php') ?>
                        
                 <!--slider-->
                  <div style="margin-left: auto;margin-right: auto; width: 970px; height: 510px;margin-top: 20px;margin-bottom: 20px;">
                    <img src="images/102.jpg" id="frame" style=" width: 970px; height: 510px;" />
                 </div>
                 <script type="text/javascript" src="JavaScript/Slider.js"></script>
                              
                 

        <table align="center" style="border-spacing:5px;margin-top: 40px;margin-bottom: 30px;">
            <tbody align="center">
             
            <tr>
            
             <td style="width: 300px;height: 250px;">
                 <a href="https://www.facebook.com/tnm.maitfest"><img src="images\t.jpg" height="250" width="300"/>
                 <p>TECHSURGE AND MRIDANG <br /> ANNUAL FEST</p></a>
             </td>
            
             <td style="width: 30px;height: 250px;"></td>
            
             <td style="width: 300px;height: 250px;">
                <a href="https://www.facebook.com/pages/EXPRESSIONS-The-Art-Society-of-MAIT/144563058966367?fref=ts"> <img src="images\6.jpg" height="250" width="300"/>
                 <p>EXPRESSION <br /> THE ART SOCIETY OF MAIT</p></a>
             </td>
             
             <td style="width: 30px;height: 250px;"></td>
             
             <td style="width: 300px;height: 250px;">
                 <a href="https://www.facebook.com/aayaam.mait/photos_stream"><img src="images\2.jpg" height="250" width="300"/>
                 <p>AAYAAM <br /> THE DRAMATIC SOCIETY OF MAIT</p></a>
             </td>
             </tr>
             </tbody>
         </table>
        
        
        
        <!--footer-->
        <?php include_once ('foot.php') ?>
          
            </header>  
         </div>
         
        
    </body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Demo Drop Down Responsive Menu with CSS/jQuery</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery lib from google server ===================== -->
	<script src="js/jquery-1.7.2.min.js"></script>
<!--  javaScript -->
<script>  
<!--  // building select nav for mobile width only -->
$(function(){
	// building select menu
	$('<select />').appendTo('nav');

	// building an option for select menu
	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Choise Page...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});

	// on clicking on link
	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});

// show and hide sub menu
$(function(){
	$('nav ul li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(150);
		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(150);			
		}
	);
});
//end
</script>
<!-- end -->
</head>
<body>
<div class="container">
			
     <!-- start header here-->
	<header>
		<div id="fdw">
				<!--nav-->
                <table align="center">
                <tbody>




<tr>
<td>
<h1 style="color: #ED1B10;font-size: 50px;text-align:center;">INSPIRAR<br /></h1>
<h6>LIFE IN MAIT</h6>	
</td>
<td style="width: 60px;"></td>
                <td>
				<nav>
						<ul>
							      <li>
								<a href="home.php">HOME<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="about.php">ABOUT US</a></li>
                                    </ul>
                                    </li>   
                            <li>
								<a href="#">DEPARTMENTS<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="cse.php">CSE Department</a></li>
									<li><a href="ece.php">ECE Department </a></li>
									<li><a href="it.php">IT Department</a></li>
									<li><a href="eee.php">EEE Department</a></li>
					    	    	<li><a href="mae.php">MAE Department</a></li>
								
                                </ul>
							</li>
						
      
						
						 <li>
								<a href="#">SOCIETY<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="aayaam.php">Aayaam(dramatic)</a></li>
									<li><a href="aura.php">Aura(dance)</a></li>
									<li><a href="fim.php">FIM(dance)</a></li>
									<li><a href="express.php">Expressions(art)</a></li>
					    	    								
                                </ul>
							</li>
							
                            <li>
								<a href="hh.php">HELPING HAND</a>
								
							</li>
						
                        	<li><a href="blog.php">BLOG</a></li>
							<li><a href="contact.php">CONTACT</a></li>
						</ul>
                        
					</nav>
                    </td>
                    </tr>
                    


</tbody>  
</table>
                    
		</div><!-- end fdw -->
	</header><!-- end header -->
    
    <table align="center">
    <tbody>
    <tr>
<td colspan="">
<h1 style="color: #ED1B10;font-size: 25px;">CSE DEPARTMENT</h1>
</td>
</tr>
    <tr>
    <td>
    <div style="background-color: black;height:500px;width:700px;">
    <img src="images\12.jpg" width="700" height="250"/>
    <p style="color: white;text-align: center;">Text</p>
    <p style="color: white;text-align: center;">Text</p>
    <p style="color: white;text-align: center;">Text</p>
    <p style="color: white;text-align: center;">Text</p>
    <p style="color: white;text-align: center;">Text</p>
    <p style="color: white;text-align: center;">Text</p>
    </div>
    </td>
    <td>
    <div style="height:500px;width:260px;">
    <p style="text-align: center;">Notice</p>
    <marquee scrolldelay="10" direction="up" style="text-align: center;" >
    <a href="#" >Link 1</a><br /><br />
    <a href="#" >Link 1</a><br /><br />
    <a href="#" >Link 1</a><br /><br />
    <a href="#" >Link 1</a><br /><br />
    </marquee>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    
    <table align="center">
<tbody>
<tr>
<td style="height: 50px;"></td>
</tr>
  <tr>
  <td>
  <p>Contact :</p>
  <p>+91 9968118893</p>
  <p>+91 8287983838</p>
  </td>
  <td style="width:960px;height: 50px;text-align: center;">
  <h5>&copy; U.S.Copyright , All Rights Reserved</h5>
  </td>
  
  <td>
  <div >
  <a href="#"> <img src="images\f.png" height="50"width="50"/></a>
  <a href="#"> <img src="images\t.png" height="50"width="50"/></a>
  <a href="#"> <img src="images\g.png" height="50"width="50"/></a>
  
  </div>
  </td>
  </tr>
 </tbody>
 </table>
    
</div>
</body>
</html>

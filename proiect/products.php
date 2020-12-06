<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simple Theme</title>
<link href="css/products.css" rel="stylesheet" type="text/css">
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<link href="css/colors.css" rel="stylesheet" type="text/css">
<script src="javaScript/slidedown.js"></script>
	
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
        body{
            font-family: 'Dancing Script', cursive;
        }
    </style>
</head>
<body>
	<div class="bg"></div>
	<div class="bg bg2"></div>
	<div class="bg bg3"></div>

<div class="container">
	
  <header>
    <nav class="secondary_header" id="menu">
      <ul>
		<li><img onclick="location.href='Untitled-1.html'" src="https://cdn.discordapp.com/attachments/697470483813367821/777891384098291732/DGpalette2.png" ></li>
        <li class="d12"  ><a class="links hacked" href="Untitled-1.html" style="font-size:150%;">Home</a></li>
        
        
        <li class="d12" id="login"><a class="links hacked" href="login.php" style="font-size:150%;" >register</a></li>
		  
      </ul>
		
    </nav>
	  <nav class="secondary_header" style="height:100%;margin: 0px; padding-bottom:30px" >
      	
	
		
			
			<div class="button"><button class="block hacked" onclick="location.href='cart.php'"   style="position: absolute">Cart</button></div>
			
		 
		 
		 
    </nav>
	 <nav class="secondary_header" style="height:100%;margin: 0px; padding: 0px" id="menu2">
      	
	
		
			
			<div class="button"><button class="block hacked"  onkeypress="function1()" onClick="function1()" style="position: absolute">Show filters</button></div>
			
		<div   class="filter" id="filter">
		 <form >
			 <table class="try " style="width: 100%;">
				<tr>
					<td>
						<input type="checkbox"  name="gen" value="">
						<label for="gen">gen</label><br>
					</td>
					<td>
						<input type="checkbox"  name="gen" value="">
						<label for="gen">gen</label><br>
					</td>
				</tr>
				 <tr>
					<td>
						<input type="checkbox" name="gen" value="">
						<label for="gen">gen</label><br>
					</td>
					 <td>
						<input type="checkbox" name="gen" value="">
						<label for="gen">gen</label><br>
					</td>
				</tr>
				 <tr>
					
				</tr>
				 
			 </table>
		</form>
			</div>
		 
		 
		 
    </nav>
	  
  </header>
  
	
  <div class="row">
  <?php
	function f1(){
		?><script type="text/javascript">alert(<?php echo $_GET['hello']?>);</script>
		<?php
	}
	if (isset($_GET['hello'])) {
    f1();
  }
	
	
	
	$conn =mysqli_connect("localhost","root","","users");
	//mysqli_select_db($conn,"products");
	$res=mysqli_query($conn,"select * from products ORDER BY  Price desc");
	if (!$res) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
	while($row=mysqli_fetch_array($res))
	{
		echo '<div class="columns">';
		?><p  class="thumbnail_align"> 
		<img onclick="location.href='aGame.php?hello=<?php echo $row['ID'];?>'" src="<?php echo $row["Img"];?>" alt="" class="thumbnail"/>
		</p><h4><?php echo $row["Name"];?></h4></p><h4>Price: <?php echo $row["Price"];?></h4></div>
		
<!--"location.href='<?php echo 'aGame.php';?>'"-->
		<?php
		
	}

?>
		
  
  
  
  
    
  </div>
  
  <div class="social">
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
	<p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
  </div>
  <footer class="secondary_header footer">
    <div class="copyright">&copy;</div>
  </footer>
</div>
</body>
</html>

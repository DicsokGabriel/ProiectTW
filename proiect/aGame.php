<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simple Theme</title>
<link href="css/aGame.css" rel="stylesheet" type="text/css">
<link href="css/colors.css" rel="stylesheet" type="text/css">
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="bg"></div>
	<div class="bg bg2"></div>
	<div class="bg bg3"></div>

<div class="container">
	
  <header>
    <nav class="secondary_header" id="menu">
      <ul>
		<li><img onclick="location.href='Untitled-1.html'" src="https://cdn.discordapp.com/attachments/697470483813367821/777891384098291732/DGpalette2.png" style="width:80%"></li>
        <li class="d12"  ><a  class="links hacked" href="products.php">PRODUCTS</a></li>
        
        
        <li class="d12" id="login" ><a class="links hacked" href="login.php">register</a></li>
      </ul>
    </nav>
	  <nav class="secondary_header" style="height:100%;margin: 0px; padding-bottom:30px" >
      	
	
		
			
			<div class="button"><button class="block hacked" onclick="location.href='cart.php'"   style="position: absolute">Cart</button></div>
			
		 
		 
		 
    </nav>
  </header>

	<?php
	
	
	$conn =mysqli_connect("localhost","root","","users");
	//mysqli_select_db($conn,"products");
	$res=mysqli_query($conn,"select * from products where ID =" . $_GET['hello']);
	if (!$res) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
	$row=mysqli_fetch_array($res);
	
	
	?>
  <div class="row">
	<div class="columns">
      <p onclick="" class="thumbnail_align"> <img src='<?php echo $row['Img'] ?>' alt="" class="thumbnail"/> </p>
      </p><h4><?php echo $row["Name"];?></h4></p><h4>Price: <?php echo $row["Price"];?></h4>
	</div>
	  <div class="columns" >
	  <p onclick="location.href=''" class="thumbnail_align hacked"><input class="d10" style="padding-top:25%;" type="image" src="https://cdn.discordapp.com/attachments/697470483813367821/778374133984919552/add.png" width=100% /></p>
      
      
	</div>
  	<div class="columns">
      <p onclick="location.href=''" class="thumbnail_align" style="font-family:Helvetica; color:#a7ff83"> Description <?php echo $row['Description'] ?></p>
      
	</div>
	  
    
  </div>
	  <div class="row blockDisplay">
		<div class="column_half left_half"> </div>
		<div class="column_half right_half"> </div>
	  </div>
	  
	  <footer class="secondary_header footer">
		<div class="copyright">&copy;</div>
	  </footer>
</div>
</body>
</html>

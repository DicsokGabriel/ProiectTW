

<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simple Theme</title>
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<link href="css/cart.css" rel="stylesheet" type="text/css">
<link href="css/colors.css" rel="stylesheet" type="text/css">
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
		<li class="d11" ><img onclick="location.href='Untitled-1.html'" src="https://cdn.discordapp.com/attachments/697470483813367821/777322385799774208/DGpalette.png" style="width:80%"></li>
        <li><a  class="links hacked" href="products.php"><img style="width:60%; padding-top:10px;" src="https://cdn.discordapp.com/attachments/697470483813367821/778378445670580248/products.png"></a></li>
        
        
        <li class="d11" id="login" ><a class="links hacked" href="login.php"><img style="width:60%; padding-top:10px;" src="https://cdn.discordapp.com/attachments/697470483813367821/785150291250380800/register.png" ></a></li>
      </ul>
    </nav>
  </header>
<div>

		<form method="post" action="cart.php">
			<table class="cent">
				<tr>
    				<th><h2 style="color:#17b978; margin-left:auto; margin-right:auto;" class="hacked"  >Place Order</h2></th>
				</tr>
				<tr>
    				<th><label for="email" name="message" class="labe"><b>First Name</b></label></th>
				</tr>
				<tr>
					<td><input class="inp" type="text" placeholder="Enter First Name" name="fname" id="fname" required></td>
  				</tr>
				<tr>
   					<th><label for="psw" class="labe"><b>Last Name</b></label></th>
				</tr>
				<tr>
    				<td><input class="inp" type="text" placeholder="Enter Last Name" name="lname" id="lname" required></td>
    				
  				</tr>
				<tr>
					<th><label for="psw-repeat" class="labe"><b>Enter Full Address</b></label></th>
				</tr>
				<tr>
					<td><input class="inp" type="text" placeholder="Enter Full Address" name="faddr" id="faddr" required></td>
					
				</tr>
				<tr>
					<td><button class="btn-grad" >Proceed</button></td>
					
				</tr>
			</table>
			
		</form>
		
		
	</div>
  <div class="row">
    <div class="columns"> </div>
    <div class="columns">
      <p onclick="location.href=''" class="thumbnail_align">&nbsp; </p>
</div>
    <div class="columns">
      <p onclick="location.href=''" class="thumbnail_align">&nbsp; </p>
</div>
    <div class="columns">
      <p onclick="location.href=''" class="thumbnail_align">&nbsp; </p>
</div>
  </div>
	  <div class="row blockDisplay">
		<div class="column_half left_half"> </div>
		<div class="column_half right_half"> </div>
	  </div>
	  <div class="social">
		<p class="social_icon">&nbsp;</p>
		<p class="social_icon">&nbsp;</p>
		<p class="social_icon">&nbsp;</p>
		<p class="social_icon">&nbsp;</p>
	  </div>
	  <footer class="secondary_header footer">
		<div class="copyright">&copy;</div>
	  </footer>
</div>
</body>
</html>
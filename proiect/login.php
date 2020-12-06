
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simple Theme</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
<link href="css/colors.css" rel="stylesheet" type="text/css">
<link href="stylesheet.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="jquery-3.5.1.js"></script>


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
			<li style="padding-right: 17%;"><img onclick="location.href='Untitled-1.html'" src="https://cdn.discordapp.com/attachments/697470483813367821/777322385799774208/DGpalette.png" style="width:200%;"></li>
		</ul>
	<div>
		<form id="form1" action="index.php" method="post">
			<table class="cent">
				<tr>
    				<th><label  for="email" class="labe hacked"><b>Email</b></label></th>
				</tr>
				<tr>
					<td><input class="inp" type="text" placeholder="Enter Email" name="email" id="email" required></td>
  				</tr>
				<tr>
   					<th><label for="psw" class="labe hacked"><b>Password</b></label></th>
				</tr>
				<tr>
    				<td><input class="inp" type="password" placeholder="Enter Password" name="psw" id="psw" required></td>
    				
  				</tr>
				<tr>
					<th><label for="psw-repeat " class="labe hacked"><b>Repeat Password</b></label></th>
				</tr>
				<tr>
					<td><input class="inp" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required></td>
					
				</tr>
				<tr>
					<th><label id="label1"  class="labe hacked"><b></b></label></th>
				</tr>
				<tr>
					<td><button  name="button1" id="button1" type="submit" class="btn-grad hacked"  >Register</button></td>
					
				</tr>
				</form>
				
				<tr >
					<td ><button  onclick="window.location.href='login2.php'" class="btn-grad hacked">LoGIN</button></td>
					
				</tr>
		
				</table>
			
				
		
	</div>
    </nav>
	<?php 
	
	include('ajax.js');?>
	
	
</header>
  
</div>
</body>
</html>

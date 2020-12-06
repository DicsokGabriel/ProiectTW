<script type="text/javascript">
function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validatePassword(pass) {
    const re = /^.{8,}$/;
    return re.test(String(pass).toLowerCase());
}




$(document).ready(function(e){
	
	$('#button1').click(function(e){
		
		var pass = document.getElementById("psw").value;
		var rpass = document.getElementById("psw-repeat").value;
		var Email = document.getElementById("email").value;
		
		
		
		
		if(pass==rpass && validateEmail(Email) )
		{
			e.preventDefault();
			
			$.ajax({
				method: "post",
				
				url: "Insert_Data.php",
				data: $('#form1').serialize(),
				dataType: "text",
				success: function(e){
					location.href ="login2.php";
					$('#label1').text();
				}
			})
		}
		else
		{
			e.preventDefault();
			$.ajax({
				method: "post",
				
				url: "",
				data: $('#form1').serialize(),
				dataType: "text",
				success: function(response){
					$('#label1').text("Email sau parola incorecte");
					
				}
			})
			
		}
		
	})
	
});

</script>
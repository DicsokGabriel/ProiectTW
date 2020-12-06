<script type="text/javascript">

$(document).ready(function(e){
	
	$('#button1').click(function(e){
			e.preventDefault();
			$.ajax({
				method: "post",
				
				url: "readData.php",
				data: $('#form1').serialize(),
				dataType: "text",
				success: function("readData.php"){
					$('#label1').text("readData.php");
				}
			})
	})
	
});

</script>
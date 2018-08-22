<!DOCTYPE html>
<html>
<head><title>Dynamic searchbar</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<style type="text/css">
ul{
	background-color:#eee;
	cursor:pointer;
}
li{
	padding:12px;
}
</style>
</head>
<body>
	<br>
	<br>
	<h3 align="center">SEARCH COUNTRY NAMES</h3>
	<br>
<div class="container" style="width:500px;">
<label>Enter Country Name</label>
<input type="text" id="bar" name="bar" class="form-control" placeholder="Enter the country name"/>
<div id="result">
</div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
	$('#bar').keyup(function(){
		var query=$(this).val();
		if(query!="")
		{
			$.ajax(
			{
				url:"search.php",
				method:"POST",
				data:{query:query},
				success:function(data)
				{
					$('#result').fadeIn();
					$('#result').html(data);
				}
			});
		}
		$(document).on('click','li',function()
		{
			$('#bar').val($(this).val());
			$('#result').fadeOut();
		});
	});
});
</script>

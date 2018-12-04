<!DOCTYPE html>
<html>
<head>
	<title>Update data with POST:</title>
	<script type="text/javascript">
		function insert(){
			//Ktu marim vleren e inputit text dhe e shfaqim ne alert:
			var text_value = document.getElementById('insert_text').value;
			alert(text_value);

		}
	</script>
</head>
<body>
<!-- Ideja ketu eshte qe ti marim te dhenat permes input formes duke perdorur metoden GET,
							ato te dhena ti fusim ne funksion -->

	<p>INSERT-o:</p>
	<input id="insert_text" type="text" name="text">
	<input type="button" value="Submit" onclick="insert();">

</body>
</html>
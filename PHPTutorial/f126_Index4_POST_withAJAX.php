<!DOCTYPE html>
<html>
<head>
	<title>Update data with POST in Database:</title>
	<script type="text/javascript">
		function insert(){
				//Ktu krijojm pjesen me AJAX:
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
				//Tani kontrollojm ndryshimet e gjendjes:
			xmlhttp.onreadystatechange = function() {
					//Ketu kontrollojm per gjendjen e State:
			    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			        document.getElementById('message').innerHTML = xmlhttp.responseText;
			    }
			};
				//Krijojm disa parametra qe deshirojm ti dergojm permes xmlhttp.setRequestHeader:
			parameters = 'text='+document.getElementById('text').value;

			xmlhttp.open('POST','f126_UPDATEinc4_POST_withAJAX.php', true);
				//Set a request header and we're going to go to the content type of 
				//when we submit so:
				//Ne kete menyr behet dergimi i te dhenave si nje postim:
			xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
			xmlhttp.send(parameters);
		}
	</script>
</head>
<body>


	<p>INSERT-o:</p>
	<input id="text" name="text" type="text">
	<input type="button" value="Submit" onclick="insert();">
		<!--Ketu krijojm nje div i cili mer perditsimet nga fjalli                    
							//f126_UPDATEinc2_POST_withAJAX.php-->
	<div id="message">
		
	</div>
</body>
</html>
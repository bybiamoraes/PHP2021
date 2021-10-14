<!DOCTYPE html>
<html lang=pt>
	<head>
	
		<meta charset="UTF-8">
		<title>Pagina Pessoal</title>
		<style type="text/css">
			header{
			    font-size: 45px;
			    font-family: calibri;
				width: 50%;
				height: 310px;
				margin: auto;
				margin-top: 30px;
				border-radius: 10px;
				background-color: snow;
			}
			.sct{
			    font-size: 22px;
			    font-family: calibri;
				width: 50%;
			    position: relative;
				margin: auto;
				border-radius: 10px;
				background-color: snow;
				margin-top: 10px;
            }
			#sct01{
				
				height: 220px;

			}
			#sct02{
				
				height: 420px;

			}
			.photo{
			width: 169px;
			height: 219px;
			border-radius: 10px;
			margin-left: 40px;
			}

							
			
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
				 $(document).ready(function() {
					$("#header").load("menu.php"   );
					$("#sct01" ).load("sc01.php");
					$("#sct02" ).load("sc02.php");
					
				});
		</script>
		
	</head>
<body bgcolor="#FFF0F5">

	<header id="header"></header>
	<section class="sct" id="sct01" ></section>
	<section class="sct" id="sct02"></section>
	
</body>
</html>
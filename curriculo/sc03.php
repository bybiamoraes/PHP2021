
<form id="frmLogin">
	Deseja visualizar minhas especializações?  <input type="text" name="user" ><br>
	<input type="button" id="btnEnviar" value="Enviar">
</form>


<script type="text/javascript">
	$(document).ready(function() {
		$("#btnEnviar").click(function() {
			var url   = "sc04.php";
			var dados = $("#frmLogin").serialize();
			$.post( url, dados, function( responseText ) {
				$("#sct02" ).html( responseText );
			} );
		});
	});
</script>


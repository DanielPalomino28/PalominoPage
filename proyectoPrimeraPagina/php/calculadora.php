<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link type="text/css" rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<div class="container">
		<form method="post">
			<input type="text" name="result" value="<?php echo isset($_POST['result']) ? $_POST['result'] : ''; ?>">
			<input type="button" value="1" onclick="document.forms[0].result.value += '1'">
			<input type="button" value="2" onclick="document.forms[0].result.value += '2'">
			<input type="button" value="3" onclick="document.forms[0].result.value += '3'">
			<input type="button" value="+" onclick="document.forms[0].result.value += '+'">
			<br>
			<input type="button" value="4" onclick="document.forms[0].result.value += '4'">
			<input type="button" value="5" onclick="document.forms[0].result.value += '5'">
			<input type="button" value="6" onclick="document.forms[0].result.value += '6'">
			<input type="button" value="-" onclick="document.forms[0].result.value += '-'">
			<br>
			<input type="button" value="7" onclick="document.forms[0].result.value += '7'">
			<input type="button" value="8" onclick="document.forms[0].result.value += '8'">
			<input type="button" value="9" onclick="document.forms[0].result.value += '9'">
			<input type="button" value="x" onclick="document.forms[0].result.value += '*'">
			<br>
			<input type="button" value="." onclick="document.forms[0].result.value += '.'">
			<input type="button" value="0" onclick="document.forms[0].result.value += '0'">
			<input type="button" value="C" onclick="document.forms[0].result.value = ''">
			<input type="button" value="/" onclick="document.forms[0].result.value += '/'">
			
			<input type="submit" value="=">
		</form>
		<?php
			if(isset($_POST['result'])) {
				$result = $_POST['result'];
				if(is_numeric(substr($result, -1))) {
					eval("\$result = $result;");
					echo '<p>Resultado: '.$result.'</p>';
				} else {
					echo '<p>Introduzca una operación válida</p>';
				}
			}
		?>
	</div>
</body>
</html>

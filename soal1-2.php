<!DOCTYPE html>
<html>
<head>
	<title>SLIP 2</title>
</head>
<body>
	<fieldset>
		<legend>TICKET ONLINE</legend>
			<form action="soal1-3.php" method="POST" enctype="multipart/form-data">
			<?php
		for($i=0; $i<$_POST['penumpang']; $i++){
		}
	?>
				<table>
					<tr>
						<td>Nama Penumpang :</td>
						<td><input type="text" name="penumpang" value=""><br></td>
					</tr>
				</table>
					<br>
					<input type="submit" value="Submit" name="submit">
					<input type="reset" name="reset" value="Reset">
			</form>
	</fieldset>
</body>
</html>
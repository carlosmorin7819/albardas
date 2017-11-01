<div class="panelContainer">
<?php 
		
		require 'CLASS/connect.php';
		
		if ($_POST) {
			$mail = $_POST['mail'];
			$pass = $_POST['pass'];


			$result = mysql_query("SELECT * FROM users WHERE mail = '$mail' AND pass = '$pass'");
			$row = mysql_fetch_array($result); 
			$type_user = $row['type_user'];

			if (mysql_num_rows($result)>0) {
				if ($type_user == 3) {
					echo "eres usuario normal";
				}else if ($type_user == 2) {
					echo "eres usuario admin";				
				}else if ($type_user == 1) {
					echo "eres usuario master";				
				}
				
				
				//echo "hola si se armo";
				//header("location: ../users.php");
			}else{
				echo "no";
				//echo "hola no se armo";
				//header("location: ../index.php");
			}
		}
	?>

	<form action="panel.php?template=1" method="post">
		<input type="text" name="mail" id="mail">
		<input type="text" name="pass" id="pass">
		<input type="submit" value="Enviar">
	</form>
					
</div>

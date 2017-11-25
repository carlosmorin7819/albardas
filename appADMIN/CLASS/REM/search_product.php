<?php
header( 'Content-type: text/html; charset=iso-8859-1' );
	require_once("../connect.php");

		if(!empty($_POST["keyword"])) {
		$query ="SELECT * FROM products WHERE name like '" . $_POST["keyword"] . "%' ORDER BY name LIMIT 0,6";
		$result = mysqli_query($con , $query);
		if(!empty($result)) {
		?>
		<?php
		foreach($result as $country) {
		?>
		<li class="list"><?php echo $country["name"]; ?></li>
		
		<?php } ?>


<?php } } ?>
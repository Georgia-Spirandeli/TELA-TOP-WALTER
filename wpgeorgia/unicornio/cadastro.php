<?php 
	$nome = $_POST ["nome"];
	$idade = $_POST ["idade"];
		$sql = "insert into cliente (nome, idade) values (?, ?)";
		$stmt = mysqli_prepare($con, $sql);
		mysqli_stmt_bind_param($stmt, "ss", $_POST["nome"], $_POST["idade"]);
		mysqli_stmt_execute($stmt);
		$result = mysqli_query($con,$sql);
?>

	<?php
		$dir = get_template_directory_uri();
		echo "<body background = '$dir/images/explodiu.gif'>";
	?>
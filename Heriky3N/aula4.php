<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="num">
				<label>Digite um número para repetição</label>
				<input type="int" name="Mes"/><br><br>
		</form>
    <?php
    $num = 10;
    echo str_repeat("PROZ <br>", $num);
    ?>
</body>
</html>
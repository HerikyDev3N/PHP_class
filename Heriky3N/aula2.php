<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
		<form method="POST">
				<label>Digite um número de 1 a 12</label>
				<input type="text" name="Mes"/><br><br>
		</form>
	<?php
		$variavel = $_POST["Mes"];
		switch ($variavel) {
			  case 1:
				  echo "O Mês é Janeiro";
			  break;
			  case 2:
				  echo "O Mes é Fevereiro";
			  break;
			  case 3:
				  echo "O Mes é Março";
			  break;
			  case 4: 
				  echo "O Mês é Abril";
			  break;
			  case 5:
				  echo "O Mês é Maio";
			  break;
			  case 6:
				  echo "O Mês é Junho";
			  break;
			  case 7:
				  echo "O Mês é Julho";
			  break;
			  case 8:
				  echo "O Mês é Agosto";
			  break;
			  case 9:
				  echo "O Mês é Setembro";
			  break;
			  case 10:
				  echo "O Mês é Outubro";
			  break;
			  case 11:
				  echo "O Mês é Novembro";
			  break;
			  case 12:
				  echo "O Mês é Dezembro";
			  break;
			  default:
				  echo "Esse mês não existe caralho KKKKKKKKKKK";
			  break;
		}
?>
</body>
</html>
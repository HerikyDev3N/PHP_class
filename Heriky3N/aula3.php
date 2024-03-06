<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pessoa1 = "Professor";
        $livro = "Harry Potter";

        if ($pessoa1 == "Professor" && $livro == "Harry Potter") {
            echo"Você tem 10 dias para devolver o $livro"; 
        } else if ($pessoa1 == "Aluno" && $livro == "Harry Potter") {
            echo "Você tem 3 dias para devolver o $livro";
        }

            
        
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Voce nasceu em $a e tera $i anos. <br>";
            if($i >= 18) {
                $v = "Ja pode votar";
                $d = "Ja pode dirigir";
            }
            else {
                $v = "não pode votar";
                $d = "não pode dirigir";
            }

            echo "Com essa idade voce $v e tambem $d";
        ?>
    </div>
</body>
</html>
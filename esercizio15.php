<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaLista($num, $tipo){
            $lista="";

            for($i =1; $i<=$num; $i++){
                if($i%2==0 || $i%5 ==0){
                    $lista = $lista. "<li> $i </li>";
                }
            }

            if($tipo == 'o'){
                $lista="<ol>".$lista."</ol>";
            }else{
                $lista="<ul>".$lista."</ul>";
            }


            
            echo $lista;
        }
        stampaLista(30, 'u');
    ?>
    
</body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        $frase = "Mañana es Lunes";
        $letra = "e";
        contar ($frase,$letra);
        function contar ($frase, $letra){
            echo substr_count ($frase, $letra);
        }
        
        ?>
    </body>
</html>

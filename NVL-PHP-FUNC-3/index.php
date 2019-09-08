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
        
        $frase = "Mañana es Linux o será windows";
        
        function contar ($frase){
             if (substr_count($frase, 'a')>0 && 
                 substr_count($frase, 'e')>0 &&
                 substr_count($frase, 'i')>0 &&
                 substr_count($frase, 'o')>0 &&
                 substr_count($frase, 'u')>0){
                return true;
             }else{
                return false;
             }
        }
        if (contar($frase)) {
            echo "LA PALABRA CONTIENE LAS 5 VOCALES";
        }else{
            echo "NO CONTIENE TODAS LAS VOCALES"; 
        }
        
        ?>
    </body>
</html>
 
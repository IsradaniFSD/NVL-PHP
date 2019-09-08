<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $DescriptorTexto = fopen("el_quijote.txt","r");
        $suma=0;
        while (!feof($DescriptorTexto)){
            $linea=fgets($DescriptorTexto);
            $num=0;
            if (substr_count($linea, 'molino')>0){
                $num= substr_count($linea, 'molino');
            }
             $suma=$num + $suma;       
        }
        echo $suma;
        
        
        
        
        ?>
    </body>
</html>


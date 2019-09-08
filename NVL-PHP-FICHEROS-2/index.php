<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $DescriptorTexto = fopen("el_quijote.txt","r+");
        $descriptorNuevo = fopen("nuevo_quijote.txt", "w+");
        $nombre ="Sancho"; 
        $nombreN ="Morty";    
        reemplazar ($DescriptorTexto, $descriptorNuevo,$nombre, $nombreN);
 
        function reemplazar($DescriptorTexto,$descriptorNuevo,$nombre, $nombreN){
            while (!feof($DescriptorTexto)){
            $linea=fgets($DescriptorTexto);
            
            if (substr_count($linea, $nombre)>0){
                $cambio = str_replace($nombre, $nombreN, $linea);
                fwrite($descriptorNuevo, $cambio. PHP_EOL);
            }else {
                fwrite($descriptorNuevo, $linea.PHP_EOL);
            }
            }
            return $descriptorNuevo;
        }
        fclose($DescriptorTexto);
        fclose($descriptorNuevo);        
        ?>
    </body>
</html>
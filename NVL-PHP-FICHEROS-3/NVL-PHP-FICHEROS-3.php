<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $fecha = time();
        $date = date("d-m-Y(H-i-s)", $fecha);
        mkdir($date, 0777, true);
        if (copy ('documento.docx', '$date')){
            echo 'el archivo se ha copiado';
        }else{
            echo 'no se ha copiado';
        }
        
        rename ('documento.docx', 'documento.modificado.docx');
        //rename ('documento.modificado.docx', $date);



        //$carpeta = 'D:\Xampp\htdocs\NVL-PHP\NVL-PHP-FICHEROS-3';
        //if (!file_exists($carpeta))
        //   //}
        // echo $date;
      
        // $from = "D:\Xampp\htdocs\NVL-PHP\NVL-PHP-FICHEROS-3";
      // Abro el directorio que voy a leer
       // $dir = opendir($from);

        //Recorro el directorio para leer los archivos que tiene
        // while(($file = readdir($dir)) !== false){
        //copy($from.'/'.$file, $fecha.'/'.$file);
        //}
        ?>
    </body>
</html>
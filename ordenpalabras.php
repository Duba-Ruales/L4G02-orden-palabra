<!-- Buscar los fragmentos de palabras que conforman
 una palabra del array 
 SALIDA: "base,ball" -->
 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <title>ordenpalabras</title>
 </head>

 <body>

 <br><br><br><br><br><br><br><br>

 <!--  -->

<center>

    <?php
    
    echo "ENTRADA = ";

    $array= ["baseball","cat,bas,hol,base,rar,pull,ball"];
    $palabra= explode(",",$array[1]);
    
    for($i=0; $i<count($array); $i++)
    { echo $array[$i]."<br>"; } //espace entre palabras...

    $tmp=" ";
    for($i=0; $i<count($palabra); $i++)
    {
        for($k=0; $k<count($palabra);$k++)
        {
            if ($k != $i)
            {  $tmp = $palabra[$i].$palabra[$k];

                     if ($tmp == $array[0])
                        {
                             echo "<br><br> SALIDA = ".$palabra[$i].",".$palabra[$k];
                         }
            }
        }
    }
    
?>

<br><br>

</center>

 </body>

 </html>


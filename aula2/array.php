<!DOCTYPE HTML>
<html>
    <head>
        <title>Arrays PHP</title>
    </head>
    <body>
        <?php   
            $cores = array("azul", "verde", "vermelho");
            echo $cores[0];

            $coresAssociativas = array(
                "ceu" => "azul",
                "relva" => "verde",
                "sangue" => "vermelho"
            ); 

            echo "<br>";
            echo $coresAssociativas["ceu"];
            echo "<br>";
            echo $coresAssociativas["relva"];
            echo "<br>";
            echo $coresAssociativas["sangue"];
      
        ?>

    </body>
</html>            

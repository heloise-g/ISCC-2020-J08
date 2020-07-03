<html>
    <head>
        <link type="text/css" rel="stylesheet" href="vitrine.css">
    </head>
    
    <?php include("header.php");
    ?> 
<a href="http://localhost/ISCC/ISCC-2020-J08/EX_02/index.php"><?php$_GET?></a>
    <nav class="navigation">
        <div class= "liens">
        <a href="http://localhost/ISCC/ISCC-2020-J08/EX_02/index.php?page=1">Accueil</a>
        <a href="http://localhost/ISCC/ISCC-2020-J08/EX_02/index.php?page=2">Programme</a>
        <a href="http://localhost/ISCC/ISCC-2020-J08/EX_02/index.php?page=3">Contact</a>
        </div>
    </nav>
    <body>
        <?php
            if ($_GET["page"]== 1){
                echo "<h1>";
                echo "Accueil";
                echo "</h1>";
                include("vitrine-accueil.php");
            }
            elseif ($_GET["page"]== 2){
                echo "<h1>";
                echo "Programme";
                echo "</h1>";
                include("vitrine-programme.php");
            }
            elseif ($_GET["page"]== 3){
                echo "<h1>";
                echo "Contact";
                echo "</h1>";
                include("vitrine-contacts.php");
            }
        ?>
        <?php 
        http_response_code(404);
        include("404.php");
        ?>
    </body>
    <?php include("footer.php");
    ?>
</html>
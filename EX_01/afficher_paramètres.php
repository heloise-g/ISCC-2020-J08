<html>
<a href="http://localhost/ISCC/ISCC-2020-J08/EX_01/afficher_param%C3%A8tres.php?param1=valeur&param2=valeur2"><?php$_GET?></a>
</html>

<?php
foreach($_GET as $key=>$value){
    echo "<ul>";
    echo "<li>";
    echo "clé :" . $key . ", valeur :" . $value;
    echo "</li>";
    echo "</ul>";
}
?>
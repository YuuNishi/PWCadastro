<?php 
    $title = "Sala de aula";
    include ("./header.php");
?>
<?php
    $title = "Sala de aula";
    include ("./search.php");
    echo '<br>';
    echo '<hr>';
?>
<?php
    $content = array();
    $content["Id"]=array(1,2,3,4,5);
    $content["Nome"] = array("Sala 01","Lab 02","Lab 03","Sala 5","Sala 2");
    $content["Sigla"]= array("","","","","");
    $content["Apelido"]= array("","", "", "", "");

    
    $index = array();
    $index = array_keys($content);

    

    
    include ("./table.php");
?>
<?php include ("./footer.php");?>
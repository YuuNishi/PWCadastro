<?php 
    $title = "Disciplinas";
    include "./header.php";
?>
<?php
    $title = "Disciplina";
    include ("./search.php");
    echo '<br>';
    echo '<hr>';
?>
<?php
    $content = array();
    $content["Id"]=array(1,2,3,4,5);
    $content["Nome"] = array("Português","Técnicas e Linguagem de Bancos de Dados I","Técnicas e Linguagem de Bancos de Dados I","Matemática","Sistemas Operacionais");
    $content["Sigla"]= array("","","","","");
    $content["Apelido"]= array("PT","TLBD I", "TLBD II", "MAT", "SO");

    
    $index = array();
    $index = array_keys($content);

    

    
    include ("./table.php");
?>

<?php include ("./footer.php");?>
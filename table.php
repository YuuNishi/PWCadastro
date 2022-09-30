<table class="table ">
    <thead>
        <tr>
            <th><?php echo $index[0]?></th>
            <th><?php echo $index[1]?></th>
            <th><?php echo $index[2]?></th>
            <th><?php echo $index[3]?></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        //$id = array_values();
        $i =0;
        $j=0;
            for($i = 0 ; $i<5;$i++){
                //for($j = 0; $j<4; $j++){
                    echo '<tr>';
                    echo'<td>'.$content["Id"][$i].'</td>';
                    echo'<td>'.$content["Nome"][$i].'</td>';
                    echo'<td>'.$content["Sigla"][$i].'</td>';
                    echo'<td>'.$content["Apelido"][$i].'</td>';
                    echo'<td>'.'<button type="button" class="btn btn-primary">Editar</button>'.'</td>';
                    echo'<td>'.'<button type="button" class="btn btn-warning">Excluir</button>'.'</td>';
                    echo '</tr>' ;
                //}
            }

        
        ?>
        
    </tbody>
</table>
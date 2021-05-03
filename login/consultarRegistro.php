<?php
    $query = "SELECT codigo,nome,endereco FROM tabela";
    $result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );
?> 
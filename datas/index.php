<?php
    //MEXENDO COM DATE
    //Ajustando o horário   
    date_default_timezone_set('America/Sao_Paulo'); 
    //MExendo com as datas e horas
    echo date('d/m/Y H:i:s');
    
    echo "<hr>";
    //Mexendo com Time
    $time = time();
    echo date('d/m/Y', $time);

    echo "<hr>";
    //MKTIME
    $dataPag = mktime(15,30,00,07,22,2024);
    echo date('d/m - h:i', $dataPag);
?>
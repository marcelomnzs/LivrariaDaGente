<?php
    $fp = fopen('cadastro.csv', 'w'); 
    fwrite($fp, $_POST['nomeUsuario'] . ";" . $_POST['email'] . ";". $_POST['senha'] . ";" . $_POST['confirma'] .";\n");
    fclose($fp);
?>
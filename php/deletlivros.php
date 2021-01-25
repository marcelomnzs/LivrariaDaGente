<?php

$recebe_livro= file('livros.csv');
$linha= $_GET['linha'];
unset($recebe_livro[$linha]);

$novolivro= implode('', $recebe_livro);
file_put_contents('livros.csv', $novolivro);

  ?>

  Deletado com sucesso, ver <a href="livroscadastrados.php">livros cadastrados</a>
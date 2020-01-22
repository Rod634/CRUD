<?php
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
/*$produto->setId(7);
$produto->setNome('lapis');
$produto->setDescricao('de cor');
*/
$produtoDAO = new \App\Model\produtoDAO();
//$produtoDAO->update($produto);
$produtoDAO->delete(8);
$produtoDAO->read($produto);

foreach ($produtoDAO->read() as $produto){
    echo $produto['nome'] . "<br>" . $produto['descricao'] . "<hr>";
}

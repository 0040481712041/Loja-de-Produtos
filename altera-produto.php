<?php include("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");

verificaUsuario();

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
if(array_key_exists('usado', $_POST)) {
    $usado = "true";
} else {
    $usado = "false";
}



if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) {  ?>
    <p class="text-success">Produto <?= $nome; ?>, no valor de R$ <?= $preco;?>, reais foi alterado com sucesso</p>
<?php  } else  { 

    $msg =mysqli_error($conexao);

?>
    <p class="text-danger">Produto <?= $nome; ?> não  foi alterado com sucesso <?=$msg?></p>
<?php
}

/* mysqli_close($conexao); */
?>

<?php include("rodape.php");?>
<?php require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");
require_once("alerta.php");?>

<?php mostraAlerta("success"); ?>


<table class="table table-striped table-bordered">
    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) :
    ?>
    <tr>
          <td><?= substr($produto['nome'], 0, 40)?></td>
          <td><?= substr($produto['preco'], 0, 10)?></td>
          <td><?=utf8_encode(substr($produto['descricao'], 0, 60))  ?></td>
          <td><?= $produto['categoria_nome']?></td>
          <td><a class="btn btn-primary my-2" href="produto-altera-form.php?id=<?=$produto['id']?>">Alterar</a></td>
          <td>
               <form action="remove-produto.php" method="post">
                 <input type="hidden" name="id" value="<?=$produto['id']?>">
                 <button class="btn btn-danger">Remover</button>
               </form>
          </td>
    </tr>
    <?php
       endforeach
    ?>
</table>



<?php include("rodape.php");?>
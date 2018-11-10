<?php require_once("cabecalho.php");
?>

<form action="envia-contato.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" class="form-control"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" id="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td>Mensagem</td>
            <td><textarea id="txta"cols="5" rows="4" class="form-control" name="mensagem" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td><button class="btn btn-info">Enviar</button></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php");?>
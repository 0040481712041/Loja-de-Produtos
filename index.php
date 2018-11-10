<?php require_once("cabecalho.php"); 
require_once("logica-usuario.php");
?>

<?php 
mostraAlerta("success"); 
mostraAlerta("danger"); 
?>


            <h1 id="h1_index">Seja bem-vindo</h1>
            <p></p>

<?php if(usuarioEstaLogado()) { ?>
<p class="text-success">Você está logado como <?= usuarioLogado() ?>.
<a href="logout.php">Deslogar</a></p>
<?php } else {?>

        
        <h2 id="h2_login">Login</h2>
       <form action="login.php"  method="post">
           
        <table>
            <tr>
                <td class="td1">Email</td>
                <td><input class="form-control2" type="email" name="email" required></td>            
            </tr>
            <tr>
                <td class="td1">Senha</td>
                <td><input class="form-control2" type="password" name="senha" required></td>
            </tr>
            <tr>
                <td><button class="btn btn-info2">Login</button></td>
            </tr>
        </table>
      </form>
      <?php } ?>


<?php include("rodape.php");?>

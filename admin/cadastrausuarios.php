<?php 
	include_once "connect.php";
	include_once "functions.php";
	protegePagina();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_once "template/header.php"; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Painel de Controle</title>
    </head>
    
    <body>
    <header>
        <a class="logo" href="index.php">eat&play </a>
    </header>
		<?php include_once "template/lateral.php"; ?>
    	<section class="conteudo">
            <div class="titulo">
                <h1>Usuários</h1>
                <a href="adicionacadastrausuarios.php"><img title="Adicionar" src="img/btn_adicionar.png"></a>
            </div>
            <table class="ExibeForm">
            	<thead>
            		<tr>
                    	<th>Nome:</th>
                        <th>Login</th>
                        <th>Status</th>
                        <th>Data de Modificação</th>
                        <th>Ação</th>
                    </tr>
				</thead>
                <tbody>
                <?php 
					$sql_select = "SELECT * FROM `users` ";
					$user = selecionar($_SG["link"], $sql_select);
					while($selecUsers = mysqli_fetch_assoc($user)){?>
					<tr>
                    	<td><?php echo $selecUsers['name']; ?></td>
                        <td><?php echo $selecUsers['login']; ?></td>
                        <td><?php echo $selecUsers['status']; ?></td>
                        <td><?php echo $selecUsers['date']; ?></td>
                        <td>
                        	<a class="btn btn-primary" href="editar.php?acao=atualizarUser&id=<?php echo $selecUsers['id']; ?>">Editar</a>
                            <a onClick="return ConfirmarAlteracao()" class="btn btn-secondary" href="query.php?deletarUser&id=<?php echo $selecUsers['id']; ?>">Excluir</a>
                        </td>
                    </tr>
					<?php 
					}?>
                </tbody>
            </table>

        </section>
    </body>
</html>
<script>
function ConfirmarAlteracao(){		if (confirm ("Deseja realmente excluir?"))		return true;	else		return false;}
</script>
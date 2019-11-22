﻿<?php 
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
                <h1>Mídia</h1>
                <a href="adicionaplaylist.php"><img title="Adicionar" src="img/btn_adicionar.png"></a>
            </div>
            <table>
            	<thead>
            		<tr>
                    	<th style="width:50%;">Título</th>
                        <th>Tipo</th>
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
				</thead>
                <tbody>
                <?php 
					$sql_select = "SELECT * FROM `medias` ORDER BY seq ";
					$media = selecionar($_SG["link"], $sql_select);
					while($selecMedia = mysqli_fetch_assoc($media)){?>
					<tr>
                    	<td><?php echo $selecMedia['title']; ?></a></td>
                        <td><?php echo $selecMedia['type']; ?></td>
                        <td><?php echo $selecMedia['date']; ?></td>
                        <td>
                        	<a class="btn btn-primary" href="editar.php?acao=atualizar&id=<?php echo $selecMedia['id']; ?>">Editar</a>
                        	<form class="formBotao" action="query.php" method="post">
                                <input type="hidden" value="<?php echo $selecMedia['id']; ?>" name="id" id="id"/>
                                <button onClick="return ConfirmarAlteracao()" class="btn btn-secondary" type="submit" name="deletar">Deletar</button>
                            </form>
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
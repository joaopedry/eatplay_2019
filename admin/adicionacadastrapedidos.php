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
                <h1>Novo Tipo de Pedido</h1>
                <a href="adicionacardapio.php"><img title="Adicionar" src="img/btn_adicionar.png"></a>
            </div>
            	<div class="Cadastrotipo">
                    <form class="form-adicionar" method="post" action="query.php" enctype="multipart/form-data">
                        <label>Nome do novo tipo:</label>
                        <input class="form-control" type="text" name="name"/><br>
                        <input class="form-control" type="submit" name="criarTipoComida" value="Adicionar" />  
                        <input type="button" class="form-control" value="Cancelar" onClick="goBack()" />                          
                    </form>
				</div>
            <div class="titulo">
                <h1>Novo Pedido</h1>
                <a href="adicionacardapio.php"><img title="Adicionar" src="img/btn_adicionar.png"></a>
            </div>
            	<div class="Cadastrocomida">
                    <form class="form-adicionar" method="post" action="query.php" enctype="multipart/form-data">
                        <label>Nome:</label>
                        <input class="form-control" type="text" name="name"/>
                        <label>Tipo:</label>
                        <select class="form-control" name="type" placeholder="Arquivo" required>
                            <option value="">Selecione:</option>
                                <?php
                                    $sql_tipo = "SELECT * FROM `types` ";
                                    $tipo = selecionar($_SG["link"], $sql_tipo);
                                    while($selecTipo = mysqli_fetch_assoc($tipo))
                                    {?>
                            <option><?php echo $selecTipo['name']; ?></option>   
                                <?php
                                    }
                                ?>
                        </select>
                        <label>Preço: R$</label>
                        <input class="form-control" type="text" name="price"/>
                        <input type="hidden" name="date" value="<?php echo date('y/m/d H:i:s'); ?>" readonly value="1" /><br>
                        <input class="form-control" type="submit" name="criarComida" value="Adicionar" /> 
                        <input type="button" class="form-control" value="Cancelar" onClick="goBack()" />                           
                    </form>
				</div>
        </section>
    </body>
</html>
<script>
    function ConfirmarAlteracao(){		if (confirm ("Deseja realmente excluir?"))		return true;	else		return false;}
    function goBack() {
        window.history.back();
    }
</script>
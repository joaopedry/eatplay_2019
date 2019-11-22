<aside>
	<nav class="menu">
		<ul>
        	<li><a href="playlist.php">Playlist</a></li>
        	<li><a href="player.php">Player</li></a>
            <li><a href="cardapio.php">Cardápio</li></a>
            <li><a href="cadastrapedidos.php">Cadastrar Pedidos</li></a>
            <li><a href="cadastrausuarios.php">Cadastrar Usuários</li></a>
            <li><a href="cadastramusica.php">Cadastrar Músicas</li></a>
            <li><a href="cadastraimagem.php">Cadastrar Imagens</li></a>
        	<li><a href="sair.php">Sair</li></a>
    		<li>
                <form class="menuForm" action="pedidos.php" method="get">
                    <label>Acompanhar Pedidos</label>
                    <select name="acompanharPedido" onchange="location = this.value;">
                        <option value="">Selecione:</option>
                        <option value="pedidos.php?acao=acompanhaPedido&id=1">Pedidos em Andamento</option>
                        <option value="pedidos.php?acao=acompanhaPedido&id=2">Pedidos Finalizados</option>
                        <option value="pedidos.php?acao=acompanhaPedido&id=3">Pedidos Cancelados</option>
                    </select>
                </form>
           </li>
    	</ul>
    </nav>
</aside>

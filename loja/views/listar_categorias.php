<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Loja</title>
	</head>
	<body>
		<h1>Lista de Categorias</h1>
		<table border="1">
			<tr>
				<th>Código</th>
				<th>Categoria</th>
				<th>Ações</th>
			</tr>
			<?php
				require_once "../models/c.conexao.php";
				require_once "../models/c.categoriaDAO.php";
				
				$categoriaDAO = new CategoriaDAO();
				
				//listar categoria
				$retorno = $categoriaDAO->buscar_todas();
				
				foreach($retorno as $dado)
				{
					echo "<tr>
							<td>{$dado->idcategoria}</td>
							<td>{$dado->descritivo}</td>
							<td>
								<a href=''>Alterar</a>
								&nbsp;&nbsp;
								<a href='excluir.php?id={$dado->idcategoria}'>Excluir</a>
							</td>
						  </tr>";
				}//fim do foreach
			?>
		</table>
		<br><a href="form_categoria.php">Nova Categoria</a>
	</body>
</html>
<!DOCTYPE html>
<html>

	<head>
		<title> ..:: RECEBIMENTO DE EMBALAGENS ::.. </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/menu.css">

	</head>

	<body>
		<header class="top">
			<img class="img" src="img/logo.png">

				<nav class="topo">
						<a href="controle.php?modo=criar"><button id="btnCriar">Receber</button></a>
						<a href="controle.php?modo=editar"><button id="btnEditar">Editar</button></a>
						<a href="#" onclick="alternarRelatorio();"><button id="btnRelatorio">Relatórios</button></a>
						<a href="controle.php?modo=visualizar"><button id="btnVisualizar">Visualizar</button></a>
				</nav>

				<article id="content" class="content">
						<div class="cab">
								<h1 class="tx">Relatórios</h1>
						</div>
						<div class="filtro">
								<form class="form" action="#" method="post">
									<input type="date" class="form-input" id="data-inicio" name="data-inicio">
									<span class="tx-data">a</span>
									<input type="date" class="form-input" id="data-fim" name="data-fim">
									<input type="text" class="form-input" id="matricula" name="matricula" placeholder="CDA">
									<input type="text" class="form-input" id="loja" name="loja" placeholder="LOJA">
										<select class="form-input" name="turno" id="turno" >
												<option value="0" selected>TURNO</option>
												<option value="1" >T1</option>
												<option value="2" >T2</option>
												<option value="3" >T3</option>
										</select>
										<input type="submit" id="btnFiltro" name="btnFiltro" value="Filtrar">
								</form>
						</div>
				</article>

		</header>
		<script type="text/javascript">

					relatorio = false;
					function alternarRelatorio(){
						s = document.getElementById("content");
						if(relatorio){
							s.style.display="none";
							}else{
							s.style.display="block";
						}
							relatorio = !relatorio;
					}
		</script>
	</body>
</html>

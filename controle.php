<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/controle.css">
    <meta name="viewport" content="width=divice, initial-scale=1.0">
    <title>..:: RECEBIMENTO DE EMBALAGENS ::..</title>
  </head>
  <body>
    <div class="form">
      <form class="formEmbalagens" action="requisicao.php" method="post">

        <header class="top">
          <h1 class="titolo">RECEBIMENTO DE EMBALAGENS - LOJA(DOCA DE PALETE)</h1>
          <img class="img" src="img/logo.png" alt="Id.png ">
        </header>

        <section class="container">
          <span class="item-data">Data:</span> <input class="input-data" type="date" name="data" id="data">
          <span class="item-doca">Doca:</span><input class="input-doca" type="text" name="doca" id="doca">
          <span class="item-loja">Loja:</span>
          <select type="text" id="loja" name="loja" class="input-loja">
            <?php
              include_once("bd.php");
              bd_conect();
              $lojas = get_lojas();
              for ($i=0; $i < count($lojas); $i++) {
                echo "<option value='$i'>".$lojas[$i][0]."</option>";
              }
            ?>
          </select>

          <span class="item-turno">Turno:</span>
              <select name="turno" class="input-turno">
                <option value=""></option>
                <option value="1">T1</option>
                <option value="2">T2</option>
                <option value="3">T3</option>
              </select>
              <span class="item-codigo"><input class="item-codigo-input" type="text" name="codigo" maxlength="4" placeholder="0000"></span>
        </section>

        <section class="container-p">
          <h2 class="sub-titolo">A SER PREENCHIDO PELO CENTRO DE DISTRIBUIÇÃO</h2>
          <div class="container-cda">
            <span class="item-matricula">Matricula:</span><input onfocusout="alert('oi')" class="input-matricula" type="matricula" name="matricula" id="matricula" placeholder="0123">
            <span class="item-colaborador">Colaborador:</span><div class="input-colaborador" id="colaborador"></div><!--<input class="input-colaborador" type="text" name="colaborador" id="colaborador">-->
            <span class="item-visto"> Visto: __________________________________ </span>
            <span class="item-placa">Placa:</span><input class="input-placa" type="text" name="placa" id="placa" placeholder="AAA-1234">
            <span class="item-motorista">Motorista:</span><input class="input-motorista" type="text" name="motorista" id="motorista">
            <span class="item-hDoca">Horário em Doca:</span><input class="input-hDoca" type="time" name="hDoca" id="hDoca">
            <span class="item-carregamento">Início de Carregamento:</span><input class="input-carregamento" type="time" name="carregamento" id="carregamento">
            <span class="item-saidaDoca">Saída em Doca:</span><input class="input-saidaDoca" type="time" name="saidaDoca" id="saidaDoca">
            <span class="item-contagem">Término da contagem:</span><input class="input-contagem" type="time" name="contagem" id="contagem">
          </div>
        </section>

        <section class="container-radio">
          <span class="item-lacrado">Veículo lacrado ?</span>
            <span data-check="1" class="input-lacrado-sim radio-box">Sim<input type="radio" name="lacrado" value="1"><span class="checkmark"></span></span>
            <span data-check="1" class="input-lacrado-nao radio-box">Não<input  type="radio" name="lacrado" value="0"><span class="checkmark"></span></span>
          <span class="item-lacre">Número do lacre:</span>
            <input class="input-lacre" type="text" name="lacre" id="lacre">
          <span class="item-organizacao">A loja fez a organização das embalagens ?</span>
            <span data-check="2" class="input-organizacao-sim radio-box">Sim<input type="radio" name="organizacao" value="1"><span class="checkmark"></span></span>
            <span data-check="2" class="input-organizacao-nao radio-box">Não<input type="radio" name="organizacao" value="0"><span class="checkmark"></span></span>

          <span class="item-bono">Quantidade de acordo com o bono:</span>
            <span data-check="3" class="input-bono-sim radio-box">Sim<input type="radio" name="bono" value="1" onclick="ocultarBono()"><span class="checkmark"></span></span>
            <span data-check="3" data-bono class="input-bono-nao radio-box">Não<input type="radio" name="bono" value="0" onclick="exibirBono()"><span class="checkmark"></span></span>

				<span class="inputs-box" id="inputs-box">
                <span class="input-bono-mais">Qtde a mais:</span>
                  <input class="input-p" type="text" value="0" name="p" id="p">
                <span class="input-bono-menos">Qtde a menos:</span>
                  <input class="input-n" type="text" value="0" name="n" id="n">
				</span>
          </section>

        <section class="container-palete-bom">
          <span class="infor">Nº de Unidades entregues: Materiais em Condições de Uso</span>
          <span class="item-chepB">CHEP:</span><input class="input-chepB" type="text" name="chepB" id="chepB">
          <span class="item-pbrB">PBR:</span><input class="input-pbrB" type="text" name="pbrB" id="pbrB">
          <span class="item-descartavelB">DESCARTÁVEL:</span><input class="input-descartavelB" type="text" name="descartavelB" id="descartavelB">
          <span class="item-gltB">CX GLT:</span><input class="input-gltB" type="text" name="gltB" id="gltB">
          <span class="item-tampB">TAMPA GLT:</span><input class="input-tampB" type="text" name="tampB" id="tampB">
          <span class="item-cintaB">CINTA:</span><input class="input-cintaB" type="text" name="cintaB" id="cintaB">
          <span class="item-ifcoB">CX IFCO:</span><input class="input-ifcoB" type="text" name="ifcoB" id="ifcoB">
          <span class="item-outrosB">OUTROS:</span><input class="input-outrosB" type="text" name="outrosB" id="outrosB">
          <textarea class="item-obsB" name="obsB" rows="5" cols="80" placeholder="Observação..."></textarea>
        </section>

        <section class="container-palete-ruim">
          <span class="infor-1">Nº de Unidades entregues: Materiais sem Condições de Uso(Quebrados)</span>
          <span class="item-chepR">CHEP:</span><input class="input-chepR" type="text" name="chepR" id="chepR">
          <span class="item-pbrR">PBR:</span><input class="input-pbrR" type="text" name="pbrR" id="pbrR">
          <span class="item-descartavelR">DESCARTÁVEL:</span><input class="input-descartavelR" type="text" name="descartavelR" id="descartavelR">
          <span class="item-gltR">CX GLT:</span><input class="input-gltR" type="text" name="gltR" id="gltR">
          <span class="item-tampR">TAMPA GLT:</span><input class="input-tampR" type="text" name="tampR" id="tampR">
          <span class="item-cintaR">CINTA:</span><input class="input-cintaR" type="text" name="cintaR" id="cintaR">
          <span class="item-ifcoR">CX IFCO:</span><input class="input-ifcoR" type="text" name="ifcoR" id="ifcoR">
          <span class="item-outrosR">OUTROS:</span><input class="input-outrosR" type="text" name="outrosR" id="outros">
          <textarea class="item-obsR" name="obsR" rows="5" cols="80" placeholder="Observação..."></textarea>
        </section>

        <section class="container-demora">
          <span class="infor-2">Motivo da demora do Descarregamento:</span>
          <span class="item-atraso">ENCOSTOU MAIS DE UM VEICULO:</span><select class="select-atraso" name="atraso"><option value="0"></option><option value="1">Não</option><option value="2">Sim</option></select>
          <span class="item-docaCheia">DOCA CHEIA:</span><select class="select-docaCheia" name="docaCheia"><option value="0"></option><option value="1">Não</option><option value="2">Sim</option></select>
          <span class="item-semTriar">PALETES SEM TRIAR</span><select class="select-semTriar" name="semTriar"><option value="0"></option><option value="1">Não</option><option value="2">Sim</option></select>
          <span class="item-ou">OUTROS:</span><select class="select-ou" name="ou"><option value="0"></option><option value="1">Não</option><option value="2">Sim</option></select>
        </section>
        <div class="container-obs">
          <textarea class="item-obsD" name="obsD" rows="8" cols="80" placeholder="Observação..."></textarea>
        </div>

        <div class="container-buttom">
          <input class="finalizar" type="submit" id="finalizar" value="Finalizar">
          <input class="retornarMenu" type="reset" id="retornarMenu" value="Cancelar">
        </div>

      </form>
      <footer class="container-norma">
        <span class="norma">FR-EXP-014 - VER 003</span>
      </footer>
    </div>

    <div class="modal-box" id="modal-box">
				<div class="modal">
					<span class="tx-modal-box">Qual controle você deseja visualizar ?</span>
					<form method="post">
						<input type="text" class="input-modal-box" name="id_Cont" placeholder="0000" maxlength="4">
            <div class="modal-inputs">
              <input class="modal-button" type="submit"  value="Buscar">
              <a href="menu.php" class="modal-buttonCancelar">Cancelar</a>
            </div>
          </form>
				</div>
		</div>

    <script>
      /*     exibe a divergencia do bono                */
        div = false;
        function exibirBono(){
          var bono = document.getElementById('inputs-box');
          bono.style.display = "grid";
        }
        function ocultarBono(){
          var bono = document.getElementById('inputs-box');
          bono.style.display = "none";
        }


/*  faz a verificação da variavel passada pelo GET e exibe ou oculta o modal  */
        <?php
          if($_GET["modo"] == "criar"){
            echo "ocultarModal();";
          }else{
            echo "exibirModal();";
          }

        ?>
        modal = false;
        function exibirModal(){
          var modal = document.getElementById('modal-box');
          modal.style.display = "flex";
        }
        function ocultarModal(){
          var modal = document.getElementById('modal-box');
          modal.style.display = "none";
        }

/*              personalização do radio                     */
        document.querySelectorAll('[data-check]').forEach(check => {
              check.addEventListener('click', function (e) {
                  document.querySelectorAll('[data-check="'+this.getAttribute("data-check")+'"]').forEach(check => {
                        check.querySelectorAll('input')[0].removeAttribute("checked");
                  });
                  this.querySelectorAll('input')[0].setAttribute("checked", "true");
                  if(this.getAttribute("data-check") == "3"){
                    if(this.hasAttribute("data-bono")){
                      exibirBono();
                    }else{
                      ocultarBono()
                    }
                  }
              });
        });


        function funcionarioAjax(){
          var request = new XMLHttpRequest();
          //console.log(request);
          request.onreadystatechange = function() {
            if(request.readyState === 4) {
              if(request.status === 200) {
                var objColaborador = JSON.parse(request.responseText);
                var = document.getElementById('colaborador');

              } else {
                alert('Erro: ' +  request.status + ' ' + request.statusText);
              }
            }
          }
          var url = "funcionarioAjax.php";
          var matricula = document.getElementById('matricula').value;
          request.open('Get', url+"?matricula="+matricula);
          request.send();
        }




    </script>
  </body>
</html>

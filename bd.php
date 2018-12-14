<?php header("Content-type: text/html; charset=utf-8"); header('Access-Control-Allow-Origin: *'); //cabeçalho obrigatorio ?>
<?php
  $mysqli;
/*     CONECTAR AO BANCO DE DADOS    */
function bd_conect(){
  $servidor = 'localhost';
  $usuario = 'root';
  $senha = '';
  $banco = 'id';

  global $mysqli;
  $mysqli = new mysqli($servidor, $usuario, $senha, $banco);
  $mysqli->set_charset('utf8');
  if (!$mysqli) {
	   // Mostra mensagem de erro.
	    die('Erro ao conectar ao banco' .mysqli_error());
      }
  }// fecha a função bd_conect


/*      FUNÇÃO PARA EXECULTAR AS FUNÇÕES         */
  function queryExec($comand){
      global $mysqli;
      return $mysqli->query($comand);
  }// fecha a função queryExec

/* FUNÇÃO PARA SALVAR A ULTIMA FUNÇÃO DO BANCO  */
  function queryLog($comand){
      global $mysqli; // global para acessar na pagina raiz

      $name = 'Banco/log.txt';
      $text = '/* '.date("Y-m-d-H:i:s")." */\r\n".$comand.";\r\n\r\n";
      $file = fopen($name, 'a');
      //fwrite($file, $text);
      if (!fwrite($file, $text)) die('Não foi possível atualizar o arquivo.');
      fclose($file);

      return queryExec($comand);
  } // fecha a funcão queryLog

/*       INSERIR NOVO CONTROLE     */
function create_user($data,$doca,$loja,$turno,$colaborador,$matricula,$motorista,$placa,$hDoca,$saidaDoca,$carregamento,$contagem,$chepB,$pbrB,$descartavelB,$gltB,$tampB,$cintaB,$ifcoB,$outrosB,$chepR,
$pbrR,$descartavelR,$gltR,$tampR,$cintaR,$ifcoR,$outrosR,$lacrado,$organizacao,$bono,$p,$n,$atraso,$docaCheia,$ou,$lacre,$semTriar,$obsB,$obsR){

  $comand = 'INSERT INTO embalagem (data, doca, loja, turno, colaborador, matricula,motorista, placa, hDoca, saidaDoca, carregamento, contagem,chepB, pbrB, descartavelB, gltB, tampB, cintaB, ifcoB,outrosB, chepR, pbrR, descartavelR, gltR, tampR,cintaR, ifcoR, outrosR, lacrado, organizacao, bono, p, n,atraso, docaCheia, ou, lacre, semTriar, obsB, obsR)
   VALUES ("'.$data.'",'.$doca.',"'.$loja.'","'.$turno.'","'.$colaborador.'","'.$matricula.'","'.$motorista.'","'.$placa.'","'.$hDoca.'","'.$saidaDoca.'","'.$carregamento.'",
     "'.$contagem.'",'.$chepB.','.$pbrB.','.$descartavelB.','.$gltB.','.$tampB.','.$cintaB.','.$ifcoB.','.$outrosB.','.$chepR.','.$pbrR.','.$descartavelR.','.$gltR.','.$tampR.',
     '.$cintaR.','.$ifcoR.','.$outrosR.','.$lacrado.','.$organizacao.','.$bono.','.$p.','.$n.','.$atraso.','.$docaCheia.','.$ou.',"'.$lacre.'",'.$semTriar.',"'.$obsB.'","'.$obsR.'" )';
  return queryExec($comand);
 }

/* EDITAR CONTROLE  */
/* busca informacao no banco de dados*/
function get_lojas(){
    $comand = 'SELECT loja FROM loja';
    $result = queryExec($comand);

    if($result != null && ($result->num_rows > 0)){
        $row = $result->fetch_array();

        $i = 0;
        while($row){
            $output[$i] = $row;
            $row = $result->fetch_array();
            $i++;
        }
        return $output;
    }
    return null;
}
/*           BUSCA O NOME DO COLABORADOR          */
function buscar($matricula){
    $comand = 'SELECT colaborador FROM funcionario WHERE matricula LIKE "'.$matricula.'"';
    $result = queryExec($comand);
    if($result != null && ($result->num_rows > 0)){
        $row = $result->fetch_array();
        for ($i=0; $i < 1; $i++) {
          unset($row[$i]);
        }
        return $row;
    }
    return null;
}
































 ?>

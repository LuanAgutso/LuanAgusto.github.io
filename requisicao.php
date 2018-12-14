<?php header("Content-type: text/html; charset=utf-8"); header('Access-Control-Allow-Origin: *'); //cabeçalho obrigatorio ?>
<?php
  include_once 'bd.php'; // chama o arquivo bd
  bd_conect(); // conectar o banco de dados

    $data = $_POST['data'];
    $doca = $_POST['doca'];
    $loja = $_POST['loja'];
    $turno = $_POST['turno'];
    $colaborador = $_POST['colaborador'];
    $matricula = $_POST['matricula'];
    $motorista = $_POST['motorista'];
    $placa = $_POST['placa'];
    $hDoca = $_POST['hDoca'];
    $saidaDoca = $_POST['saidaDoca'];
    $carregamento = $_POST['carregamento'];
    $contagem = $_POST['contagem'];
    $chepB = $_POST['chepB'];
    $pbrB = $_POST['pbrB'];
    $descartavelB = $_POST['descartavelB'];
    $gltB = $_POST['gltB'];
    $tampB = $_POST['tampB'];
    $cintaB = $_POST['cintaB'];
    $ifcoB = $_POST['ifcoB'];
    $outrosB = $_POST['outrosB'];
    $chepR = $_POST['chepR'];
    $pbrR = $_POST['pbrR'];
    $descartavelR = $_POST['descartavelR'];
    $gltR = $_POST['gltR'];
    $tampR = $_POST['tampR'];
    $cintaR = $_POST['cintaR'];
    $ifcoR = $_POST['ifcoR'];
    $outrosR = $_POST['outrosR'];
    $lacrado = $_POST['lacrado'];
    $organizacao = $_POST['organizacao'];
    $bono = $_POST['bono'];
    $p = $_POST['p'];
    $n = $_POST['n'];
    $atraso = $_POST['atraso'];
    $docaCheia = $_POST['docaCheia'];
    $ou = $_POST['ou'];
    $lacre =$_POST['lacre'];
    $semTriar = $_POST['semTriar'];
    $obsB = $_POST['obsB'];
    $obsR = $_POST['obsR'];

    /*  função	cria novo formuçario  */
    create_user($data,$doca,$loja,$turno,$colaborador,$matricula,$motorista,$placa,$hDoca,$saidaDoca,$carregamento,$contagem,$chepB,$pbrB,$descartavelB,$gltB,$tampB,$cintaB,$ifcoB,$outrosB,$chepR,
    $pbrR,$descartavelR,$gltR,$tampR,$cintaR,$ifcoR,$outrosR,$lacrado,$organizacao,$bono,$p,$n,$atraso,$docaCheia,$ou,$lacre,$semTriar,$obsB,$obsR);

?>

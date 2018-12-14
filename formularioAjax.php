<?php header("Content-type: text/html; charset=utf-8"); header('Access-Control-Allow-Origin: *'); //cabeçalho obrigatorio ?>
<?php
  include_once 'bd.php'; // chama o arquivo bd
  bd_conect(); // conectar o banco de dados

  $matricula = $_POST['matricula'];

  if(isset($matricula) && $matricula != ""){
        buscar($matricula);
    }else{
      echo "Mensagem genérica";
    }


?>

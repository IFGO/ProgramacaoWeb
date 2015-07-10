<?php
session_start();

echo "Requisição: <br/>";
var_dump($_REQUEST);
if(!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = $_REQUEST['usuario'];
}
echo "Sessão: <br/>";
var_dump($_SESSION);

//echo md5("senha");

if(sha1($_REQUEST["senha"]) == "f4f454bc88e905d9a6096628247ae3f079c1c787") {
    $_SESSION['logado'] = true;
    echo "Ok. Usuário logado.";
} else {
    echo sha1($_REQUEST["senha"]);
    echo "<br/>Senha inválida.";
}

// destruir a sessão:
//session_destroy();
?>
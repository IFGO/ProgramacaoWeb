<?php
class Conexao {
    private $conexao;
    
    function __construct($usuario, $senha, $host = "localhost", $db = "web") {
        $this->conexao = mysqli_connect($host, $usuario, $senha, $db);
        if(!$this->conexao) { // 0, "" ou NULL = false
            echo "Erro ao conectar com o banco de dados. ";
            echo mysqli_errno($this->conexao);
        }
    }
    
  
    function listarPessoas() {
        $sql = "SELECT * FROM pessoa";
        $resultado = mysqli_query($this->conexao, $sql);

//      Exemplo de array: $numeros = array(10,6,5,2,7);
//      Exemplo de array associativo: $numeros = array("nota1" => 10,"nota2" => 6, "nota3" => 5, "nota4" => 2, "nota5" => 7);
//      var_dump é utilizado para imprimir todo o array: var_dump($numeros);
        $lista = array();
        while($registro = $resultado->fetch_assoc()) {
            $lista[] = $registro;
        }
        return $lista;
    }

    function __destruct() {
        mysqli_close($this->conexao);
    }
    
}
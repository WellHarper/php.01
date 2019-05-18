<?php

/*
echo "<h1>Olá Mundo</h1>";

$idade = 12;
//echo gettype($idade); descobrir tipo
echo $idade;

echo "<br>";

$idade ="12";
echo $idade;    
*/

function tratarNome($nome){
    
    $nome = strtolower($nome);
    $nome = ucwords($nome);
    
    return $nome;
}


$nome = tratarNome($_POST["nome"]);
$email = $_POST["email"];
$tel = $_POST["tel"];



if ($nome == "" || $email == "" || $tel == "" ) 

{
    
echo "<h1>POR FAVOR, PREENCHA TODOS OS CAMPOS</h1>";    
    
    
}

else 

{
    
echo $nome;
echo "<br>";
echo $email;
echo"<br>";
echo $tel;  
    
    
}

?>
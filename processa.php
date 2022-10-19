<?php

//Recebe os campos do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$destinos = $_POST['destinos'];
$hospedagem = $_POST['hospedagem'];
$mensagem = $_POST['mensagem'];
$dt_cadastro =$hoje = date('Y-m-d')


//para investigar variaveis e expressões
//var_dump($_POST);


//CONECTA AO BANCO E GRAVA OS DADOS (INSERT COM PDO)
try {
    //code...
    $pdo = new PDO('mysql:host=localhost;dbname=explore', 'root', '');
    //INSERT na tabela users
    $sql = $pdo->prepare('INSERT into urses(nome, email, sexo, idade, telefone, senha, estado, cidade, destinos, hospedagem, mensagem, dt_cadastro)values(:nome, :email, :sexo, :idade, :telefone, :senha, :estado, :cidade, :destinos, :hospedagem, :mensagem, :dt_cadastro)');
    $sql->execute(array(
        ':nome' =>$nome,
        ':email' =>$email, 
        ':sexo' =>$sexo, 
        ':idade' =>$idade,
        ':telefone' =>$telefone,
        ':senha' =>$senha,
        ':estado' =>$estado,
         ':cidade' =>$cidade,
         ':destinos' =>$destinos,
         ':hospedagem' =>$hospedagem,
         ':mensagem' =>$mensagem,
         ':dt_cadastro' =>$dt_cadastro
        
    ));

    echo '<h1>Usuario cadastrado</h1>';
    var_dump($_POST);

} catch (PDOException $erro){
    //throw $th;
    //se ter erro exibe o erro
    echo $erro;
}





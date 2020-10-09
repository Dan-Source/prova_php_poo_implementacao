<?php
include_once '../classes/participante.php';
include_once '../classes/leilao.php';
include_once '../classes/item_leilao.php';
include_once '../classes/lance.php';

// Registrar items d2, wolverine e yoda

$titulo_item1 = "Caneca do Wolverine";
$descricao_item1 = "Caneca Porcelana";
$lance_minimo1 = 50;
$caminho_foto1 = "Sistema_de_leilao_via_internet/classes/img/wolverine.jpg";

$wolverine = new ItemLeilao(1,$titulo_item1, $descricao_item1, $lance_minimo1, $caminho_foto1);

$titulo_item2 = "Caneca do R2D2";
$descricao_item2 = "Caneca Porcelana";
$lance_minimo2 = 50;
$caminho_foto2 = "Sistema_de_leilao_via_internet/classes/img/d2.jpg";

$r2d2 = new ItemLeilao(2,$titulo_item2, $descricao_item2, $lance_minimo2, $caminho_foto2);

$titulo_item3 = "Caneca do Yoda";
$descricao_item3 = "Caneca Porcelana";
$lance_minimo3 = 50;
$caminho_foto3 = "Sistema_de_leilao_via_internet/classes/img/yoda.jpg";

$yoda = new ItemLeilao(3, $titulo_item3, $descricao_item3, $lance_minimo3, $caminho_foto3);


//Cadastrando Participante

$nome1 = 'Daniel Luis';
$login1 = 'd.luis';
$senha1 = "amor&paz";
$email1 = "dan@email.com"; 
$endereço1 = "Rua da Programação";
$telefone1 = "089 0000-0000";

$participante1 = new Participante($nome1, $login1, $senha1, $email1, $endereço1, $telefone1);

$participante1->login($login1, $senha1);
$participante1->regPar();

$nome2 = 'Professor Felipe';
$login2 = 'professor.felipe';
$senha2 = "amor&paz";
$email2 = "felipe@email.com";
$endereço2 = "Rua da Aulas Remotas";
$telefone2 = "089 0000-0000";

$participante2 = new Participante($nome2, $login2, $senha2, $email2, $endereço2, $telefone2);

$participante2->login($login2, $senha2);
$participante2->regPar();

// Iniciando Leilão
    $dt_inicio = "08-10-20";
    $hora_inicio = "14:53";
    $dt_final = "09-10-20";
    $hora_final = "23:59";


$leilao = new Leilao($dt_inicio, $hora_inicio, $dt_final, $hora_final);

// Adicionando Itens ao Leilão

$leilao->setItems($wolverine);
$leilao->setItems($r2d2);
$leilao->setItems($yoda);

// Listar Itens Do Leilão

$leilao->conLeilao();

// Registrar Lance

$lance1 = new Lance(55, '16:45');
$lance1->regLance($participante1);

// Colocar Lance em um Produto do Leilão

$leilao->fazerLance($wolverine, $lance1);


// Registrar Lance

$lance2 = new Lance(60, '16:45');
$lance2->regLance($participante2);

// Colocar Lance em um Produto do Leilão

$leilao->fazerLance($wolverine, $lance2);


// Registrar Lance

$lance3 = new Lance(56, '16:45');
$lance3->regLance($participante1);

// Colocar Lance em um Produto do Leilão

$leilao->fazerLance($wolverine, $lance3);

//Arrematar item 

$leilao->arrematarItem($wolverine);

// Listar Itens Ainda disponivel Do Leilão
$leilao->conLeilao();

// Finalizar Leilao
$leilao->finalizarLeilao();




?>
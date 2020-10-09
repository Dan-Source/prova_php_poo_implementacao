<h1> Verificando o Registro de Locação. </h1>

<?php
// Testando o Sistema de Locação de automoveis.

include_once '../classes/automovel.php';
include_once '../classes/marca.php';
include_once '../classes/modelo.php';
include_once '../classes/cliente.php';
include_once '../classes/locacao.php';

// Criando a Marca Toyota
$toyota = new Marca();
$toyota->setDescricao("Toyota");

// Cadastrando Modelos: Yaris, Corolla, Hilux com a marca Toyota

$yaris = new Modelo();
$yaris->setDescricao("Yaris");
$yaris->setMarca($toyota);

$corolla = new Modelo();
$corolla->setDescricao("Corolla");
$corolla->setMarca($toyota);

$hilux = new Modelo();
$hilux->setDescricao("Hilux");
$hilux->setMarca($toyota);


// Cadastrando automovel

$carro_rosa = new Automovel();

$carro_rosa->setPlaca('PRIDE');
$carro_rosa->setCor('Rosa');
$carro_rosa->setNumeroDePortas(4);
$carro_rosa->setTipoCombustivel("Gasolina/Alchoool");
$carro_rosa->setQuilometragem(200);
$carro_rosa->setRenavam('05069219037');
$carro_rosa->setChassi('9BW ZZZ377 VT 004251');
$carro_rosa->setValorLocacao(1000);
$carro_rosa->setModelo($hilux);


// Cadastrando cliente
$daniel = new Cliente();
$daniel->setCliente("Daniel Luis");
$daniel->setCPF("000.000.000-00");
$daniel->setEndereco("Rua governador M., Corrente -PI");
$daniel->setTelefone("089 9999-9999");
$daniel->setEmail("daniel@e-mail.com.br");

// Rgistro de Locação Cliente e Automovel
$locacao = new Locacao();

$locacao->setDataLocacao('07-10-2020');
$locacao->setHoraLocacao('14:22PM');
$locacao->setDataDevolucao('14:22PM');
// Pegando a quilomentragem a partir do Automovel
$quilometragem = $carro_rosa->getQuilometragem();
$locacao->setQuilometragem($quilometragem);
// Pegando valor da Locação do Automovel
$valor_locacao = $carro_rosa->getValorLocacao();
$locacao->setValorLocacao($valor_locacao);
$locacao->setCaucao($valor_locacao*3);
$locacao->setDevolvido("Não");
$locacao->setAutomovel($carro_rosa);
$locacao->setCliente($daniel);

// Resgistrando a locação
$locacao->regLoc();

?>
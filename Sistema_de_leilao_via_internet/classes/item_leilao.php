<?php
class ItemLeilao
{
    private $id;
    private $titulo_item;
    private $descricao_item;
    private $lance_minimo;
    private $caminho_foto;
    private $arrematado;
    private $lances = array();

    function __construct($id ,$titulo_item, $descricao_item, $lance_minimo, $caminho_foto)
    {
        $this->id = $id;
        $this->titulo_item = $titulo_item;
        $this->descricao_item = $descricao_item;
        $this->lance_minimo = $lance_minimo;
        $this->caminho_foto = $caminho_foto;
    }
    


    public function conItem()
    {
        echo "<h4> Item: ".$this->id." </h4>";
        echo "Titulo: ".$this->titulo_item."<br>";
        echo "Descrição: ".$this->descricao_item."<br>";
        echo '<img src='.$this->caminho_foto.' alt="Item Leilão" width="200" height="200"><br>';
        echo $this->situacaoItem()."<br>";

    }

    public function arrematarItem($arrematado)
    {
        $this->arrematado = $arrematado;
    }

    public function situacaoItem(){
        $situacao = $this->arrematado;
        if ($situacao == 1){
            echo "Item arrematado";
        }else{
            echo "Item disponivel.";
        };
    }

    public function receberLance(Lance $lance)
    {
        $valor = $lance->getValorLance();
        $lance_min = $this->lance_minimo;
        array_push($this->lances, $lance);
        if($valor > $lance_min){
            echo "Lance Registrado. <br>";
            $this->lance_minimo = $valor;
        }else{
            echo "<br> O valor Minimo é: $lance_min <br>";
        };

    }
}

<?php
class Leilao
{
    private $dt_inicio;
    private $hora_inicio;
    private $dt_final;
    private $hora_final;
    private $itens_do_leilao = array();

    function __construct($dt_inicio, $hora_inicio, $dt_final, $hora_final)
    {
        $this->dt_inicio = $dt_inicio;
        $this->hora_inicio = $hora_inicio;
        $this->dt_final = $dt_final;
        $this->hora_final = $hora_final;
    }



    public function conLeilao()
    {
        echo '<h3> Items do Leilão </h3><br>';
        $items = $this->itens_do_leilao;
        foreach($items as $item){
            $item->conItem();
        }
    }
    
    public function setItems($item){
        array_push($this->itens_do_leilao, $item);
    }

    public function arrematarItem($itemEscolhido){
        foreach($this->itens_do_leilao as $item){
            if($itemEscolhido === $item){
                $item->arrematarItem(1);
            }

        }
        
    }
    public function fazerLance($itemEscolhido, $lance){
        foreach($this->itens_do_leilao as $item){
            if($itemEscolhido == $item){
                $item->receberLance($lance);
            }

        }
        
    }

    public function iniciarLeilao()
    {
        echo "<h1>Leilão Iniciado </h1><br>";
    }

    public function finalizarLeilao()
    {
        echo "<h1>Fim do Leilão <h1>";
    }
}

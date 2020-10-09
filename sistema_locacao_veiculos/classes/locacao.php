<?php
    class Locacao{
        private $dt_locacao;
        private $hora_locacao;
        private $dt_devolucao;
        private $quilometragem;
        private $valor_caucao;
        private $valor_locacao;
        private $devolvido;
        private $automovel;

        // DATA DE LOCAÇÃO
        public function setDataLocacao($dt_locacao)
        {
            $this->dt_locacao = $dt_locacao;
        }
        public function getDataLocacao()
        {
            return $this->dt_locacao;
        }
        // HORA DE LOCAÇÃO

        public function setHoraLocacao($hora_locacao)
        {
            $this->hora_locacao = $hora_locacao;
        }
        public function getHoraLocacao()
        {
            return $this->hora_locacao;
        }

        // DATA DEVOLUÇÃO 
        public function setDataDevolucao($dt_devolucao)
        {
            $this->dt_devolucao = $dt_devolucao;
        }
        public function getDataDevolucao()
        {
            return $this->dt_devolucao;
        }
        // QUILOMETRAGEM

        public function setQuilometragem(string $quilometragem)
        {
            $this->quilometragem = $quilometragem;
        }

        public function getQuilometragem()
        {
            return $this->quilometragem;
        }
        // VALOR CAUÇÃO
        public function setCaucao(float $valor_caucao)
        {
            $this->valor_caucao = $valor_caucao;
        }
        public function getCaucao()
        {
            return $this->valor_caucao;
        }
        // VALOR LOCAÇAO
        public function setValorLocacao($valor_locacao)
        {
            $this->valor_locacao = $valor_locacao;
        }
        public function getValorLocacao()
        {
            return $this->valor_locacao;
        }
        // DEVOLVIDO
        public function setDevolvido($devolvido)
        {
            $this->devolvido = $devolvido;
        }
        public function getDevolvido()
        {
            return $this->devolvido;
        }
        // AUTOMOVEL
        public function setAutomovel(Automovel $automovel)
        {
            $this->automovel = $automovel;
        }
        public function getAutomovel()
        {
            return $this->automovel;
        }
        // CLIENTE
        public function setCliente(Cliente $cliente)
        {
            $this->cliente = $cliente;
        }
        public function getCliente()
        {
            return $this->cliente;
        }

        public function regLoc(){
            echo "<h3> Detalhes da locação </h3>";
            echo "Data da Locação: ".$this->getDataLocacao()."<br>";
            echo "Hora da Locação: ".$this->getHoraLocacao()."<br>";
            echo "Data de Devolução: ".$this->getDataDevolucao()."<br>";
            echo "Quilometragem: ".$this->getQuilometragem()." km<br>";
            echo "Valor da Caucao: R$ ".$this->getCaucao()."<br>";
            echo "Valor da Locação: R$ ".$this->getValorLocacao()."<br>";
            echo "Devolvido: ".$this->getDevolvido()."<br>";
            $automovel = $this->getAutomovel()->conAuto()."<br>";
            $cliente = $this->getCliente()->conCli()."<br>";
    
        }


    };

?>
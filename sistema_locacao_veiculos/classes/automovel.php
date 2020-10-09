<?php 

    class Automovel{
        private $placa;
        private $cor;
        private $nroportas;
        private $tipo_combustivel;
        private $quilometragem;
        private $renavam;
        private $chassi;
        private $valor_locacao;
        private $modelo;

        // Modificadores das variáveis

        // PLACA
        public function setPlaca($placa)
        {
            $this->placa = $placa;
        }

        public function getPlaca()
        {
            return $this->placa;
        }

        // COR
        public function setCor($cor)
        {
            $this->cor = $cor;
        }

        public function getCor()
        {
            return $this->cor;
        }

        // NUMERO DE PORTAS

        public function setNumeroDePortas($nroportas)
        {
            $this->nroportas = $nroportas;
        }

        public function getNumeroDePortas()
        {
            return $this->nroportas;
        }

        //TIPO COMBUSTIVEL

        public function setTipoCombustivel($tipo_combustivel)
        {
            $this->tipo_combustivel = $tipo_combustivel;
        }

        public function getTipoCombustivel()
        {
            return $this->tipo_combustivel;
        }
        // QUILOMETRAGEM

        public function setQuilometragem($quilometragem)
        {
            $this->quilometragem = $quilometragem;
        }

        public function getQuilometragem()
        {
            return $this->quilometragem;
        }
        
        // RENAVAM
         public function setRenavam($renavam)
        {
            $this->renavam = $renavam;
        }

        public function getRenavam()
        {
            return $this->renavam;
        }
        // CHASSI

         public function setChassi($chassi)
        {
            $this->chassi = $chassi;
        }

        public function getChassi()
        {
            return $this->chassi;
        }
        // VALOR DA LOCACAO
         public function setValorLocacao($valor_locacao)
        {
            $this->valor_locacao = $valor_locacao;
        }

        public function getValorLocacao()
        {
            return $this->valor_locacao;
        }
        
        // MODELO
         public function setModelo(Modelo $modelo)
        {
            $this->modelo = $modelo;
        }

        public function getModelo()
        {
            return $this->modelo;
        }

        public function conAuto()
        {
            echo "<h3> Informações sobre o Carro </h3>";
            echo 'Placa: '.$this->getPlaca()."<br>";
            echo 'Cor: '.$this->getCor()."<br>";
            echo 'Numero de Portas: '.$this->getNumeroDePortas()."<br>";
            echo 'Tipo de Combustivel: '.$this->getTipoCombustivel()."<br>";
            echo 'Quilomentragem: '.$this->getQuilometragem()."<br>";
            echo 'Renavam: '.$this->getRenavam()."<br>";
            echo 'Chassi: '.$this->getChassi()."<br>";
            echo 'Valor da Locação: '.$this->getValorLocacao()."<br>";
            $modelo = $this->getModelo()->conMod()."<br>";
        }
    };
?>
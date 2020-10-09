<?php 
    class Lance{
        private $valor_lance;
        private $hora_lance;
        private $participante;

        function __construct($valor_lance, $hora_lance){
            $this->valor_lance = $valor_lance;
            $this->hora_lance = $hora_lance;
         
        }
        public function getValorLance()
        {
            return $this->valor_lance;
        }
        public function getHora()
        {
            return $this->hora_lance;
        }


        public function regLance(Participante $participante){
            $this->participante = $participante;
            $nome = $this->participante->getNome();
            $valor = $this->getValorLance();
            $hora = $this->getHora();
            echo "<h4> Lance </h4>";
            echo "Valor: $valor <br>";
            echo "Hora: $hora <br>";
            echo "Participante: $nome <br>";
        }
    }

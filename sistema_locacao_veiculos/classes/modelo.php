<?php 
    class Modelo{
        private $descricao;
        private $marca;

        
        public function setDescricao(string $descricao)
        {
            $this->descricao = $descricao;
        }
        public function getDescricao()
        {
            return $this->descricao;
        }

        // MARCA
        public function setMarca(Marca $marca)
        {
            $this->marca = $marca;
        }
        public function getMarca()
        {
            return $this->marca;
        }

        public function conMod()
        {
            $descricao = $this->getDescricao();
            $marca = $this->getMarca()->conMarca();
            echo "
            Modelo: $descricao <br>
            ".$marca;
        }
    }

?>
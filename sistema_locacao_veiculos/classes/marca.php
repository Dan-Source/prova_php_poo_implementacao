<?php 
    class Marca{
        private $descricao;

        public function setDescricao(string $descricao)
        {
            $this->descricao = $descricao;
        }
        public function getDescricao()
        {
            return $this->descricao;
        }

        public function conMarca(){

            $descricao = $this->getDescricao();
            echo "
            Marca: $descricao <br>
                ";
        }
    }

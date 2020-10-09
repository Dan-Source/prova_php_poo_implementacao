<?php 
    class Cliente{
        private $cpf_cli;
        private $nom_cli;
        private $en_cli;
        private $tel_cli;
        private $email_cli;


        // CPF CLIENTE
        public function setCPF(string $cpf_cli)
        {
            $this->cpf_cli = $cpf_cli;
        }

        public function getCPF()
        {
            return $this->cpf_cli;
        }
        // NOME CLIENTE
        public function setCliente(string $nom_cli)
        {
            $this->nom_cli = $nom_cli;
        }
        public function getCliente()
        {
            return $this->nom_cli;
        }
        // ENDEREÇO CLIENTE
        public function setEndereco($en_cli)
        {
            $this->en_cli = $en_cli;
        }
        public function getEndereco()
        {
            return $this->en_cli;
        }
        // TELEFONE CLIENTE
        public function setTelefone($tel_cli)
        {
            $this->tel_cli = $tel_cli;
        }
        public function getTelefone()
        {
            return $this->tel_cli;
        }
        // EMAIL CLIENTE
        public function setEmail($email_cli)
        {
            $this->email_cli = $email_cli;
        }
        public function getEmail()
        {
            return $this->email_cli;
        }
       

        public function conCli(){
            echo "<h3> Informações sobre o Cliente </h3>";
            echo "Cliente: $this->nom_cli"."<br>";
            echo "CPF: $this->cpf_cli"."<br>";
            echo "Endereço: $this->en_cli"."<br>";
            echo "Telefone: $this->tel_cli"."<br>";
            echo "Email: $this->email_cli"."<br>";
        }
    }

<?php 
    class Participante{
        private $nome;
        private $login;
        private $senha;
        private $email;
        private $endereco;
        private $telefone;
        function __construct($nome, $login, $senha, $email, $endereco, $telefone)
        {
            $this->nome = $nome;
            $this->login = $login;
            $this->senha = $senha;
            $this->email = $email;
            $this->endereco = $endereco;
            $this->telefone = $telefone;

        }

        private function get_login()
        {
            return $this->login;
        }
        private function get_senha()
        {
            return $this->senha;
        }
        public function getNome(){
            return $this->nome;
        }

        public function login($login, $senha){
            if ($this->get_login() == $login){
                if($this->get_senha()===$senha){
                    echo " <br> Olá, ".$this->nome." você foi autenticado. <br> ";
                }
            }else{
                echo "Algo esta errado, verifique sua senha e login.<br>";
            }
        }
        public function regPar(){
            echo "<h3>Participante Registrado</h3>";
            echo "Nome: ".$this->nome."<br>";
            echo "Email: ".$this->email."<br>";
            echo "Endereço: ".$this->endereco."<br>";
            echo "Telefone: ".$this->telefone."<br>";
        }
    }
?>
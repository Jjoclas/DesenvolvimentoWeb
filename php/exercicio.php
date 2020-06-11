  
<?php

class Professor{

    private $nome;
    private $idade;
    private $matricula;
    private $Salario;

    function __contruction($nome,$idade,$matricula,$Salario){
        $this->Nome = $nome;
        $this->Idade = $idade;
        $this->Matricula = $matricula;
        $this->Salario = $Salario;
        echo __CLASS__;
    }
    
    public function getNome(){ 
        return $this->nome;          
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getIdade(){ 
        return $this->Nome;          
    }

    public function setIdade($idade){
        $this->idade = $idade;
        return $this;
    }

    public function getMatricula(){ 
        return $this->matricula;          
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
        return $this;
    }

    public function getSalario(){ 
        return $this->Nome;          
    }

    public function setSalario($Salario){
        $this->Salario = $Salario;
        return $this;
    }
}
    
class ProfessorHorista extends Professor{

    private $Hora;

    function __contruction($Hora){
        $this->Hora = $Hora;
        echo __CLASS__;
    }

    public function getHora(){ 
        return $this->Hora;          
    }

    public function setNome($Hora){
        $this->Hora = $Hora;
        return $this;
    }

    public function calculaSalario(){
        $this->Hora * 40;
        return "O salario semanal  é  = $this";
    }
}

class ProfessorFixo extends Professor{

    private $salarioFixo;

    function __contruction($salarioFixo){
        $this->salarioFixo = $salarioFixo;
        echo __CLASS__;
    }

    public function getsalarioFixo(){ 
        return $this->salarioFixo;          
    }

    public function setNome($salarioFixo){
        $this->salarioFixo = $salarioFixo;
        return $this->salarioFixo;
    }
}

class Usuario{

    private $login;
    private $senha;

    function __contruction($login,$senha){
        $this->Login = $login;
        $this->Senha = $senha;
        echo __CLASS__;
    }

    public function getLogin(){ 
        return $this->login;          
    }

    public function setLogin($login){
        $this->login = $login;
        return $this->login;
    }

    public function getSenha(){ 
        return $this->login;          
    }

    public function setSenha($senha){
        $this->senha = $senha;
        return $this->senha;
    }

    public function validaSenha($senhaInserida){
        if ($senhaInserida == $this->senha){
            print "Acesso realizado com Sucesso";
        }else{
            print "Acesso Negado";
        }
      
    }

}
function contagem(){
    for($i=5; $i<=15; $i++){
        echo $i;
        echo <br>;
    }
}
?>
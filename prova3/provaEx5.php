class superHeroi{
    
    private $id;
    private $nome;
    private $poderEspecial;
    private $energia;
    private $forca
    private $origem

    public function superHeroi($id, $nome, $poderEspecial,$energia,$forca,$origem) {
        $this->setNome($id);
        $this->setid($nome);
        $this->setPoder($poderEspecial);
        $this->setEnergia($energia);
        $this->setForca($forca);
        $this->setOrigem($origem);
    }
    public function getEnergia()
    {
        return $this->energia;
    }
    public function setEnergia($energia)
    {
        $this->energia = $energia;
    }
    public function getid()
    {
        return $this->id;
    }
    public function setid($id)
    {
        $this->id = $id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setPoderEspecial($poderEspecial) 
    {
       $this->poderEspecial = $poderEspecial;
    }
    public function getPoderEspecial($poderEspecial) 
    {
       return $this->poderEspecial;
    }

    public function superHeroi() {
    echo  superHeroi\n";
    }
    public function getForca()
    {
        return $this->$forca;
    }
    public function setForca($forca)
    {
        $this->forca = $forca;
    }
    public function CalcularpoderMedio()
    {
        return $this->($energia * $forca)/2;
    }
    public function aumentarEnergia()
    {
        $this->$energia=  $energia * 12019049;
    }
}

$goku = new superHeroi(1,'Goku', 'voa, 
    superforça, muda a cor do cabelo, vira deus',
    100, 8000, 'a mesma do superman, so que boa'
    )
$Naruto = new superHeroi(4,'Naruto', 'ninja?',
    1, 8, 'não sei, não terminei o primeiro episodio'
    )
$homemDeFerro = new superHeroi(3,'Tony Stark', 'rico',
    200, 800, 'Criou um supertraje'
    )
$HarryPotter = new superHeroi(2, 'Harry', 'faz magia',
    '50', 200, 'ganhou um machucado na testa quando era bebe'
    )
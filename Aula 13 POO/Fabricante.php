<?php 
 class Fabricante{
    private $nome;
    private $endereco;
    private $cnpj;
    
    public function __construct($nome,$endereco,$cnpj){
        $this->nome=$nome;
        $this->endereco=$endereco;
        $this->cnpj=$cnpj;
    }
    public function __destruct(){
        //codigo para destruir
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}

?>
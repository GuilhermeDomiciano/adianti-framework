<?php

use Adianti\Database\TRecord;

class Cliente extends TRecord{
    const TABLENAME = 'cliente';
    const PRIMARYKEY = 'id';
    const IDPOLICY = 'max';
    
    private $cidade;
    private $categoria;
    public function __construct($id = null, $callObjectLoad=true){
        parent::__construct($id, $callObjectLoad);

        parent::addAttribute('nome');
        parent::addAttribute('endereco');
        parent::addAttribute('telefone');
        parent::addAttribute('nascimento');
        parent::addAttribute('situacao');
        parent::addAttribute('email');
        parent::addAttribute('genero');
        parent::addAttribute('categoria_id');
        parent::addAttribute('cidade_id');
        parent::addAttribute('created_at');
        parent::addAttribute('update_at');
    }
    public function get_categoria()
    {
        if (empty($this->categoria)){
            $this->categoria = new Categoria($this->categoria_id);
        }
        return $this->categoria;
    }

    public function get_cidade()
    {
        if (empty($this->cidade)){
            $this->cidade = new Cidade($this->cidade_id);
        }
        return $this->cidade;
    }

}
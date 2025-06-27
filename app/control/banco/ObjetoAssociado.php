<?php 
use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;
class ObjetoAssociado extends TPage{
    public function __construct()
    {
        parent::__construct();

        try {
            TTransaction::open('curso');
            TTransaction::dump();
            $cliente = new Cliente(8);
            echo $cliente->nome;
            echo '<br>';
            echo $cliente->cidade->nome;
            echo '<br>';
            echo $cliente->cidade->estado->nome;
            TTransaction::close();
        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}
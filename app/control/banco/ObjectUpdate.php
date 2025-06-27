<?php
use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;
class ObjectUpdate extends TPage{
    public function __construct()
    {
        parent::__construct();

        try{
            TTransaction::open('curso');
              
            $produto = Produto::find( 26 );

            TTransaction::dump();

            if ($produto instanceof Produto){
                $produto->descricao = 'Cabo HDMI atualizado';
                $produto->store();
                echo 'Produto atualizado com sucesso!<br>';
            } else{
                echo 'Produto não encontrado';
            }
            
            TTransaction::close();
        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }  
    }
}
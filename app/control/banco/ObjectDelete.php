<?php
use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;
class ObjectDelete extends TPage{
    public function __construct()
    {
        parent::__construct();

        try{
            TTransaction::open('curso');
              
            $produto = Produto::find( 27 );

            TTransaction::dump();

            if ($produto instanceof Produto){
                $produto->delete();
                echo 'Produto atualizado com sucesso!<br>';
            } else{
                echo 'Produto não encontrado';
            }
            
            // $produto = new Produto;
            // $produto->delete( 28 );

            TTransaction::close();
        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }  
    }
}
<?php 
use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class ObjectStore extends TPage{
    public function __construct()
    {
        parent::__construct();

        try{
            TTransaction::open('curso');

            // TTransaction::setLoggerFunction( function($message) {
            //     print( $message . '<br>' );
            // });

            TTransaction::dump();

            $produto = new Produto;
            $produto->descricao = 'Gravador DVD';
            $produto->estoque = 10;
            $produto->preco_venda = 100;
            $produto->unidade = 'PC';
            $produto->local_foto = '';
            $produto->store();

            new TMessage('info', 'Produto cadastrado com sucesso!');
            TTransaction::close();
        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }  
    }
}
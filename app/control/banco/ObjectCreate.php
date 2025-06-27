<?php
use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;
class ObjectCreate extends TPage{
    public function __construct()
    {
        parent::__construct();

        try{
            TTransaction::open('curso');

            Produto::create( [
                'descricao' => 'Cabo HDMI',
                'estoque' => 5,
                'preco_venda' => 20,
                'unidade' => 'PC',
            ]);

            new TMessage('info', 'Produto cadastrado com sucesso!');
            TTransaction::close();
        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }  
    }
}
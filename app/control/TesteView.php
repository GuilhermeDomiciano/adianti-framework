<?php
class TesteView extends TPage{
    public function __construct(){
        parent::__construct();

        echo 'construtor <br>';
    }

    public function onEvento($param){
        echo 'evento <br>';
        echo $param['nome'] . '<br>';
    }

    public static function onEventoEstatico($param){
        echo 'evento estatico <br>';
    }


    public function show(){
        parent::show();
        echo 'show <br>';
    }
    
}
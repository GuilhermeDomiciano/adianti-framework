<?php 
class TemplateViewRepeat extends TPage{
    public function __construct(){
        parent::__construct();

        try{
            $html = new THtmlRenderer('app\resources\template-repeat.html');

            $replace = [];
            $replace[] = ['id' => 1, 'nome'=> 'Guilherme', 'endereco' => 'Rua 1, 123'];
            $replace[] = ['id'=> 2, 'nome'=> 'João', 'endereco' => 'Rua 2, 456'];
            $replace[] = ['id'=> 3, 'nome'=> 'Davi', 'endereco'=> 'Rua 3, 789'];
            $html->enableSection('main', []);
            $html->enableSection('details', $replace, true);
            parent::add($html);
        }catch (Exception $e){
            new TMessage('error', $e->getMessage());
        }
    }
}
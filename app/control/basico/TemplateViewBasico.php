<?php

use Adianti\Widget\Dialog\TMessage;
use Adianti\Widget\Template\THtmlRenderer;
class TemplateViewBasico extends TPage{
    public function __construct(){
        parent::__construct();

        
        try{
            $html = new THtmlRenderer('app\resources\tamplate-basico.html');
            
            $customer = new stdClass();
            $customer->id = 5;
            $customer->name = 'Peter';
            $customer->address = 'Street 1';

            $replaces=[];
            $replaces['id']=$customer->id;
            $replaces['name']=$customer->name;
            // $replaces['address']=$customer->address;

            $replaces['customer'] = $customer;

            $html->enableSection('main', $replaces);

            $replaces2=[];
            $replaces['pbs']='Esta é a observação';
            $html->enableSection('outros', $replaces2);

            parent::add($html);
        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}
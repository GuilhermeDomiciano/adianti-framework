<?php 
class SingleWindowView extends TWindow{
    public function __construct(){
        parent::__construct();
        parent::setTitle('Título da Janela');
        parent::setSize(0.5, null);
        // parent::removePadding();
        // parent::removeTitleBar();

        $html = new THtmlRenderer('app/resources/page.html');
        $replaces['title'] = 'Título';
        $replaces['body'] = 'Conteúdo';
        $replaces['footer'] = 'Rodapé';
        $html->enableSection('main', $replaces);

        parent::add($html);
    }

}
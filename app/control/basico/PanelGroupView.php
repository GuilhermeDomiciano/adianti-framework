<?php 
class PanelGroupView extends TPage{
    public function __construct()
    {
        parent::__construct();

        $panel = new TPanelGroup('Título do panel');
        
        $table = new TTable;
        
        $table->width = '100%';
        $table->style = 'border: 1px solid #ccc;';
        $table->addRowSet('Coluna 1', 'Coluna 2', 'Coluna 3');
        $table->addRowSet('Linha 1', 'Linha 2', 'Linha 3');
        $table->addRowSet('Linha 4', 'Linha 5', 'Linha 6');
        
        $panel->add($table);

        $panel->addFooter('rodapé');

        parent::add($panel);
    }
}
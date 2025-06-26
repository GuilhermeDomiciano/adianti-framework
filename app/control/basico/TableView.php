<?php 

use Adianti\Widget\Form\TEntry;
class TableView extends TPage{
    public function __construct(){
        parent::__construct();

        $table = new TTable;
        $table->border = '1';
        $table->cellpadding = '4';
        $table->style = 'border-collapse: collapse; width: 100%';

        $row = $table->addRow();
        $row->addCell('A');
        $row->addCell('B');
        
        $title = new TLabel('Título', 'red', 18);
        
        $row = $table->addRow();
        $cell = $row->addCell($title);
        $cell->colspan = 2;
        $cell-> style = 'padding: 10px';

        $id = new TEntry('id');
        $nome = new TEntry('nome');
        $endereco = new TEntry('endereco');
        $fone = new TEntry('fone');
        $obs = new TEntry('obs');

        // $row = $table->addRow();
        // $row->addCell('Código');
        // $row->addCell($id);

        // $row = $table->addRow();
        // $row->addCell('Nome');
        // $row->addCell($nome);

        $table->addRowSet('Código', $id);
        $table->addRowSet('Nome', $nome);
        $table->addRowSet('Endereço', $endereco);
        $table->addRowSet('Fone', $fone);
        $table->addRowSet('Obs', $obs);

        parent::add( $table );
    }
}
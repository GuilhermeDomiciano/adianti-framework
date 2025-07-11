<?php 

use Adianti\Widget\Util\TXMLBreadCrumb;
class XBoxView extends TPage{
    public function __construct()
    {
        parent::__construct();

        $notebook1 = new TNotebook;
        $notebook2 = new TNotebook;

        $notebook1->appendPage('Page 1', new TLabel('Content of Page 1'));
        $notebook1->appendPage('Page 2', new TLabel('Content of Page 2'));

        $notebook2->appendPage('Page 1', new TLabel('Content of Page 1'));
        $notebook2->appendPage('Page 2', new TLabel('Content of Page 2'));

        $vbox = new TVBox();
        $vbox->style = 'width:100%';
        $vbox->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
        $vbox->add($notebook1);
        $vbox->add($notebook2);
        parent::add($vbox);
    }
}
<?php 

use Adianti\Widget\Base\TElement;
class EmbeddedPDFView extends TPage{
    public function __construct(){
        parent::__construct();

        $object = new TElement('iframe');
        $object->width = '100%';
        $object->height = '600px';
        $object->src = 'https://fswceulp.nyc3.cdn.digitaloceanspaces.com/portal/calendario-academico/calendario-academico-2025-2.pdf';
        $object->type = 'application/pdf';
        parent::add($object);
    }
}
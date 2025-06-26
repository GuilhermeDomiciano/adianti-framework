<?php 
use Adianti\Control\TPage;
class CLASS extends TPage{
    public function __construct()
    {
        parent::__construct();

        parent::add(...);
    }
}
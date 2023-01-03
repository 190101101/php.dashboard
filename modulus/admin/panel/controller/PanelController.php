<?php 

namespace modulus\admin\panel\controller;
use modulus\admin\panel\model\PanelModel;
use core\controller;

class PanelController extends controller
{
    public $panel;
    
    public function __construct()
    {
        $this->panel = new PanelModel();
    }

    public function index()
    {
        $this->layout('panel', 'admin', 'panel', 'panel', []);
    }

    public function limit($limit)
    {
        $this->panel->limit($limit);
    }
}

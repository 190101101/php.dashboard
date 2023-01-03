<?php 

namespace modulus\admin\panel\model;
use core\model;
use limit;

class PanelModel extends model
{
    public function limit($limit)
    {
        $limits = [5, 10, 25, 50, 100];

        in_array($limit, $limits) == TRUE ?: $this->return->referer();

        limit::set($limit);
        $this->return->referer();
    }
}


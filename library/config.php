<?php 

namespace library;
use User;

class config
{
    
    public $config;
    
    public $route = [];
    
    public $middleware;

    public function __construct($config)
    {
        $this->start($config);
        
        $this->middleware();
    }

    public function start($config)
    {
        if(User::has()){
            $this->route = $config['panel'];
        }else{
            $this->route = $config['auth'];
        }
        return $this->route;
    }

    public function middleware()
    {
        $this->middleware = require_once '../boot/middleware.php';
    }
}
<?php

namespace Core;

abstract class Controller
{
    /**
     * Parameters  from the matched route
     * @var array
     */
    protected $route_params = [];

    /**
     * Class Constructor
     * 
     * @param array $route_params Parameters from route
     * 
     * @return void
     */
    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }
}

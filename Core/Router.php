<?php

class Router
{
    /**
     * Associated Array of route
     *
     * @var array
     */
    protected $routes = [];

    /**
     * Add a route to routing table
     *
     * @param string $route
     * @param array $params (controller, action etc)
     *
     * @return void
     */
    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    /**
     * Get all routes from routing table
     *
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }
}

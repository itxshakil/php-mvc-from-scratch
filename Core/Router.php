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
     * Parameter from the matched route
     *
     * @var array
     */
    protected $params = [];

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
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Match the route to the routes in the routing table, setting the $params
     * property if  a route is found return true otherwise false
     *
     * @params string $url
     *
     * @return bool
     */
    public function match($url)
    {
        foreach ($this->routes as $route => $params) {
            if ($url == $route) {
                $this->params = $params;

                return true;
            }
        }

        return false;
    }
}

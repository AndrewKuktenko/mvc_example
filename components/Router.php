<?php


class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);

    }

    // returns request string
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }


    public function run()
    {
        echo print_r($this->routes);

        //get request string
        $uri = $this->getURI();

        //check this request in routes.php file
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                $segments = explode('/', $internalRoute);
                //if it is ok find which controller and action processes
                //the request

                $controllersName = array_shift($segments).'Controller';
                $controllersName = ucfirst($controllersName);

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                //connect file of class-controller
                $controllerFile = ROOT. '/controllers/'.$controllersName.'.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //Make object, call method(action)
                $controllerObject = new $controllersName;

                $result = call_user_func_array(array($controllerObject,$actionName),$parameters);

                if($result != null) {
                    break;
                }
            }
        }
    }
}
<?php

class Route
{
	public static function start()
	{
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		echo $_SERVER['REQUEST_URI'];
		var_dump($routes);

		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}

		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

		$model_name = 'Model_' . $controller_name;
		$controller_name = 'Controller_' . $controller_name;
		$action_name = 'action_' . $action_name;

		$model_file = strtolower($model_name) . '.php';
		$model_path = "application/models/" . $model_file;

		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		$controller_file = strtolower($controller_name) . '.php';
		$controller_path = "application/controllers/" . $controller_file;

		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;

            $controller = new $controller_name;
            $action = $action_name;
		}
		else
		{
			self::ErrorPage404();
		}


		
		if(method_exists($controller, $action))
		{
			$controller->$action();
		}
		else
		{
			self::ErrorPage404();
		}
	
	}

	static function ErrorPage404()
	{
	    echo 'Error Page ...';
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';

        echo '<br />';
        echo 'Host: ' . $host . '<br />';
        echo 'REQUEST URI: ' . $_SERVER['REQUEST_URI'] . '<br />';
        echo 'Routers: ' . explode('/', $_SERVER['REQUEST_URI']) . '<br />';
    }
    
}

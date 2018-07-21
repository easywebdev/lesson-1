<?php

class Controller_Main extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = new Model();
    }

	function action_index()
	{	
		//$this->view->generate('main_view.php', 'template_view.php');
        $this->model->get_data();
	}
}
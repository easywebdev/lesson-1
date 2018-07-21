<?php

class Controller {
	
	private $model;
	public $view;
	
	function __construct()
	{
		//$this->view = new View();
        $this->model = new Model();
	}

	function action_index()
	{
		$this->model->get_data();
	}
}

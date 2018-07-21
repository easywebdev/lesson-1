<?php

class Model
{
	private $view;

	public function __construct()
    {
        $this->view = new View();
    }

    public function get_data()
	{
		$this->view->generate(null, 'main_view.php', null);
	}
}
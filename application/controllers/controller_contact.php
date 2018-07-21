<?php

class Controller_Contact
{
    private $model;

    public function __construct()
    {
        $this->model = new Model_Contact();
    }

    public function action_index() {
        echo 'Index Action for Contact';
    }

    public function action_get() {
        var_dump($this->model->get_data());
    }
}
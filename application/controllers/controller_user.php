<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19.07.2018
 * Time: 21:14
 */

class Controller_User
{
    public $model;

    public function __construct()
    {
        $this->model = new Model_User();
    }

    public function action_index() {
        echo 'user index action';
    }

    public function action_get() {
        var_dump($this->model->get_user());
    }
}
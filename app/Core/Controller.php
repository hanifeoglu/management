<?php


class Controller
{

    public function view($viewName, $data)
    {
		// Create a new view and display the parsed contents
        $view = new View($viewName, $data);

		// View makes use of the __toString magic method to do this
        echo $view;
    }

    public function model($model)
    {
        require_once '../app/Models/' . ucfirst($model) . '.php';

        return new $model();
    }
}

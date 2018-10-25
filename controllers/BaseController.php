<?php
namespace Controllers;

use Model\BaseModel;


class BaseController {

    // base dir view path 
    // protected $baseDirForView = "";


    protected function renderView($viewName , $modelToCarry) {
        // called by this subclasses...
        // to render a view
        extract($modelToCarry);
        include VIEW_DIR ."/". $viewName . ".php";
    }

    protected function model($modelClassName) {
        $whichModel = BaseModel::getModelNamespace() . "\\" . $modelClassName;
        return new $whichModel; 
    }
}
<?php

class Controller {
    public static function CreateView($viewname)
    {
        require_once "./views/".$viewname.".php";
    }
}
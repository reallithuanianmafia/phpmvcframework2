<?php

require_once('../core/routes/routes.php');

function __autoload($class_name)
{
    if(file_exists('../core/classes/'.$class_name.'.php'))
    {
        require_once '../core/classes/'.$class_name.'.php';
    }
    else if(file_exists('../core/controllers/'.$class_name.'.php'))
    {
        require_once '../core/controllers/'.$class_name.'.php';
    }
}


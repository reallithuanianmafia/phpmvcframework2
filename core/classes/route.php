<?php 

class Route
{
   public static $validRoutes = [];
   
   public static function set($route, $controller, $method)
   {
       self::$validRoutes[] = $route;
       if($_GET['url'] == $route)
       {
           $controller = new $controller;
           $controller->$method();
       }
   }
}
<?php


 

if(!function_exists('view'))
{
    function view($view){

        return  new App\Http\Response($view);
    }
}




if(!function_exists('viewPath'))
{
    function viewPath($view){

        return  __DIR_. "/../views/$view.php";
    }
}
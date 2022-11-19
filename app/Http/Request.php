<?php


#definimos la clase que queremos 
namespace App\Http;


class Request{

    //
    protected $segments = [];
    protected $controller;
    protected $method;



    public function __construct(){
            #esto es la raiz 
        //platzi.test/servicios(es el controller)/index(metodo)
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);
        var_dump($segments);

        #aqui se definen los controllers 
        $this->setController();
        $this->setMethod();
    }


    public function setController(){
        $this->controller = empty( $this->segments[1])
            ? 'home' :  $this->segments;
    }

    public function setMethod(){
        $this->controller = empty( $this->segments[2])
            ? 'home' :  $this->segments;
    }

    public function getController(){

        $controller = ucfirst($this->controller);

        return "App\Http\Controllers\\{$controller}Controller";
    }


    public function getMethod(){

        return $this->method;
    }


    public function send(){
        $controller = $this->getController();
        $method = $this->getMethod();
                    //funcion interna de php que llama archivos, clases y funciones
        $response = call_user_func([new $controller, $method]);
        

        $response->send();

    }
}